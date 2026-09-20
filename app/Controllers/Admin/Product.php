<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\ProductModel;
    use App\Models\BrandModel;
    class Product extends BaseController
    {
         public function index()
         {
            $productModel = new ProductModel();
            $products = $productModel->findAll();
            $data['products'] = $productModel->findAll();
            return view('admin/products/view_products', $data);
         }
        public function textView()
        {
            return view('admin/products/text_view');
        }
        public function getProduct($id)
        {
            $productModel = new ProductModel();
            $product = $productModel->find($id);
            return $this->response->setJSON($product);
        }
        public function updateProduct()
        {
            $id = $this->request->getPost('id');
            $productModel = new ProductModel();
            $data = [
                'product_title'       => $this->request->getPost('product_title'),
                'product_description' => $this->request->getPost('product_description'),
                'product_keyword'     => $this->request->getPost('product_keyword'),
                'product_price'       => $this->request->getPost('product_price'),
                'status'              => $this->request->getPost('status'),
            ];
            $image1 = $this->request->getFile('product_image1');
            if ($image1 && $image1->isValid() && !$image1->hasMoved()) {
                $newName = $image1->getRandomName();
                $image1->move(FCPATH . 'uploads/products', $newName);
                $data['product_image1'] = $newName;
            }
            $image2 = $this->request->getFile('product_image2');
            if ($image2 && $image2->isValid() && !$image2->hasMoved()) {
                $newName = $image2->getRandomName();
                $image2->move(FCPATH . 'uploads/products', $newName);
                $data['product_image2'] = $newName;
            }
            $image3 = $this->request->getFile('product_image3');
            if ($image3 && $image3->isValid() && !$image3->hasMoved()) {
                $newName = $image3->getRandomName();
                $image3->move(FCPATH . 'uploads/products', $newName);
                $data['product_image3'] = $newName;
            }
            $productModel->update($id, $data);
            return $this->response->setJSON([
                'status'  => 'success',
                'message' => 'Product updated successfully.'
            ]);
        }
        public function viewBrands()
        {
            $model = new BrandModel();
            $brands = $model->findAll();
            return view('admin/products/view_brands', [
                'brands' => $brands
            ]);
        }
        public function getBrand($id)
        {
            $model = new BrandModel();
            $brand = $model->find($id);
            if (!$brand) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Brand not found'
                ]);
            }
            return $this->response->setJSON($brand);
        }
        public function updateBrand()
        {
            $id = $this->request->getPost('id');
            $model = new BrandModel();
            $brand = $model->find($id);
            if (!$brand) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Brand not found'
                ]);
            }
            $data = ['brand_title' => $this->request->getPost('brand_title')];
            $image = $this->request->getFile('brand_image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(FCPATH . 'uploads/brands', $newName);
                $data['brand_image'] = $newName;
                if (!empty($brand['brand_image'])) {
                    $oldImage = FCPATH . 'uploads/brands/' . $brand['brand_image'];
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
            }
            $model->update($id, $data);
            return $this->response->setJSON([
                'status'  => 'success',
                'message' => 'Brand updated successfully'
            ]);
        }
        public function deleteBrand($id)
        {
            $model = new BrandModel();
            $brand = $model->find($id);
            if (!$brand) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Brand not found'
                ]);
            }
            if (!empty($brand['brand_image'])) {
                $imagePath = FCPATH . 'uploads/brands/' . $brand['brand_image'];
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $model->delete($id);
            return $this->response->setJSON([
                'status'  => 'success',
                'message' => 'Brand deleted successfully'
            ]);
        }
    }