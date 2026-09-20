<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\OrderModel;
    use App\Models\UserModel;
    class Order extends BaseController
    {
        public function index()
        {
            $orderModel = new OrderModel();
            $data['orders'] = $orderModel->getOrders();
            return view('admin/order/order_list', $data);
        }
        public function view($orderNumber)
        {
            $orderModel = new OrderModel();
            $userModel  = new UserModel();
            $order = $orderModel->where('order_number', $orderNumber)->first();
            if (!$order) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Order not found');
            }
            $user = $userModel->where('id', $order['user_id'])->first();
            $data['order'] = $order;
            $data['user']  = $user;
            return view('admin/order/view', $data);
        }
        public function updateStatus()
        {
            $orderId = $this->request->getPost('order_id');
            $orderNumber = $this->request->getPost('order_number');
            $status  = $this->request->getPost('order_status');
            $orderModel = new OrderModel();
            $orderModel->update($orderId, [
                'order_status' => $status
            ]);
            return redirect()->to(base_url('admin/order/view/' . $orderNumber));
        }
        public function invoice($orderNumber)
        {
            $orderModel = new OrderModel();
            $userModel = new UserModel();
            $order = $orderModel->where('order_number',$orderNumber)->first();
            $user = $userModel->find($order['user_id']);
            $data['order'] = $order;
            $data['user'] = $user;
            return view('admin/order/invoice',$data);
        }
    }