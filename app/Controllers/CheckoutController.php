<?php
    namespace App\Controllers;
    use App\Models\UserModel;
    class CheckoutController extends BaseController
    {
        public function index()
        {
            if (!session()->get('logged_in')) {
                session()->setFlashdata('error', 'Please login first to continue to checkout.');
                return redirect()->to(base_url('register'));
            }
            $userModel = new UserModel();
            $data['user'] = $userModel->find(session()->get('user_id'));
            return view('menu/checkout', $data);
        }
    }