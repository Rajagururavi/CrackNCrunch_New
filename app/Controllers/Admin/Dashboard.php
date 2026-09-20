<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\OrderModel;
    class Dashboard extends BaseController
    {
        public function index()
        {
            if (!session()->get('isAdminLoggedIn')) {
                return redirect()->to('/admin/login');
            }
            return view('admin/dashboard');
        }
    }