<?php
    namespace App\Models;
    use CodeIgniter\Model;
    class ProductModel extends Model
    {
        protected $table = 'products';
        protected $allowedFields = [
            'product_title',
            'product_description',
            'product_keyword',
            'brand_id',
            'category_id',
            'product_image1',
            'product_image2',
            'product_image3',
            'product_price',
            'status'
        ];
    }