<?php
    namespace App\Models;
    use CodeIgniter\Model;
    class UserModel extends Model
    {
        protected $table            = 'users';
        protected $primaryKey       = 'id';
        protected $returnType       = 'array';
        protected $allowedFields = [
            'full_name',
            'email',
            'mobile',
            'password',
            'address',
            'city',
            'state',
            'country',
            'gender',
            'pincode'
        ];
        protected $useTimestamps = false;
    }