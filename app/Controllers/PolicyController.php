<?php
    namespace App\Controllers;
    use App\Models\ProductModel;
    class PolicyController extends BaseController
    {
        public function terms()
        {
            return view('policies/terms');
        }
        public function privacy()
        {
            return view('policies/privacy');
        }
        public function shipping()
        {
            return view('policies/shipping');
        }
        public function returnPolicy()
        {
            return view('policies/return');
        }
        public function cancellation()
        {
            return view('policies/cancellation');
        }
        public function about()
        {
            return view('menu/about');
        }
        public function contact()
        {
            return view('menu/contact');
        }
        public function cart()
        {
            return view('menu/cart', $this->getCartData());
        }
        public function getCartData()
        {
            $session = session();
            $cart = $session->get('cart') ?? [];
            $subtotal = 0;
            foreach ($cart as $item) {
                $subtotal += $item['final_price'] ?? 0;
            }
            $shipping = ($subtotal > 5000) ? 0 : 60;
            $total = $subtotal + $shipping;
            return [
                'cart' => $cart,
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'total' => $total
            ];
        }
        public function shop()
        {
            $productModel = new ProductModel();
            $data['products'] = $productModel->select('id, product_title, product_image1, product_image2, product_price, product_description, status')->findAll();
            $data['pager'] = $productModel->pager;
            $data['category'] = 'Shop';
            return view('templates/header')
                . view('pages/shop', $data)
                . view('templates/footer');
        }
    }