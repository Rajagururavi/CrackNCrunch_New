<?php
    namespace App\Models;
    use CodeIgniter\Model;
    class BrandModel extends Model
    {
        protected $table = 'brand';
        protected $allowedFields = ['brand_title', 'brand_image', 'id'];
    }