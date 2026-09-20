<?php
    $cart = session()->get('cart') ?? [];
    $subtotal = 0;
    foreach ($cart as $item) {
        $subtotal += $item['final_price'];
    }
    $shipping = 60;
    $total = $subtotal + $shipping;
    $orderDate = date('d M Y');
    $workingDays = 7;
    $date = new DateTime();
    while ($workingDays > 0) {
        $date->modify('+1 day');
        if ($date->format('N') < 6) {
            $workingDays--;
        }
    }
    $deliveryDate = $date->format('d M Y');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkout</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body {
                background: #f5f5f5;
            }
            .terms-banner{
                width:100%;
                height:200px;
                margin-top:110px;
                position:relative;
                overflow:hidden;
            }
            .terms-banner img{
                width:100%;
                height:100%;
                object-fit:cover;
                display:block;
            }
            .terms-banner::before{
                content:"";
                position:absolute;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:rgba(0,0,0,0.45);
                z-index:1;
            }
            .banner-text{
                position:absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                text-align:center;
                color:#fff;
                z-index:2;
            }
            .banner-text span{
                color:#fff;
                font-weight:600;
                display:inline-block;
                margin:0 5px;
            }
            .checkout-container {
                width: 95%;
                max-width: 1200px;
                margin: 40px auto;
            }
            .checkout-title {
                font-size: 32px;
                font-weight: 700;
                color: #222;
                margin-bottom: 25px;
            }
            .checkout-grid {
                display: grid;
                grid-template-columns: 2fr 1fr;
                gap: 25px;
            }
            .checkout-box {
                background: #fff;
                border-radius: 12px;
                padding: 25px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
                margin-bottom: 20px;
            }
            .checkout-box h3 {
                margin-bottom: 20px;
                color: #222;
                font-size: 22px;
            }
            .input-group {
                margin-bottom: 18px;
            }
            .input-group label {
                display: block;
                margin-bottom: 8px;
                font-weight: 500;
                color: #444;
            }
            .input-group input,.input-group textarea,.input-group select {
                width: 100%;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 12px;
                outline: none;
                font-size: 15px;
            }
            .input-group input:focus,.input-group textarea:focus,.input-group select:focus {
                border-color: #28a745;
            }
            textarea {
                resize: none;
                height: 100px;
            }
            .form-row {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 15px;
            }
            .order-row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 15px;
                font-size: 15px;
            }
            .order-row span:last-child {
                font-weight: 600;
            }
            .summary-line {
                border-top: 1px solid #e5e5e5;
                margin: 15px 0;
            }
            .date-box {
                background: #fafafa;
                border: 1px solid #eee;
                border-radius: 8px;
                padding: 12px;
                margin: 12px 0;
            }
            .total-row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 22px;
                font-weight: 700;
                margin-top: 15px;
                color: #28a745;
            }
            .place-order-btn {
                width: 100%;
                margin-top: 25px;
                padding: 15px;
                border: none;
                background: #28a745;
                color: #fff;
                font-size: 17px;
                border-radius: 8px;
                cursor: pointer;
                transition: .3s;
            }
            .place-order-btn:hover {
                background: #218838;
            }
            .payment-method-box {
                margin-top: 25px;
                padding: 25px;
                background: #fafafa;
                border: 1px solid #e5e5e5;
                border-radius: 10px;
            }
            .payment-method-box h3 {
                font-size: 20px;
                font-weight: 600;
                color: #222;
                margin-bottom: 18px;
            }
            .payment-icons {
                display: block;
                max-width: 260px;
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }
            .payment-desc {
                font-size: 15px;
                color: #555;
                line-height: 1.8;
                margin-bottom: 18px;
            }
            .payment-desc strong {
                color: #0066cc;
            }
            .privacy-text {
                font-size: 14px;
                color: #666;
                line-height: 1.8;
                margin-bottom: 22px;
            }
            .privacy-text a {
                color: #2e7d32;
                text-decoration: none;
                font-weight: 600;
            }
            .privacy-text a:hover {
                text-decoration: underline;
            }
            .terms-box {
                display: flex;
                align-items: flex-start;
                gap: 12px;
                padding: 15px;
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                margin-bottom: 25px;
            }
            .terms-box input[type="checkbox"] {
                width: 18px;
                height: 18px;
                cursor: pointer;
                accent-color: #28a745;
                margin-top: 2px;
            }
            .terms-box label {
                font-size: 14px;
                color: #444;
                line-height: 1.7;
                cursor: pointer;
            }
            .terms-box a {
                color: #2e7d32;
                text-decoration: none;
                font-weight: 600;
            }
            .terms-box a:hover {
                text-decoration: underline;
            }
            .required {
                color: #e53935;
                font-weight: bold;
            }
            .place-order-btn {
                width: 100%;
                padding: 15px;
                border: none;
                border-radius: 8px;
                background: #28a745;
                color: #fff;
                font-size: 17px;
                font-weight: 600;
                cursor: pointer;
                transition: 0.3s;
            }
            .place-order-btn:hover {
                background: #218838;
            }
            @media(max-width:900px) {
                .checkout-grid {
                    grid-template-columns: 1fr;
                }
                .form-row {
                    grid-template-columns: 1fr;
                }
                .checkout-title {
                    font-size: 28px;
                }

            }
            @media(max-width:768px) {
                .payment-method-box {
                    padding: 18px;
                }
                .payment-method-box h3 {
                    font-size: 18px;
                }
                .payment-icons {
                    max-width: 220px;
                }
                .payment-desc,.privacy-text,.terms-box label {
                    font-size: 13px;
                }
                .place-order-btn {
                    font-size: 16px;
                    padding: 14px;
                }
            }
        </style>
    </head>
    <body>
        <?= $this->include('templates/header'); ?>
        <div class="terms-banner">
            <img src="<?= base_url('uploads/Checkout.png'); ?>">
            <div class="banner-text">
                <a href="<?= base_url('cart'); ?>"><span>SHOPPING CART</span></a>
                <span>&raquo; &raquo;</span>
                <a href="<?= base_url('checkout'); ?>"><span>CHECKOUT</span></a>
                <span>&raquo; &raquo;</span>
                <span>ORDER COMPLETE</span>
            </div>
        </div>
        <div class="checkout-container">
            <h2 class="checkout-title">Checkout</h2>
            <form action="<?= base_url('payment'); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="checkout-grid">
                    <div>
                        <div class="checkout-box">
                            <h3>Customer Details</h3>
                            <div class="input-group">
                                <label>Full Name</label>
                                <input type="text" name="fullname" placeholder="Enter Full Name"  value="<?= !empty($user) ? esc($user['full_name']) : '' ?>" <?= !empty($user) ? 'readonly' : '' ?> required>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobile" placeholder="Enter Mobile Number" value="<?= !empty($user) ? esc($user['mobile']) : '' ?>" <?= !empty($user) ? 'readonly' : '' ?> required>
                                </div>
                                <div class="input-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Enter Email Address" value="<?= !empty($user) ? esc($user['email']) : '' ?>" <?= !empty($user) ? 'readonly' : '' ?> required>
                                </div>
                            </div>
                            <div class="input-group">
                                <label>Delivery Address</label>
                                <textarea name="address" placeholder="Enter Full Address" required><?= !empty($user) ? esc($user['address'] ?? '') : '' ?></textarea>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <label>City</label>
                                    <input type="text" name="city" placeholder="Enter City" value="<?= !empty($user) ? esc($user['city'] ?? '') : '' ?>" required>
                                </div>
                                <div class="input-group">
                                    <label>State</label>
                                    <input type="text" name="state" placeholder="Enter State" value="<?= !empty($user) ? esc($user['state'] ?? '') : '' ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <label>Country</label>
                                    <input type="text" name="country" placeholder="India" value="India" required>
                                </div>
                                <div class="input-group">
                                    <label>Pincode</label>
                                    <input type="text" name="pincode" placeholder="Enter Pincode" value="<?= !empty($user) ? esc($user['pincode'] ?? '') : '' ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="checkout-box">
                            <h3>Order Summary</h3>
                            <?php if (!empty($cart)): ?>
                                <?php foreach ($cart as $item): ?>
                                    <div class="order-row">
                                        <span><?= esc($item['product_title']); ?>× <?= $item['quantity']; ?>(<?= esc($item['weight']); ?>)</span>
                                        <span>₹<?= number_format($item['final_price'], 2); ?></span>
                                    </div>
                                <?php endforeach; ?>
                                <div class="summary-line"></div>
                                <div class="order-row">
                                    <span>Subtotal</span>
                                    <span>₹<?= number_format($subtotal, 2); ?></span>
                                </div>
                                <div class="order-row">
                                    <span>Shipping Charge</span>
                                    <span>₹<?= number_format($shipping, 2); ?></span>
                                </div>
                                <div class="summary-line"></div>
                                <div class="date-box">
                                    <strong>Order Date</strong><br>
                                    <?= $orderDate; ?>
                                </div>
                                <div class="date-box">
                                    <strong>Estimated Delivery</strong><br>
                                    <?= $deliveryDate; ?>
                                </div>
                                <div class="summary-line"></div>
                                <div class="total-row">
                                    <span>Total</span>
                                    <span>₹<?= number_format($total, 2); ?></span>
                                </div>
                            <?php else: ?>
                                <p style="text-align:center;padding:30px 0;color:#777;">
                                    Your cart is empty.
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="payment-method-box">
                            <!-- <h3>Credit Card / Debit Card / NetBanking</h3>
                            <img src="https://cdn.razorpay.com/static/assets/logo/rzp_payment_icon.svg" class="payment-icons">
                            <p class="payment-desc">
                                Pay securely by Credit or Debit Card or Internet Banking through<strong>Razorpay</strong>.
                            </p>
                            <p class="privacy-text">
                                Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
                                <a href="<?= base_url('privacy') ?>">Privacy Policy</a>.
                            </p> -->
                            <div class="terms-box">
                                <input type="checkbox" id="terms" name="terms" value="1" required>
                                <label for="terms">
                                    I have read and agree to the website
                                    <a href="<?= base_url('terms') ?>">
                                        Terms &amp; Conditions
                                    </a>
                                    <span class="required">*</span>
                                </label>
                            </div>
                            <button type="submit" class="place-order-btn">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?= $this->include('templates/footer'); ?>
    </body>
</html>