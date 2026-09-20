<?php
    namespace App\Controllers;
    use App\Models\UserModel;
    use App\Models\OrderModel;
    class UserController extends BaseController
    {
        public function index()
        {
            return view('user/login');
        }
        public function login()
        {
            $model = new UserModel();
            $email = trim($this->request->getPost('email'));
            $password = trim($this->request->getPost('password'));
            $user = $model->where('email', $email)->first();
            if (!$user) {
                return redirect()->back()->with('error', 'User not found');
            }
            if ($password != $user['password']) {
                return redirect()->back()->with('error', 'Invalid password');
            }
            session()->set([
                'user_id'   => $user['id'],
                'full_name' => $user['full_name'],
                'logged_in' => true
            ]);
            return redirect()->to(base_url('/'));
        }
        public function register()
        {
            return view('user/register');
        }
        public function saveRegister()
        {
            $model = new UserModel();
            $full_name = $this->request->getPost('full_name');
            $email     = $this->request->getPost('email');
            $mobile    = $this->request->getPost('mobile');
            $password  = $this->request->getPost('password');
            $confirm   = $this->request->getPost('confirm_password');
            if ($password != $confirm) {
                return redirect()->back()->with('error', 'Passwords do not match.');
            }
            if ($model->where('email', $email)->first()) {
                return redirect()->back()->with('error', 'Email already exists. Please login.');
            }
            if ($model->where('mobile', $mobile)->first()) {
                return redirect()->back()->with('error', 'Mobile number already exists. Please login.');
            }
            $model->insert([
                'full_name' => $full_name,
                'email'     => $email,
                'mobile'    => $mobile,
                'password'  => $password
            ]);
            return redirect()->to(base_url('/'))->with('success', 'Registration successful.');
        }
        public function logout()
        {
            session()->destroy();
            return redirect()->to('/');
        }
        public function profile()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            $model = new UserModel();
            $user = $model->find(session()->get('user_id'));
            return view('user/profile', [
                'user' => $user
            ]);
        }
        public function updateProfile()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            $model = new UserModel();
            $userId = session()->get('user_id');
            $data = [
                'full_name' => $this->request->getPost('full_name'),
                'mobile'    => $this->request->getPost('mobile'),
                'email'    => $this->request->getPost('email'),
                'address'   => $this->request->getPost('address'),
                'city'      => $this->request->getPost('city'),
                'state'     => $this->request->getPost('state'),
                'country'   => $this->request->getPost('country'),
                'pincode'   => $this->request->getPost('pincode'),
                'gender'   => $this->request->getPost('gender')
            ];
            $model->update($userId, $data);
            session()->set('full_name', $data['full_name']);
            return redirect()->to(base_url('my_profile'))->with('success', 'Profile updated successfully.');
        }
        public function myOrders()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            $model = new UserModel();
            $user = $model->find(session()->get('user_id'));
            $orderModel = new OrderModel();
            $orders = $orderModel->where('user_id', session()->get('user_id'))->orderBy('id', 'DESC')->findAll();
            return view('user/orders', [
                'user' => $user,
                'orders' => $orders
            ]);
        }
        public function changePassword()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            $model = new UserModel();
            $user = $model->find(session()->get('user_id'));
            return view('user/change_password', [
                'user' => $user
            ]);
        }
        public function updatePassword()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            $model = new UserModel();
            $user = $model->find(session()->get('user_id'));
            $currentPassword = $this->request->getPost('current_password');
            $newPassword = $this->request->getPost('new_password');
            $confirmPassword = $this->request->getPost('confirm_password');
            if ($currentPassword != $user['password']) {
                return redirect()->back()->with('error', 'Current password is incorrect.');
            }
            if ($newPassword != $confirmPassword) {
                return redirect()->back()->with('error', 'New password and Confirm password do not match.');
            }
            $model->update($user['id'], [
                'password' => $newPassword
            ]);
            return redirect()->back()->with('success', 'Password changed successfully.');
        }
        public function account()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            $model = new UserModel();
            $user = $model->find(session()->get('user_id'));
            return view('user/delete_account', [
                'user' => $user
            ]);
        }
        public function deleteAccount()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            if ($this->request->getMethod() == 'POST') {
                $userId = session()->get('user_id');
                if (!$userId) {
                    return redirect()->to(base_url('login'));
                }
                $userModel = new UserModel();
                $userModel->delete($userId);
                session()->destroy();
                return redirect()->to(base_url())->with('success', 'Your account has been deleted successfully.');
            }
            return view('pages/home');
        }
        public function wishlist()
        {
            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('/'));
            }
            $model = new UserModel();
            $user = $model->find(session()->get('user_id'));
            return view('user/wish_list', [
                'user' => $user
            ]);
        }
        public function wishlistProduct()
        {
            $productId = $this->request->getPost('product_id');
            return $this->response->setJSON([
                'status'     => 'success',
                'product_id' => $productId
            ]);
        }
    }