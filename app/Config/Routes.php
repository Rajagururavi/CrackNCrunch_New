<?php

    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     */
    $routes->get('/', 'Home::index');
    $routes->get('admin/dashboard', 'Admin\Panel::dashboard');
    $routes->get('products/insert_products', 'Admin\Panel::insertProducts');
    $routes->get('products/insert_categories', 'Admin\Panel::insertCategories');
    $routes->get('products/insert_brands', 'Admin\Panel::insertBrands');
    $routes->get('admin/orders/status/(:any)', 'Admin\Panel::getOrdersByStatus/$1');
    $routes->get('admin/products/text_view', 'Admin\Product::textView');
    $routes->get('products/view_brands', 'Admin\Product::viewBrands');
    $routes->get('admin/products/view_products', 'Admin\Product::index');
    $routes->get('products/view_products', 'Admin\Product::index');
    $routes->get('admin/products/view_products', 'Admin\Product::index');
    $routes->get('admin/products/get/(:num)', 'Admin\Product::getProduct/$1');
    $routes->post('admin/products/update', 'Admin\Product::updateProduct');

    $routes->get('admin/products/view_brands', 'Admin\Product::viewBrands');
    $routes->get('admin/products/view_brands', 'Admin\Product::viewBrands');
    $routes->get('admin/products/get_brand/(:num)','Admin\Product::getBrand/$1');
    $routes->post('admin/products/update_brand', 'Admin\Product::updateBrand');
    $routes->delete('admin/products/delete_brand/(:num)', 'Admin\Product::deleteBrand/$1');

    $routes->post('whatsapp_order', 'PaymentController::whatsappOrder');

    $routes->get('admin/login', 'Admin\Auth::login');
    $routes->post('admin/loginProcess', 'Admin\Auth::loginProcess');
    $routes->get('admin/logout', 'Admin\Auth::logout');
    $routes->post('admin/updatePassword', 'Admin\Auth::updatePassword');
    $routes->get('admin/products', 'Admin\Product::create');
    $routes->post('admin/products/store', 'Admin\Product::store');
    $routes->get('admin/categories', 'Admin\Categories::create');
    $routes->post('admin/categories/store', 'Admin\Categories::store');
    $routes->get('admin/brands', 'Admin\Brands::create');
    $routes->post('admin/brands/store', 'Admin\Brands::store');
    $routes->get('admin/test', 'Admin\Test::index');
    $routes->get('products/test_view', 'Admin\Test::index');
    $routes->get('products/view_products', 'Admin\Panel::viewProducts');
    $routes->post('admin/test/store', 'Admin\Test::store');
    $routes->get('category/(:num)/(:any)', 'Admin\Pages\Shop::index/$1/$2');
    $routes->get('brand/(:num)/(:any)', 'Admin\Pages\Shop::brand/$1/$2');
    $routes->get('search', 'Search::index');
    $routes->get('terms', 'PolicyController::terms');
    $routes->get('privacy', 'PolicyController::privacy');
    $routes->get('shipping', 'PolicyController::shipping');
    $routes->get('return-policy', 'PolicyController::returnPolicy');
    $routes->get('cancellation', 'PolicyController::cancellation');
    $routes->get('about', 'PolicyController::about');
    $routes->get('contact', 'PolicyController::contact');
    $routes->get('cart', 'PolicyController::cart');
    $routes->get('shop', 'PolicyController::shop');
    $routes->get('shop/(:any)', 'Home::shop/$1');
    $routes->get('product_view/(:num)', 'Admin\Pages\Shop::product_view/$1');
    $routes->match(['get','post'], 'cart', 'CartController::index');
    $routes->post('add-cart', 'CartController::index');
    $routes->get('cart', 'CartController::cart');
    $routes->get('cart/delete/(:num)', 'CartController::delete/$1');
    $routes->match(['get', 'post'], 'add-cart', 'CartController::index');
    $routes->get('checkout', 'CheckoutController::index');
    $routes->get('quick-view/(:num)', 'Home::quickView/$1');

    // login rotues
    $routes->get('login', 'UserController::index'); 
    $routes->post('login', 'UserController::login'); 
    $routes->get('logout', 'UserController::logout'); 
    $routes->get('my_profile', 'UserController::profile'); 
    $routes->get('checkout', 'CheckoutController::index');
    $routes->get('register', 'UserController::register');
    $routes->get('register', 'UserController::register');
    $routes->post('register', 'UserController::saveRegister');
    $routes->get('my_profile', 'UserController::profile');
    $routes->post('my_profile', 'UserController::updateProfile');
    $routes->get('my_orders', 'UserController::myOrders');
    // $routes->get('wish_list', 'UserController::wishList');
    // $routes->post('wish_list', 'UserController::wishList');

    $routes->get('wish_list', 'UserController::wishlist');
    $routes->post('user/wishlist', 'UserController::wishlist');
    $routes->post('wishlist/product', 'UserController::wishlistProduct');
    $routes->post('wishlist/toggle', 'UserController::toggleWishlist');
    $routes->get('wishlist', 'UserController::wishlist');
    $routes->get('wishlist/get', 'UserController::getWishlist');

    $routes->get('wish_list/(:num)', 'UserController::wishList/$1');
    $routes->get('change_password', 'UserController::changePassword');
    $routes->post('change_password', 'UserController::updatePassword');
    $routes->get('delete_account', 'UserController::account');
    $routes->post('delete_account', 'UserController::deleteAccount');
    $routes->get('register', 'UserController::register');

    $routes->post('payment', 'PaymentController::index');
    $routes->get('payment', 'PaymentController::index');
    $routes->get('payment_method', 'PaymentController::paymentMethod');
    $routes->post('payment_process', 'PaymentController::paymentProcess');
    $routes->get('pay_now', 'PaymentController::payNow');
    $routes->get('payment_success', 'PaymentController::success');
    // $routes->post('payment_success', 'PaymentController::success');

    $routes->get('order/order_list', 'Admin\Order::index');
    $routes->get('admin/order/view/(:any)', 'Admin\Order::view/$1');
    $routes->post('admin/order/updateStatus', 'Admin\Order::updateStatus');
    $routes->get('admin/order/invoice/(:any)', 'Admin\Order::invoice/$1');

    $routes->post('send-email-otp', 'UserController::sendEmailOTP');
    $routes->post('verify-email-otp', 'UserController::verifyEmailOTP');