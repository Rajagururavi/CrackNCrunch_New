<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\AdminModel;
    class Auth extends BaseController
    {
        public function login()
        {
            $model = new AdminModel();
            $user = $model->first(); 
            $phone = $user['phone'];
            $masked = "xxxxxx" . substr($phone, -2);
            return view('admin/login', ['maskedPhone' => $masked]);
        }

        public function loginProcess()
        {
            $model = new AdminModel();
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $model->where('username', $username)->first();
            if ($user && $user['password'] === $password) {
                session()->set('isAdminLoggedIn', true);
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid Login');
            }
        }
        public function updatePassword()
        {
            $model = new AdminModel();
            $newPass = $this->request->getPost('newPass');
            $confirmPass = $this->request->getPost('confirmPass');
            if ($newPass !== $confirmPass) {
                return redirect()->back()->with('error', 'Password mismatch');
            }
            $user = $model->first();
            $model->update($user['id'], [
                'password' => $newPass
            ]);
            return redirect()->back()->with('success', 'Password updated successfully');
        }
        public function logout()
        {
            session()->destroy();
            return redirect()->to('/admin/login');
        }
    }