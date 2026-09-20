<?php
    $session = session();
    $cart = $session->get('cart') ?? [];
    $cartCount = 0;
    foreach ($cart as $item){
        $cartCount += $item['quantity']; 
    }
    $full_name = $session->get('full_name');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= isset($pageTitle) ? $pageTitle : 'Home'; ?> - CRACK N CRUNCH</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            body{
                font-family:Arial,sans-serif;
                background:#f5f5f5;
            }
            .top-navbar{
                background:#f5deb3;
                height:45px;
                display:flex;
                align-items:center;
                justify-content:center;
                position:fixed;
                top:0;
                width:100%;
                z-index:9999;
            }
            .scroll-text{
                width:80%;
                text-align:center;
            }
            .scroll-text marquee{
                color:#fff;
                font-size:15px;
                font-weight:600;
            }
            .auth-links{
                position:absolute;
                right:20px;
            }
            .auth-links a{
                color:#000;
                text-decoration:none;
                font-size:14px;
                font-weight:600;
            }
            .login-wrapper{
                position:relative;
            }
            .login-dropdown{
                position:absolute;
                top:45px;
                right:0;
                width:330px;
                background:#fff;
                padding:25px;
                border-radius:10px;
                display:none;
                box-shadow:0 8px 25px rgba(0,0,0,0.2);
                z-index:99999;
            }
            .top-links{
                display:flex;
                justify-content:space-between;
                font-weight:600;
            }
            .divider{
                margin:10px 0 15px;
            }
            .login-dropdown input{
                width:100%;
                padding:10px;
                margin-bottom:12px;
                border:1px solid #ccc;
                border-radius:6px;
                outline:none;
            }
            .password-box{
                position:relative;
            }
            .password-box i{
                position:absolute;
                right:10px;
                top:12px;
                cursor:pointer;
            }
            .login-btn{
                width:100%;
                padding:10px;
                background:#000;
                color:#fff;
                border:none;
                border-radius:6px;
            }
            .bottom-links{
                margin-top:15px;
                display:flex;
                justify-content:space-between;
                align-items:center;
            }
            .remember{
                display:flex;
                align-items:center;
                gap:6px;
                white-space:nowrap;
                font-size:13px;
                color:#555;
            }
            .remember input{
                width:14px;
                height:14px;
                margin:0;
            }
            .bottom-links a{
                font-size:13px;
                color:#555;
                text-decoration:none;
            }
            .bottom-links a:hover{
                text-decoration:underline;
            }
            .main-navbar{
                background:#000;
                padding:0px 0;
                position:fixed;
                top:45px;
                width:100%;
                z-index:9998;
            }
            .nav-container{
                display:flex;
                justify-content:space-between;
                align-items:center;
            }
            .menu{
                display:flex;
                align-items:center;
            }
            .menu a{
                color:#fff;
                margin:0 10px;
                text-decoration:none;
                font-size:14px;
                transition:0.3s;
            }
            .menu a:hover{
                color:#f5deb3;
            }
            .search-box{
                position:relative;
            }
            .search-box input{
                padding:7px 35px 7px 12px;
                border-radius:25px;
                border:none;
                outline:none;
            }
            .search-box i{
                position:absolute;
                right:12px;
                top:9px;
                color:#555;
            }
            .cart{
                color:#fff;
                margin-left:15px;
                font-size:20px;
            }
            .dropdown-menu-custom{
                position:relative;
            }
            .main-drop-btn{
                color:#fff;
                text-decoration:none;
                padding:10px;
                display:flex;
                align-items:center;
            }
            .dropdown-content{
                position:absolute;
                top:100%;
                left:0;
                background:#fff;
                min-width:240px;
                display:none;
                box-shadow:0 5px 20px rgba(0,0,0,0.15);
                border-radius:8px;
                z-index:9999;
            }
            .dropdown-content a{
                color:#000 !important;
                padding:12px 15px;
                display:flex;
                justify-content:space-between;
                align-items:center;
                text-decoration:none;
                border-bottom:1px solid #eee;
            }
            .dropdown-content a:hover{
                background:#f5f5f5;
                color:#00bcd4 !important;
            }
            .dropdown-menu-custom:hover .dropdown-content{
                display:block;
            }
            .sub-dropdown{
                position:relative;
            }
            .sub-dropdown-content{
                position:absolute;
                top:0;
                left:100%;
                background:#fff;
                min-width:200px;
                display:none;
                box-shadow:0 5px 20px rgba(0,0,0,0.15);
                border-radius:8px;
            }
            .sub-dropdown:hover .sub-dropdown-content{
                display:block;
            }
            .sub-dropdown > a{
                display:flex;
                justify-content:space-between;
                align-items:center;
            }
            .menu-toggle{
                display:none;
                color:#fff;
                font-size:25px;
                cursor:pointer;
            }
            .mobile-menu{
                position:fixed;
                top:0;
                left:-100%;
                width:70%;
                height:100vh;
                background:#111;
                z-index:999999;
                padding:25px;
                transition:0.4s;
                overflow-y:auto;
            }
            .mobile-menu.active{
                left:0;
            }
            .close-btn{
                text-align:right;
                margin-bottom:25px;
            }
            .close-btn i{
                color:#fff;
                font-size:28px;
                cursor:pointer;
            }
            .mobile-links a{
                display:flex;
                justify-content:space-between;
                align-items:center;
                color:#fff;
                text-decoration:none;
                padding:15px 0;
                border-bottom:1px solid rgba(255,255,255,0.1);
                font-size:15px;
            }
            .mobile-login{
                margin-top:25px;
            }
            .mobile-login a{
                display:flex;
                align-items:center;
                gap:10px;
                color:#fff;
                text-decoration:none;
                font-size:15px;
            }
            .mobile-drop-btn{
                width:100%;
                display:flex !important;
                justify-content:space-between;
                align-items:center;
            }
            .mobile-dropdown-content{
                display:none;
                background:#1a1a1a;
            }
            .mobile-dropdown.active .mobile-dropdown-content{
                display:block;
            }
            .mobile-dropdown-content a{
                display:flex;
                justify-content:space-between;
                align-items:center;
                color:#fff;
                padding:14px 18px;
                border-bottom:1px solid rgba(255,255,255,0.08);
                text-decoration:none;
                font-size:14px;
            }
            .mobile-sub-btn{
                display:flex !important;
                justify-content:space-between;
                align-items:center;
            }
            .mobile-sub-content{
                display:none;
                background:#2a2a2a;
            }
            .mobile-sub-dropdown.active .mobile-sub-content{
                display:block;
            }
            .mobile-sub-content a{
                padding-left:35px !important;
                font-size:13px;
                color:#ddd !important;
            }
            .floating-contact{
                position:fixed;
                right:20px;
                bottom:20px;
                z-index:999999;
            }
            .main-contact-btn{
                width:60px;
                height:60px;
                background:#000;
                border-radius:50%;
                display:flex;
                justify-content:center;
                align-items:center;
                cursor:pointer;
                box-shadow:0 5px 20px rgba(0,0,0,0.25);
                transition:0.3s;
            }
            .main-contact-btn i{
                color:#fff;
                font-size:24px;
            }
            .main-contact-btn:hover{
                transform:scale(1.1);
            }
            .contact-items{
                position:absolute;
                bottom:75px;
                right:0;
                display:none;
                flex-direction:column;
                gap:12px;
            }
            .contact-items.active{
                display:flex;
            }
            .contact-btn{
                width:55px;
                height:55px;
                border-radius:50%;
                display:flex;
                justify-content:center;
                align-items:center;
                text-decoration:none;
                box-shadow:0 5px 20px rgba(0,0,0,0.20);
                transition:0.3s;
            }
            .contact-btn i{
                color:#fff;
                font-size:22px;
            }
            .contact-btn:hover{
                transform:translateY(-5px);
            }
            .phone-btn{
                background:#2196f3;
            }
            .whatsapp-btn{
                background:#25d366;
            }
            .instagram-btn{
                background:#e1306c;
            }
            .main-contact-btn{
                background:#000;
                color:#fff;
                padding:14px 18px;
                border-radius:50px;
                display:flex;
                align-items:center;
                gap:10px;
                cursor:pointer;
                box-shadow:0 5px 20px rgba(0,0,0,0.25);
                transition:0.3s;
                font-size:15px;
                font-weight:600;
            }
            .main-contact-btn i{
                font-size:18px;
            }
            .main-contact-btn:hover{
                transform:translateY(-4px);
                background:#222;
            }
            .floating-contact{
                position:fixed;
                right:20px;
                bottom:20px;
                display:flex;
                align-items:center;
                gap:10px;
                z-index:999999;
            }
            .contact-text-box{
                background:#fff;          
                color:#333;
                font-size:14px;
                font-weight:600;
                padding:10px 14px;        
                border-radius:25px;       
                box-shadow:0 5px 15px rgba(0,0,0,0.08);
                white-space:nowrap;
            }
            .main-contact-btn{
                width:50px;
                height:50px;
                background:#000;
                color:#fff;
                display:flex;
                justify-content:center;
                align-items:center;
                border-radius:50%;
                cursor:pointer;
                box-shadow:0 5px 20px rgba(0,0,0,0.25);
                transition:0.3s;
            }
            .main-contact-btn i{
                font-size:18px;
            }
            .main-contact-btn:hover{
                transform:scale(1.1);
                background:#222;
            }
            .open-cart-btn{
                background:#000;
                color:#fff;
                border:none;
                padding:12px 25px;
                cursor:pointer;
                border-radius:5px;
            }
            .cart-overlay{
                position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100vh;
                background:rgba(0,0,0,.45);
                backdrop-filter:blur(4px);
                opacity:0;
                visibility:hidden;
                transition:.3s;
                z-index:9998;
            }
            .cart-overlay.show{
                opacity:1;
                visibility:visible;
            }
            .cart-popup{
                position:fixed;
                top:0;
                right:-430px;
                width:400px;
                height:100vh;
                background:#fff;
                z-index:9999;
                transition:.4s ease;
                display:flex;
                flex-direction:column;
                box-shadow:-8px 0 30px rgba(0,0,0,.15);
            }
            .cart-popup.show{
                right:0;
            }
            .cart-header{
                display:flex;
                justify-content:space-between;
                align-items:center;
                padding:20px;
                border-bottom:1px solid #ececec;
            }
            .cart-header h3{
                margin:0;
                font-size:22px;
                font-weight:600;
            }
            .close-btn{
                font-size:30px;
                cursor:pointer;
                transition:.3s;
            }
            .close-btn:hover{
                color:red;
            }
            .cart-body{
                flex:1;
                overflow-y:auto;
                padding:20px;
            }
            .cart-body::-webkit-scrollbar{
                width:6px;
            }
            .cart-body::-webkit-scrollbar-thumb{
                background:#ccc;
                border-radius:20px;
            }
            .cart-item{
                display:flex;
                gap:15px;
                margin-bottom:18px;
                padding-bottom:18px;
                border-bottom:1px solid #eee;
            }
            .cart-item img{
                width:80px;
                height:80px;
                object-fit:cover;
                border-radius:10px;
                border:1px solid #eee;
            }
            .cart-info{
                flex:1;
            }
            .cart-info h4{
                margin:0 0 8px;
                font-size:16px;
                color:#222;
            }
            .cart-info p{
                margin:4px 0;
                color:#666;
                font-size:14px;
            }
            .cart-info strong{
                display:block;
                margin-top:8px;
                color:#1a8f3c;
                font-size:18px;
            }
            .remove-btn{
                display:inline-block;
                margin-top:10px;
                color:#ff3b30;
                font-size:13px;
                text-decoration:none;
                font-weight:600;
            }
            .remove-btn:hover{
                text-decoration:underline;
            }
            .cart-total{
                border-top:1px solid #ddd;
                padding:20px;
                background:#fff;
            }
            .cart-total h3{
                display:flex;
                justify-content:space-between;
                margin:0 0 15px;
                font-size:20px;
            }
            .checkout-btn{
                width:100%;
                height:48px;
                border:none;
                background:#1a8f3c;
                color:#fff;
                font-size:16px;
                border-radius:8px;
                cursor:pointer;
            }
            .checkout-btn:hover{
                background:#157133;
            }
            .empty-cart{
                height:100%;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                text-align:center;
            }
            .empty-cart img{
                width:120px;
                margin-bottom:20px;
            }
            .empty-cart h2{
                margin:0 0 10px;
            }
            .empty-cart p{
                color:#777;
                line-height:24px;
            }
            .cart-total{
                margin-top:20px;
                padding-top:20px;
                border-top:1px solid #e5e5e5;
            }
            .cart-total h3{
                display:flex;
                justify-content:space-between;
                align-items:center;
                margin:0 0 20px;
                font-size:20px;
                font-weight:600;
                color:#222;
            }
            .view-cart-btn,.checkout-btn{
                display:block;
                width:100%;
                text-align:center;
                text-decoration:none;
                padding:14px 15px;
                border-radius:8px;
                font-size:16px;
                font-weight:600;
                transition:0.3s;
            }
            .view-cart-btn{
                background:#fff;
                color:#222;
                border:2px solid #222;
                margin-bottom:12px;
            }
            .view-cart-btn:hover{
                background:#222;
                color:#fff;
            }
            .checkout-btn{
                background:#1a8f3c;
                color:#fff;
                border:2px solid #1a8f3c;
            }
            .checkout-btn:hover{
                background:#146b2c;
                border-color:#146b2c;
            }
            .cart{
                display:flex;
                align-items:center;
                justify-content:center;
            }
            .page-content{
                position:relative;
            } 
            .open-cart-btn{
                position:relative;
                background:transparent;
                border:none;
                cursor:pointer;
                padding:0;
                font-size:28px;
                display:inline-flex;
                align-items:center;
                justify-content:center;
            } 
            .cart-count{
                position:absolute;
                top:-8px;
                right:-10px;
                min-width:18px;
                height:18px;
                padding:0 4px;
                background:#ff0000;
                color:#fff;
                border-radius:50%;
                font-size:11px;
                font-weight:700;
                line-height:18px;
                text-align:center;
                border:2px solid #fff;
                display:flex;
                align-items:center;
                justify-content:center;
                z-index:1000;
            }
            .user-menu{
                position:relative;
            }
            .user-btn{
                background:none;
                border:none;
                cursor:pointer;
                font-size:15px;
                font-weight:600;
            }
            .user-dropdown{
                position:absolute;
                top:45px;
                right:0;
                width:180px;
                background:#fff;
                border-radius:8px;
                box-shadow:0 5px 15px rgba(0,0,0,.15);
                display:none;
                overflow:hidden;
                z-index:9999;
            }
            .user-dropdown.show{
                display:block;
            }
            .user-dropdown a{
                display:block;
                padding:12px 15px;
                color:#333;
                text-decoration:none;
            }
            .user-dropdown a:hover{
                background:#f5f5f5;
            }
            .user-menu{
                position:relative;
                display:inline-block;
            }
            .user-btn{
                background:none;
                border:none;
                cursor:pointer;
                font-size:15px;
                font-weight:600;
                color:#333;
                display:flex;
                align-items:center;
                gap:8px;
            }
            .user-btn i{
                font-size:16px;
            }
            .user-dropdown{
                display:none;
                position:absolute;
                top:42px;
                right:0;
                width:200px;
                background:#fff;
                border-radius:8px;
                box-shadow:0 5px 15px rgba(0,0,0,.15);
                overflow:hidden;
                z-index:9999;
            }
            .user-dropdown a{
                display:block;
                padding:12px 15px;
                color:#333;
                text-decoration:none;
                font-size:14px;
            }
            .user-dropdown a i{
                width:20px;
            }
            .user-dropdown a:hover{
                background:#f5f5f5;
            }
            .user-dropdown.show{
                display:block;
            }
            .alert {
                width: 100%;
                padding: 12px 15px;
                margin-bottom: 15px;
                border-radius: 6px;
                font-size: 14px;
                font-weight: 500;
                text-align: center;
                box-sizing: border-box;
            }
            .alert-danger {
                background-color: #f8d7da;
                color: #842029;
                border: 1px solid #f5c2c7;
            }
            @media(max-width:480px){
                .cart-popup{
                    width:100%;
                    right:-100%;
                }
            }
            @media(max-width:768px){
                .floating-contact{
                    right:15px;
                    bottom:15px;
                }
                .main-contact-btn{
                    width:55px;
                    height:55px;
                }
                .contact-btn{
                    width:50px;
                    height:50px;
                }
            }
            @media(max-width:768px){
                .menu{
                    display:none;
                }
                .search-box{
                    display:none;
                }
                .menu-toggle{
                    display:block;
                }
                .auth-links a{
                    font-size:0;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    width:35px;
                    height:35px;
                    border-radius:50%;
                    background:#fff;
                }
                .auth-links a::before{
                    content:'\f007';
                    font-family:"Font Awesome 6 Free";
                    font-weight:900;
                    font-size:16px;
                    color:#000;
                }
            }
            @media(max-width:576px){
                .mobile-menu{
                    width:80%;
                }
            }
            @media(max-width:768px){
                .main-contact-btn{
                    padding:12px 16px;
                    font-size:14px;
                }
                .main-contact-btn i{
                    font-size:16px;
                }
            }
            @media(max-width:1024px){
                .floating-contact{
                    right:15px;
                    bottom:15px;
                }
                .contact-text-box{
                    font-size:13px;
                    padding:8px 12px;
                }
                .main-contact-btn{
                    width:45px;
                    height:45px;
                }
            }
            @media(max-width:768px){
                .floating-contact{
                    gap:0;
                }
                .contact-text-box{
                    display:inline-block;   
                    font-size:12px;
                    padding:6px 10px;
                    border-radius:20px;
                }
                .main-contact-btn{
                    width:50px;
                    height:50px;
                }
            }
            @media(max-width:480px){
                .contact-text-box{
                    font-size:11px;
                    padding:5px 8px;
                }
                .main-contact-btn{
                    width:45px;
                    height:45px;
                }
            }
            @media(max-width:500px){
                .cart-popup{
                    width:65%;
                    right:-100%;
                }
            }
            @media (max-width:768px){
                .open-cart-btn{
                    font-size:24px;
                }
                .cart-count{
                    top:-6px;
                    right:-8px;
                    min-width:16px;
                    height:16px;
                    font-size:10px;
                    line-height:16px;
                }
            }
        </style>
        <style>
            .logo img {
                width: 100%;
                height: 100px;
                object-fit: contain;
                display: block;
                margin-left: -20px;
            }
        </style>
    </head>
    <body>
        <div class="top-navbar">
            <div class="scroll-text">
                <marquee>
                    Nuts • Dry Fruits • Dates • Seeds • Berries • Mixes • Flavoured Nuts • Combos • Premium • Powders • Hampers
                </marquee>
            </div>
            <div class="auth-links">    
                <?php if(session()->get('logged_in')): ?>
                    <div class="user-menu">
                        <button class="user-btn" type="button" onclick="toggleUserMenu()">
                            <?= !empty($full_name) ? esc($full_name) : '' ?>
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="user-dropdown" id="userDropdown">
                            <a href="<?= base_url('my_profile'); ?>"><i class="fa fa-user"></i>My Profile</a>
                            <a href="<?= base_url('logout'); ?>"><i class="fa fa-sign-out"></i>Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="login-wrapper">
                        <a href="#" onclick="toggleLogin(event)">LOGIN / REGISTER</a>
                        <div class="login-dropdown" id="loginBox">
                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="top-links">
                                <span>Sign In</span>
                                <a href="<?= base_url('register'); ?>">Create an Account</a>
                            </div>
                            <hr class="divider">
                            <form action="<?= base_url('login'); ?>" method="post">
                                <input type="email" name="email" placeholder="Username or Email" required>
                                <div class="password-box">
                                    <input type="password" id="password" name="password" placeholder="Password" required>
                                    <i class="fa fa-eye" onclick="togglePassword()"></i>
                                </div>
                                <button type="submit" class="login-btn">LOGIN</button>
                            </form>
                            <div class="bottom-links">
                                <label class="remember">
                                    <input type="checkbox" name="remember">
                                    <span>Remember me</span>
                                </label>
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container nav-container">
                <div class="menu-toggle" onclick="openMenu()">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="logo">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('uploads/1.png'); ?>"></a>
                </div>
                <div class="menu">
                    <a href="<?= base_url('/') ?>">HOME</a>
                    <a href="<?= base_url('about') ?>">ABOUTUS</a>
                    <div class="dropdown-menu-custom">
                        <a href="#" class="main-drop-btn">OUR PRODUCTS</a>
                        <div class="dropdown-content">
                            <div class="sub-dropdown">
                                <a href="#">Nuts<i class="fa fa-angle-right"></i></a>
                                <div class="sub-dropdown-content">
                                    <a href="<?= base_url('shop/Almonds') ?>">Almonds</a>
                                    <a href="<?= base_url('shop/Cashews') ?>">Cashews</a>
                                    <a href="<?= base_url('shop/Pistachios') ?>">Pistachios</a>
                                    <a href="<?= base_url('shop/Walnuts') ?>">Walnuts</a>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <a href="#">Dates<i class="fa fa-angle-right"></i></a>
                                <div class="sub-dropdown-content">
                                    <a href="<?= base_url('shop/Premium Dates') ?>">Premium Dates</a>
                                    <a href="<?= base_url('shop/Dry Dates') ?>">Dry Dates</a>
                                </div>
                            </div>
                            <a href="<?= base_url('shop/Dry Fruits') ?>">Dry Fruits</a>
                            <a href="<?= base_url('shop/Seeds') ?>">Seeds</a>
                            <a href="<?= base_url('shop/Berries') ?>">Berries</a>
                            <a href="<?= base_url('shop/Mixes and Snacking') ?>">Mixes & Snacking</a>
                            <a href="<?= base_url('shop/Flavoured Nuts') ?>">Flavoured Nuts</a>
                            <a href="<?= base_url('shop/Combos and Gift Packs') ?>">Combos & Gift Packs</a> 
                            <a href="<?= base_url('shop/Jumbo and Premium') ?>">Jumbo & Premium</a> 
                            <a href="<?= base_url('shop/Powders') ?>">Powders</a> 
                            <a href="<?= base_url('shop/Bulk/Wholesale') ?>">Bulk / Wholesale</a> 
                            <a href="<?= base_url('shop/Hambers') ?>">Hambers</a>
                        </div>
                    </div>
                    <a href="<?= base_url('shop') ?>">SHOP</a>
                    <a href="<?= base_url('contact') ?>">CONTACT US</a>
                    <a href="#">BLOGS</a>
                    <a href="https://wa.me/919751811222">BUY WHOLESALE</a>
                </div>
                <div class="d-flex align-items-center">
                    <div class="search-box">
                        <input type="text" placeholder="Search">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="cart">
                        <div class="page-content">
                            <button class="open-cart-btn" onclick="openCart()">
                                <i class="fa fa-shopping-cart"></i>
                                <?php if($cartCount > 0): ?>
                                    <span class="cart-count"><?= $cartCount; ?></span>
                                <?php endif; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu" id="mobileMenu">
            <div class="close-btn" onclick="closeMenu()">
                <i class="fa fa-times"></i>
            </div>
            <div class="mobile-links">
                <a href="<?= base_url('/') ?>">HOME</a>
                <a href="<?= base_url('about') ?>">ABOUTUS</a>
                <div class="mobile-dropdown">
                    <a href="#" class="mobile-drop-btn">OUR PRODUCTS<i class="fa fa-angle-down"></i></a>
                    <div class="mobile-dropdown-content">
                        <div class="mobile-sub-dropdown">
                            <a href="#" class="mobile-sub-btn">Nuts<i class="fa fa-angle-down"></i></a>
                            <div class="mobile-sub-content">
                                <a href="<?= base_url('shop/Almonds') ?>">Almonds</a>
                                <a href="<?= base_url('shop/Cashews') ?>">Cashews</a>
                                <a href="<?= base_url('shop/Pistachios') ?>">Pistachios</a>
                                <a href="<?= base_url('shop/Walnuts') ?>">Walnuts</a>
                            </div>
                        </div>
                        <div class="mobile-sub-dropdown">
                            <a href="#" class="mobile-sub-btn">Dates<i class="fa fa-angle-down"></i></a>
                            <div class="mobile-sub-content">
                                <a href="<?= base_url('shop/Premium Dates') ?>">Premium Dates</a>
                                <a href="<?= base_url('shop/Dry Dates') ?>">Dry Dates</a>
                            </div>
                        </div>
                        <a href="<?= base_url('shop/Dry Fruits') ?>">Dry Fruits</a>
                        <a href="<?= base_url('shop/Seeds') ?>">Seeds</a>
                        <a href="<?= base_url('shop/Berries') ?>">Berries</a>
                        <a href="<?= base_url('shop/Mixes and Snacking') ?>">Mixes & Snacking</a>
                        <a href="<?= base_url('shop/Flavoured Nuts') ?>">Flavoured Nuts</a>
                        <a href="<?= base_url('shop/Combos and Gift Packs') ?>">Combos & Gift Packs</a> 
                        <a href="<?= base_url('shop/Jumbo and Premium') ?>">Jumbo & Premium</a> 
                        <a href="<?= base_url('shop/Powders') ?>">Powders</a> 
                        <a href="<?= base_url('shop/Bulk/Wholesale') ?>">Bulk / Wholesale</a> 
                        <a href="<?= base_url('shop/Hambers') ?>">Hambers</a>
                    </div>
                </div>
                <a href="<?= base_url('shop') ?>">SHOP</a>
                <a href="<?= base_url('contact') ?>">CONTACT US</a>
                <a href="#">BLOGS</a>
                <a href="#">BUY WHOLESALE</a>
            </div>
            <div class="mobile-login">
                <a href="#"><i class="fa fa-user"></i>LOGIN / REGISTER</a>
            </div>
        </div>
        <div class="floating-contact">
            <div class="contact-text-box">
                Contact Us
            </div>
            <div class="main-contact-btn" onclick="toggleContact()">
                <i class="fa fa-message"></i>
            </div>
            <div class="contact-items" id="contactItems">
                <a href="tel:+919751811222" class="contact-btn phone-btn"><i class="fa fa-phone"></i></a>
                <a href="https://wa.me/919751811222" target="_blank" class="contact-btn whatsapp-btn"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/crackxcrunch?stkn=aHpydjZlczh0YnNy" target="_blank" class="contact-btn instagram-btn"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div id="cartOverlay" class="cart-overlay"></div>
        <div id="cartPopup" class="cart-popup">
            <div class="cart-header">
                <h3>Shopping Cart</h3>
                <span class="close-btn" onclick="closeCart()">×</span>
            </div>
            <div class="cart-body">
                <?php if(!empty($cart)): ?>
                    <?php $total = 0; ?>
                    <?php foreach($cart as $key => $item): ?>
                        <?php $total += $item['final_price']; ?>
                        <div class="cart-item">
                            <img src="<?= base_url('uploads/products/'.$item['product_image']) ?>" alt="<?= $item['product_title']; ?>">
                            <div class="cart-info">
                                <h4><?= $item['product_title']; ?></h4>
                                <p>Weight : <?= $item['weight']; ?></p>
                                <p>Quantity : <?= $item['quantity']; ?></p>
                                <p><strong>₹<?= $item['final_price']; ?></strong></p>
                                <a href="<?= base_url('cart/delete/'.$key); ?>" onclick="return confirm('Remove this item?')" class="remove-btn">Remove</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="cart-total">
                        <h3>
                            <span>Total</span>
                            <span>₹<?= $total; ?></span>
                        </h3>
                        <a href="<?= base_url('cart'); ?>" class="view-cart-btn">View Cart</a>
                        <a href="<?= base_url('checkout'); ?>" class="checkout-btn">Checkout</a>
                    </div>
                <?php else: ?>
                    <div class="empty-cart">
                        <img src="https://cdn-icons-png.flaticon.com/512/2038/2038854.png" alt="Empty Cart">
                        <h2>Your Cart Is Empty</h2>
                        <p>Add products to your cart and they will appear here.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if (session()->getFlashdata('open_cart')): ?>
            <script>
                window.onload = function () {
                    openCart();
                };
            </script>
        <?php endif; ?>
        <script>
            function toggleLogin(e){
                e.preventDefault();
                let box = document.getElementById("loginBox");
                box.style.display = box.style.display === "block"
                ? "none"
                : "block";
            }
            document.addEventListener("click", function(event){
                let box = document.getElementById("loginBox");
                let wrapper = document.querySelector(".login-wrapper");
                if(!wrapper.contains(event.target)){
                    box.style.display = "none";
                }
            });
            function togglePassword(){
                let pass = document.getElementById("password");
                pass.type = pass.type === "password"
                ? "text"
                : "password";
            }
            function openMenu(){
                document.getElementById("mobileMenu").classList.add("active");
            }
            function closeMenu(){
                document.getElementById("mobileMenu").classList.remove("active");
            }
            document.querySelector(".mobile-drop-btn").addEventListener("click", function(e){
                e.preventDefault();
                document.querySelector(".mobile-dropdown").classList.toggle("active");
            });
            document.querySelectorAll(".mobile-sub-btn")
            .forEach(function(item){
                item.addEventListener("click", function(e){
                    e.preventDefault();
                    this.parentElement.classList.toggle("active");
                });

            });
            function toggleContact(){
                document.getElementById("contactItems").classList.toggle("active");
            }
            function openCart(){
                document.getElementById('cartPopup').classList.add('show');
                document.getElementById('cartOverlay').classList.add('show');
            }
            function closeCart(){
                document.getElementById('cartPopup').classList.remove('show');
                document.getElementById('cartOverlay').classList.remove('show');
            }
            document.getElementById('cartOverlay').addEventListener('click', function(){

                closeCart();
            });
            let cartTimer;
            function openCart() {
                document.getElementById("cartPopup").classList.add("show");
                document.getElementById("cartOverlay").classList.add("show");
                startCartTimer();
            }
            function closeCart() {
                document.getElementById("cartPopup").classList.remove("show");
                document.getElementById("cartOverlay").classList.remove("show");
                clearTimeout(cartTimer);
            }
            function startCartTimer() {
                clearTimeout(cartTimer);
                cartTimer = setTimeout(function () {
                    closeCart();
                }, 3000);
            }
            const cartPopup = document.getElementById("cartPopup");
            cartPopup.addEventListener("mouseenter", function () {
                clearTimeout(cartTimer);
            });
            cartPopup.addEventListener("mouseleave", function () {
                clearTimeout(cartTimer);
                cartTimer = setTimeout(function () {
                    closeCart();
                }, 4000); 
            });
            function toggleUserMenu(){
                var box = document.getElementById("userDropdown");
                if (box) box.classList.toggle("show");
            }
            window.onclick=function(e){
                if(!e.target.matches('.user-btn')){
                    var box=document.getElementById("userDropdown");
                    if(box && box.classList.contains("show")){
                        box.classList.remove("show");
                    }
                }
            }
            window.addEventListener("click", function(e){
                if(!e.target.closest(".user-menu")){
                    var box = document.getElementById("userDropdown");
                    if(box) box.classList.remove("show");
                }
            });
        </script>
    </body>
</html>