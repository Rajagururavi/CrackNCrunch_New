<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class Panel extends BaseController
{
    public function dashboard()
    {
        $orderModel = new OrderModel();
        $data['count'] = $orderModel->getOrderStatus();
        return view('admin/dashboard', $data);
    }
    public function getOrdersByStatus($status)
    {
        $orderModel = new OrderModel();
        return $this->response->setJSON(
            $orderModel->getOrdersByStatus($status)
        );
    }
    public function insertProducts()
    {
        return view('admin/products/insert_products');
    }
    public function viewProducts()
    {
        return view('admin/products/view_products');
    }
    public function insertCategories()
    {
        return view('admin/products/insert_categories');
    }
    public function insertBrands()
    {
        return view('admin/products/insert_brands');
    }
}