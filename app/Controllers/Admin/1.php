<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\BrandModel;
    class Product extends BaseController
    {
        public function create()
        {
            $brandModel = new BrandModel();
            $brands = $brandModel->builder()->get()->getResult();
            return view('admin/products/insert_products', [
                'brands' => $brands
            ]);
        }
    }