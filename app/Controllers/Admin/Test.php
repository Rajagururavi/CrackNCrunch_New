<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\BrandModel;
    use App\Models\CategoriesModel;
    class Test extends BaseController
    {
        public function index()
        {
            $brandModel = new BrandModel();
            $categoriesModel = new CategoriesModel();
            $brands = $brandModel->builder()->get()->getResult();
            $categories = $categoriesModel->builder()->get()->getResult();
            return view('admin/products/text_view', [
                'brands' => $brands,
                'categories' => $categories
            ]);
        }
        public function store()
        {
            $model = new \App\Models\ProductModel();
            $product_title = $this->request->getPost('product_title');
            $product_description = $this->request->getPost('product_description');
            $product_keyword     = $this->request->getPost('product_keyword');
            $brand_id            = $this->request->getPost('brands');
            $category_id         = $this->request->getPost('category');
            $product_price       = $this->request->getPost('product_price');
            $img1 = $this->request->getFile('product_image1');
            $img2 = $this->request->getFile('product_image2');
            $img3 = $this->request->getFile('product_image3');
            $imgName1 = $img1->getRandomName();
            $imgName2 = $img2->getRandomName();
            $imgName3 = $img3->getRandomName();
            $img1->move('uploads/products/', $imgName1);
            $img2->move('uploads/products/', $imgName2);
            $img3->move('uploads/products/', $imgName3);

            $model->insert([
                'product_title' => $product_title,
                'product_description' => $product_description,
                'product_keyword'     => $product_keyword,
                'brand_id'            => $brand_id,
                'category_id'         => $category_id,
                'product_image1'      => $imgName1,
                'product_image2'      => $imgName2,
                'product_image3'      => $imgName3,
                'product_price'       => $product_price,
                'status'              => 'active'
            ]);
            return redirect()->back()->with('success', 'Product added successfully');
        }
    }