<?php
    $orderNumber = "ORD" . date("YmdHis");
    $whatsappNumber = "919751811222";
    $message = "Hello, I want to place an order.
    Order Number: " . $orderNumber . "
    Date: " . date('F d, Y') . "
    Total Amount: ₹" . number_format($total, 2) . "
    Payment Method: WhatsApp
    Please confirm my order.";
    $whatsappUrl = "https://wa.me/" . $whatsappNumber . "?text=" . urlencode($message);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment</title>
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
            .terms-banner {
                width: 100%;
                height: 200px;
                margin-top: 110px;
                position: relative;
                overflow: hidden;
            }
            .terms-banner img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .terms-banner::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, .45);
            }
            .banner-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff;
                z-index: 2;
                text-align: center;
            }
            .banner-text span {
                color: #fff;
                margin: 0 5px;
                font-weight: 600;
            }
            .payment-container {
                width: 95%;
                max-width: 900px;
                margin: 40px auto;
            }
            .payment-box {
                background: #fff;
                padding: 35px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
            }
            .payment-box h2 {
                text-align: center;
                margin-bottom: 25px;
                color: #222;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 25px;
            }
            table tr {
                border-bottom: 1px solid #eee;
            }
            table td {
                padding: 15px;
                font-size: 16px;
            }
            table td:first-child {
                font-weight: 600;
                width: 40%;
            }
            .payment-message {
                background: #f8f9fa;
                border-left: 4px solid #25D366;
                padding: 20px;
                line-height: 28px;
                margin-bottom: 30px;
                color: #444;
            }
            .btn-group {
                display: flex;
                justify-content: center;
                gap: 15px;
                flex-wrap: wrap;
            }
            .pay-btn {
                background: #25D366;
                color: #fff;
                padding: 14px 35px;
                border-radius: 6px;
                text-decoration: none;
                font-weight: 600;
                border: none;
                cursor: pointer;
            }
            .pay-btn:hover {
                background: #1ebe5d;
            }
            .cancel-btn {
                background: #dc3545;
                color: #fff;
                padding: 14px 35px;
                border-radius: 6px;
                text-decoration: none;
                font-weight: 600;
            }
            .cancel-btn:hover {
                background: #bb2d3b;
            }
            @media(max-width:768px) {
                .payment-box {
                    padding: 20px;
                }
                .btn-group {
                    flex-direction: column;
                }
                .pay-btn, .cancel-btn {
                    text-align: center;
                }
            }
        </style>
    </head>
    <body>
        <?= $this->include('templates/header'); ?>
        <div class="terms-banner">
            <img src="<?= base_url('uploads/Payment.png'); ?>">
            <div class="banner-text">
                <a href="<?= base_url('cart'); ?>"><span>SHOPPING CART</span></a>
                <span>&raquo; &raquo;</span>
                <a href="<?= base_url('checkout'); ?>"><span>CHECKOUT</span></a>
                <span>&raquo; &raquo;</span>
                <span>PAYMENT</span>
            </div>
        </div>
        <div class="payment-container">
            <div class="payment-box">
                <h2>Complete Your Order</h2>
                <table>
                    <tr>
                        <td>Order Number</td>
                        <td><?= $orderNumber; ?></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><?= date('F d, Y'); ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><strong>₹<?= number_format($total, 2); ?></strong></td>
                    </tr>
                    <tr>
                        <td>Order Method</td>
                        <td>WhatsApp</td>
                    </tr>
                </table>
                <div class="payment-message">
                    Thank you for placing your order.
                    <br><br>
                    Click the <strong>WhatsApp</strong> button below
                    to send your order details to us.
                </div>
                <div class="btn-group">
                    <button type="button" class="pay-btn" onclick="placeWhatsAppOrder()">Place the order in WhatsApp</button>
                    <a href="<?= base_url('checkout'); ?>" class="cancel-btn">Cancel</a>
                </div>
            </div>
        </div>
        <?= $this->include('templates/footer'); ?>
        <script>
            function placeWhatsAppOrder() {
                const whatsappUrl = <?= json_encode($whatsappUrl); ?>;
                window.open(whatsappUrl, '_blank');
                fetch("<?= base_url('whatsapp_order'); ?>", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "<?= csrf_token(); ?>=<?= csrf_hash(); ?>"
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        window.location.href = "<?= base_url('payment_success'); ?>";
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert("Something went wrong. Please try again.");
                });
            }
        </script>
    </body>
</html>