<?php
    namespace App\Controllers;
    use App\Models\OrderModel;
    class PaymentController extends BaseController
    {
        public function index()
        {
            $data = [
                'fullname' => $this->request->getPost('fullname'),
                'mobile'   => $this->request->getPost('mobile'),
                'email'    => $this->request->getPost('email'),
                'address'  => $this->request->getPost('address'),
                'city'     => $this->request->getPost('city'),
                'state'    => $this->request->getPost('state'),
                'country'  => $this->request->getPost('country'),
                'pincode'  => $this->request->getPost('pincode'),
            ];
            $cart = session()->get('cart') ?? [];
            $subtotal = 0;
            foreach ($cart as $item) {
                $subtotal += $item['final_price'];
            }
            $shipping = 60;
            $total = $subtotal + $shipping;
            $data['cart'] = $cart;
            $data['subtotal'] = $subtotal;
            $data['shipping'] = $shipping;
            $data['total'] = $total;
            return view('menu/payment', $data);
        }
        public function paymentMethod()
        {
            $amount = $this->request->getGet('amount');
            if ($amount === null || $amount === '' || !is_numeric($amount)) {
                return redirect()->to(base_url('checkout'))->with('error', 'Invalid payment amount.');
            }
            return view('menu/payment_method', [
                'amount' => (float) $amount
            ]);
        }
        public function paymentProcess()
        {
            $paymentMethod = $this->request->getPost('payment_method');
            $paymentStatus = $this->request->getPost('payment_status');
            $upiTransactionId = $this->request->getPost('upi_transaction_id');
            if ($paymentStatus == 'Failure') {
                session()->setFlashdata('payment_status', 'Failure');
                return redirect()->to(base_url('payment_success'));
            }
            session()->set('payment_method', $paymentMethod);
            return $this->payNow($paymentMethod, $upiTransactionId);
        }
        public function payNow($paymentMethod, $upiTransactionId = null)
        {
            $OrderModel = new OrderModel();
            $cart = session()->get('cart') ?? [];
            if (empty($cart)) {
                return redirect()->to(base_url('cart'))->with('error', 'Your cart is empty.');
            }
            $userId = session()->get('user_id');
            $orderNumber = 'ORD' . date('YmdHis');
            $subtotal = 0;
            foreach ($cart as $item) {
                $subtotal += $item['final_price'];
            }
            $shipping = 60;
            $total = $subtotal + $shipping;
            foreach ($cart as $item) {
                $data = [
                    'user_id'            => $userId,
                    'order_number'       => $orderNumber,
                    'product_name'       => $item['product_title'],
                    'product_image'      => $item['product_image'],
                    'weight'             => $item['weight'],
                    'quantity'           => $item['quantity'],
                    'subtotal'           => $total,
                    'payment_method'     => $paymentMethod,
                    'upi_transaction_id' => $upiTransactionId,
                    'order_status'       => 'Processing'
                ];
                $OrderModel->insert($data);
            }
            session()->remove('cart');
            session()->setFlashdata('payment_status', 'Success');
            return redirect()->to(base_url('payment_success'));
        }
        public function whatsappOrder()
        {
            $OrderModel = new OrderModel();
            $cart = session()->get('cart') ?? [];
            if (empty($cart)) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Your cart is empty.'
                ]);
            }
            $userId = session()->get('user_id');
            $orderNumber = 'ORD' . date('YmdHis');
            $subtotal = 0;
            foreach ($cart as $item) {
                $subtotal += $item['final_price'];
            }
            $shipping = 60;
            $total = $subtotal + $shipping;
            foreach ($cart as $item) {
                $data = [
                    'user_id'            => $userId,
                    'order_number'       => $orderNumber,
                    'product_name'       => $item['product_title'],
                    'product_image'      => $item['product_image'],
                    'weight'             => $item['weight'],
                    'quantity'           => $item['quantity'],
                    'subtotal'           => $total,
                    'payment_method'     => 'WhatsApp',
                    'upi_transaction_id' => null,
                    'order_status'       => 'Processing'
                ];
                if (!$OrderModel->insert($data)) {
                    return $this->response->setJSON([
                        'status'  => 'error',
                        'message' => 'Order could not be saved.'
                    ]);
                }
            }
            session()->remove('cart');
            session()->set([
                'order_number' => $orderNumber,
                'order_total'  => $total
            ]);
            session()->setFlashdata('payment_status', 'Success');
            return $this->response->setJSON([
                'status'      => 'success',
                'order_number'=> $orderNumber
            ]);
        }
        public function success()
        {
            return view('menu/payment_success');
        }
    }