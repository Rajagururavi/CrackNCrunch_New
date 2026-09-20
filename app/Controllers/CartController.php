<?php
    namespace App\Controllers;
    class CartController extends BaseController
    {
        public function index()
        {
            $session = session();
            $cartItem = [
                'product_id'    => $this->request->getPost('product_id'),
                'product_title' => $this->request->getPost('product_title'),
                'product_image' => $this->request->getPost('product_image'),
                'weight'        => $this->request->getPost('weight'),
                'quantity'      => $this->request->getPost('quantity'),
                'final_price'   => $this->request->getPost('final_price')
            ];
            $cart = $session->get('cart') ?? [];
            if (!empty($cartItem['product_id'])) {
                $cart[] = $cartItem;
            }
            $session->set('cart', $cart);
            $session->setFlashdata('open_cart', true);
            return redirect()->back();
        }
        public function delete($key)
        {
            $session = session();
            $cart = $session->get('cart') ?? [];
            if (isset($cart[$key])) {
                unset($cart[$key]);
                $cart = array_values($cart);
                $session->set('cart', $cart);
            }
            return redirect()->back();
        }
        private function getCartData()
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
        public function home()
        {
            $session = session();
            $data['cart'] = $session->get('cart') ?? [];
            return view('templates/header', $data);
        }
    }