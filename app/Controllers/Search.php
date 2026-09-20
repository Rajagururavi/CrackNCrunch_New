<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\BrandModel;
use App\Models\CategoriesModel;

class Search extends BaseController
{
    public function index()
    {
        $keyword = $this->request->getGet('q');

        $productModel = new ProductModel();
        $brandModel = new BrandModel();
        $categoriesModel = new CategoriesModel();

        // PRODUCTS (SEARCH)
        if (!empty($keyword)) {
            $products = $productModel->like('product_title', $keyword)
                ->orLike('product_keyword', $keyword)
                ->builder()
                ->get()
                ->getResult();
        } else {
            $products = $productModel->builder()->get()->getResult();
        }

        // BRANDS + CATEGORIES
        $brands = $brandModel->builder()->get()->getResult();
        $categories = $categoriesModel->builder()->get()->getResult();

        return view('pages/search_page', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories,
            'keyword' => $keyword
        ]);
    }
}