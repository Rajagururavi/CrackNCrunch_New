<?php
    namespace App\Models;
    use CodeIgniter\Model;
    class CategoriesModel extends Model
    {
        protected $table = 'categories';
        protected $allowedFields = ['cat_title', 'cat_image', 'id'];
    }