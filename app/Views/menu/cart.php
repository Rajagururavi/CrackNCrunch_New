<?= $this->include('templates/header') ?>
<style>
    body{
        margin:0;
        padding:0;
        overflow-x:hidden;
        font-family:Arial, sans-serif;
        background:#f4f6f8;
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
    .cart-container{
        width:92%;
        max-width:1200px;
        margin:40px auto 20px;
    }
    .cart-header h2{
        font-size:26px;
        margin-bottom:20px;
    }
    .cart-item{
        background:#fff;
        display:flex;
        align-items:center;
        gap:18px;
        padding:18px;
        margin-bottom:15px;
        border-radius:14px;
        box-shadow:0 6px 18px rgba(0,0,0,0.06);
        transition:0.25s ease;
    }
    .cart-item:hover{
        transform:translateY(-2px);
        box-shadow:0 10px 25px rgba(0,0,0,0.12);
    }
    .cart-item img{
        width:100px;
        height:100px;
        object-fit:cover;
        border-radius:10px;
        border:1px solid #eee;
    }
    .cart-info{
        flex:1;
    }
    .cart-info h4{
        margin:0;
        font-size:17px;
        color:#222;
        font-weight:600;
    }
    .cart-info .price{
        color:#1a8f3c;
        font-weight:700;
        font-size:16px;
        margin-top:6px;
    }
    .cart-info span{
        display:inline-block;
        margin-top:6px;
        font-size:18px;
        color:#999;
    }
    .remove-btn{
        display:inline-block;
        margin-top:10px;
        padding:6px 12px;
        background:#ff3b30;
        color:#fff;
        text-decoration:none;
        border-radius:8px;
        font-size:12px;
        transition:0.2s;
    }
    .remove-btn:hover{
        background:#d70015;
    }
    .empty{
        text-align:center;
        background:#fff;
        padding:60px 30px;
        border-radius:14px;
        box-shadow:0 6px 18px rgba(0,0,0,0.06);
    }
    .empty h2{
        margin-bottom:15px;
        font-size:28px;
        color:#222;
    }
    .empty p{
        max-width:600px;
        margin:0 auto 30px;
        color:#666;
        font-size:16px;
        line-height:28px;
    }
    .return-shop-btn{
        display:inline-block;
        padding:14px 35px;
        background:#1a8f3c;
        color:#fff;
        text-decoration:none;
        border-radius:8px;
        font-size:16px;
        font-weight:600;
        transition:.3s;
    }
    .return-shop-btn:hover{
        background:#146b2c;
    }
    .cart-summary{
        width:92%;
        max-width:1200px;
        margin:20px auto 60px;
        background:#fff;
        padding:20px;
        border-radius:14px;
        box-shadow:0 6px 18px rgba(0,0,0,0.06);
    }
    .coupon-box{
        margin-bottom:20px;
    }
    .coupon-box h4{
        margin-bottom:10px;
    }
    .coupon-box form{
        display:flex;
        gap:10px;
    }
    .coupon-box input{
        flex:1;
        padding:10px;
        border:1px solid #ddd;
        border-radius:8px;
    }
    .coupon-box button{
        padding:10px 15px;
        background:#111;
        color:#fff;
        border:none;
        border-radius:8px;
        cursor:pointer;
    }
    .summary-box h3{
        margin-bottom:15px;
    }
    .line{
        display:flex;
        justify-content:space-between;
        margin-bottom:10px;
        font-size:15px;
    }
    .line.total{
        font-size:18px;
        font-weight:bold;
        color:#1a8f3c;
    }
    .summary-box hr{
        border:none;
        border-top:1px solid #eee;
        margin:10px 0;
    }
    .checkout-btn{
        display:block;
        text-align:center;
        margin-top:15px;
        padding:12px;
        background:#1a8f3c;
        color:#fff;
        border-radius:10px;
        text-decoration:none;
        font-weight:bold;
        transition:0.2s;
    }
    .checkout-btn:hover{
        background:#146b2c;
    }
    @media(max-width:991px){
        .terms-banner{
            height:260px;
            margin-top:90px;
        }
        .banner-text span{
            font-size:14px;
        }
        .cart-item{
            gap:15px;
        }
        .cart-item img{
            width:90px;
            height:90px;
        }
        .coupon-box form{
            flex-direction:column;
        }
        .coupon-box button{
            width:100%;
        }
    }
    @media(max-width:768px){
        .terms-banner{
            height:220px;
            margin-top:80px;
        }
        .banner-text span{
            display:block;
            margin:5px 0;
            font-size:13px;
        }
        .cart-item{
            flex-direction:column;
            text-align:center;
            padding:20px;
        }
        .cart-item img{
            width:160px;
            height:160px;
        }
        .remove-btn{
            width:100%;
            text-align:center;
            padding:10px;
        }
        .coupon-box form{
            flex-direction:column;
        }
        .coupon-box input, .coupon-box button{
            width:100%;
        }
        .line{
            font-size:14px;
        }
        .line.total{
            font-size:16px;
        }
        .checkout-btn, .return-shop-btn{
            width:100%;
        }
    }
    @media(max-width:480px){
        .terms-banner{
            height:180px;
        }
        .cart-header h2{
            font-size:20px;
        }
        .cart-item img{
            width:140px;
            height:140px;
        }
        .empty h2{
            font-size:22px;
        }
        .empty p{
            font-size:14px;
        }
        .line{
            font-size:13px;
        }
        .line.total{
            font-size:15px;
        }
    }
</style>
<div class="terms-banner">
    <img src="<?= base_url('uploads/cart.png'); ?>">
    <div class="banner-text">
        <a href="<?= base_url('cart'); ?>"><span>SHOPPING CART</span></a>
        <span>&raquo; &raquo;</span>
        <a href="<?= base_url('checkout'); ?>"><span>CHECKOUT</span></a>
        <span>&raquo; &raquo;</span>
        <a href="<?= base_url('order-complete'); ?>" class="active"><span>ORDER COMPLETE</span></a>
    </div>
</div>
<div class="cart-container">
    <div class="cart-header">
        <h2>My Shopping Cart</h2>
    </div>
    <?php if (!empty($cart)): ?>
        <?php foreach ($cart as $key => $item): ?>
            <div class="cart-item">
                <img src="<?= base_url('uploads/products/' . ($item['product_image'] ?? 'default.jpg')); ?>">
                <div class="cart-info">
                    <h4><?= $item['product_title'] ?? 'No Title'; ?></h4>
                    <div>Quantity: <?= $item['quantity'] ?? 0; ?></div>
                    <div class="price">₹<?= $item['final_price'] ?? 0; ?></div>
                    <span>&#8250; &#8250;</span>
                    <a href="<?= base_url('cart/delete/'.$key) ?>" onclick="return confirm('Remove item?')" class="remove-btn">Remove</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="empty">
            <h2>Your Cart is Currently Empty</h2>
            <p>
                Before proceeding to checkout, you must add some products to your shopping cart.
                You will find a lot of interesting products on our <strong>Shop</strong> page.
            </p>
            <a href="<?= base_url('shop') ?>" class="return-shop-btn">
                Return to Shop
            </a>
        </div>
    <?php endif; ?>
</div>
<?php if (!empty($cart)): ?>
    <div class="cart-summary">
        <div class="coupon-box">
            <h4>Apply Coupon</h4>
            <form method="post" action="<?= base_url('apply-coupon') ?>">
                <input type="text" name="coupon_code" placeholder="Enter coupon code" disabled>
                <button type="submit">Apply</button>
            </form>
        </div>
        <div class="summary-box">
            <h3>Cart Totals</h3>
            <div class="line">
                <span>Subtotal</span>
                <span>₹<?= $subtotal; ?></span>
            </div>
            <div class="line">
                <span>Shipping</span>
                <span>Flat rate: <strong>₹<?= $shipping; ?></strong></span>
            </div>
            <hr>
            <div class="line total">
                <span>Total</span>
                <span>₹<?= $total; ?></span>
            </div>
            <a href="<?= base_url('checkout') ?>" class="checkout-btn">Proceed to Checkout</a>
        </div>
    </div>
<?php endif; ?>
<?= $this->include('templates/footer') ?>