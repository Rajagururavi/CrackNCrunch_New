<?php
    namespace App\Controllers\Admin\Pages;
    use App\Controllers\BaseController;
    use App\Models\BrandModel;
    use App\Models\CategoriesModel;
    use App\Models\ProductModel;
    class Shop extends BaseController
    {
        public function index($id = null, $name = null)
        {
            $brandModel = new BrandModel();
            $categoriesModel = new CategoriesModel();
            $brands = $brandModel->builder()->get()->getResult();
            $categories = $categoriesModel->builder()->get()->getResult();
            return view('pages/shop_page', [
                'brands' => $brands,
                'categories' => $categories,
                'cat_id' => $id,
                'cat_name' => urldecode($name)   
            ]);
        }
        public function product_view($id)
        {
            $productModel = new ProductModel();
            $data['product'] = $productModel->find($id);
            return view('templates/header')
                . view('pages/product_view', $data)
                . view('templates/footer');
        }
    }