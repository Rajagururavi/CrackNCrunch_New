<?php
    namespace App\Controllers;
    use App\Models\BrandModel;
    use App\Models\CategoriesModel;
    use App\Models\ProductModel;
    class Home extends BaseController
    {
        public function index(): string
        {
            $categories = [];
            $brands = [];
            try {
                $categoryModel = new CategoriesModel();
                $categories = $categoryModel->builder()->get()->getResult();
                $brandModel = new BrandModel();
                $brands = $brandModel->builder()->get()->getResult();
                $productModel = new ProductModel();
                foreach ($brands as $brand) {
                    $brand->products = $productModel->where('brand_id', $brand->id)->limit(5)->findAll();
                }
            } catch (\Throwable $e) {
                log_message('error', 'Home controller DB exception: ' . $e->getMessage());
            }

            $headerData['pageTitle'] = 'Home';
            return view('templates/header', $headerData)
            . view('pages/home', [
                'categories' => $categories,
                'brands'     => $brands
            ])
            . view('templates/footer');
        }
        public function shop($category)
        {
            $data['category'] = $category;
            $categoryModel = new CategoriesModel();
            $productModel = new ProductModel();
            $brandModel = new BrandModel();
            $cat = $categoryModel->where('cat_title', $category)->first();
            if ($cat) {
                $cat_id = $cat['id'];
                $products = $productModel->where('category_id', $cat_id)->findAll();
            } else {
                $brand = $brandModel->where('brand_title', $category)->first();
                if ($brand) {
                    $brand_id = $brand['id'];
                    $products = $productModel->where('brand_id', $brand_id)->findAll();
                } else {
                    $products = [];
                }
            }
            $data['products'] = $products;
            $data['categories'] = $categoryModel->findAll();
            $headerData['pageTitle'] = $category;
            return view('templates/header', $headerData)
                . view('pages/shop', $data)
                . view('templates/footer');
        }
        public function quickView($id)
        {
            $productModel = new ProductModel();
            $product = $productModel->where('id', $id)->first();
            if (!$product) {
                return $this->response->setStatusCode(404)->setJSON([
                    'status' => false,
                    'message' => 'Product not found'
                ]);
            }
            return $this->response->setJSON([
                'status' => true,
                'product' => [
                    'product_title' => $product['product_title'],
                    'product_price' => $product['product_price'],
                    'product_description' => $product['product_description'],
                    'product_image1' => $product['product_image1'],
                    'status' => $product['status']
                ]
            ]);
        }
    }