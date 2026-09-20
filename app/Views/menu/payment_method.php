<?php
    $upiId = 'sibinpushkaran-2@okhdfcbank';
    $upiName = 'CRACK N CRUNCH';
    $amount = (float) $amount;
    $upiUrl = 'upi://pay?' . http_build_query([
        'pa' => $upiId,
        'pn' => $upiName,
        'am' => number_format($amount, 2, '.', ''),
        'cu' => 'INR'
    ]);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Method</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background: #f4f6f9;
            }
            .payment-container {
                width: 400px;
                max-width: 90%;
                margin: 80px auto;
                background: #fff;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
                text-align: center;
            }
            .payment-container h2 {
                margin-bottom: 10px;
            }
            .amount {
                font-size: 24px;
                font-weight: bold;
                margin: 15px 0;
            }
            .qr-box {
                margin: 20px auto;
                padding: 15px;
                width: 260px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background: #fff;
            }
            .qr-box img {
                width: 250px;
                height: 250px;
                display: block;
            }
            .upi-name {
                font-size: 18px;
                font-weight: bold;
                margin-top: 15px;
            }
            .upi-id {
                color: #666;
                margin-top: 5px;
                font-size: 14px;
            }
            .instruction {
                margin-top: 20px;
                color: #555;
                line-height: 1.6;
            }
            .pay-button {
                display: inline-block;
                margin-top: 20px;
                padding: 12px 25px;
                background: #198754;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                font-size: 16px;
            }
            .success-button {
                margin-top: 15px;
                padding: 12px 25px;
                background: #0d6efd;
                color: white;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                font-size: 16px;
                width: 100%;
            }
            .popup-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.65);
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }
            .popup-box {
                width: 450px;
                max-width: 90%;
                background: #fff;
                padding: 30px;
                border-radius: 12px;
                position: relative;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            }
            .popup-box h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            .close-button {
                position: absolute;
                right: 15px;
                top: 10px;
                border: none;
                background: none;
                font-size: 28px;
                cursor: pointer;
                color: #555;
            }
            .popup-box label {
                display: block;
                font-weight: 600;
                margin-bottom: 8px;
            }
            .transaction-input {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 6px;
                font-size: 15px;
                box-sizing: border-box;
            }
            .transaction-input:focus {
                outline: none;
                border-color: #0d6efd;
            }
            .transaction-help {
                margin-top: 15px;
                padding: 15px;
                background: #f8f9fa;
                border-left: 4px solid #0d6efd;
                color: #444;
                line-height: 1.6;
                font-size: 14px;
                text-align: left;
            }
            .transaction-help strong {
                color: #222;
            }
            .failed-warning {
                margin-top: 15px;
                padding: 12px;
                background: #fff3cd;
                border-left: 4px solid #ffc107;
                color: #664d03;
                font-size: 14px;
                line-height: 1.5;
                text-align: left;
            }
            .save-button {
                width: 100%;
                margin-top: 20px;
                padding: 13px;
                border: none;
                border-radius: 7px;
                background: #198754;
                color: white;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
            }
            .save-button:hover {
                background: #157347;
            }
            .cancel-button {
                width: 100%;
                margin-top: 10px;
                padding: 13px;
                border: none;
                border-radius: 7px;
                background: #6c757d;
                color: white;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
            }
            .cancel-button:hover {
                background: #5c636a;
            }
        </style>
    </head>
    <body>
        <div class="payment-container">
            <h2>UPI Payment</h2>
            <div class="amount">
                ₹<?= number_format($amount, 2); ?>
            </div>
            <div class="qr-box">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=<?= urlencode($upiUrl); ?>" alt="UPI QR Code">
            </div>
            <div class="upi-name">
                <?= esc($upiName); ?>
            </div>
            <div class="upi-id">
                <?= esc($upiId); ?>
            </div>
            <div class="instruction">
                Scan this QR code using<br>
                <strong>Google Pay / PhonePe / Paytm / BHIM</strong>
            </div>
            <a href="<?= esc($upiUrl); ?>" class="pay-button">Pay with UPI App</a>
            <button type="button" class="success-button" onclick="openPaymentPopup()">Once your payment is Completed Please Click here</button>
        </div>
        <form action="<?= base_url('payment_process'); ?>" method="post" onsubmit="return savePayment();">
            <?= csrf_field(); ?>
            <input type="hidden" name="payment_method" value="QR Code">
            <input type="hidden" name="payment_status" value="Success">
            <input type="hidden" name="qr_completed" value="1">
            <div id="paymentPopup" class="popup-overlay">
                <div class="popup-box">
                    <button type="button" class="close-button" onclick="closePaymentPopup()">&times;</button>
                    <h2>Payment Confirmation</h2>
                    <p style="text-align:center;">Payment Amount:<strong>₹<?= number_format($amount, 2); ?></strong></p>
                    <label for="transactionId">UPI Transaction ID</label>
                    <input type="text" id="transactionId" name="upi_transaction_id" class="transaction-input" placeholder="Enter UPI Transaction ID" maxlength="100" required>
                    <div class="transaction-help">
                        <strong>Where can I find my UPI Transaction ID?</strong><br><br>
                        1. Open your<strong> Google Pay / PhonePe / Paytm / BHIM</strong> app.<br>
                        2. Go to your<strong> Transaction History</strong>.<br>
                        3. Open the payment made to<strong> SIBIN</strong>.<br>
                        4. Find the<strong> UPI Transaction ID</strong>.<br>
                        5. Enter the transaction ID above.<br><br><strong> UPI ID:</strong>
                        <?= esc($upiId); ?>
                    </div>
                    <div class="failed-warning">
                        <strong>Important:</strong>Please make sure the payment of
                        <strong>₹<?= number_format($amount, 2); ?></strong> is successful.<br><br>
                        If the UPI payment is failed,<strong>the order will be cancelled.</strong>
                    </div>
                    <button type="submit" class="save-button">Save</button>
                    <button type="button" class="cancel-button" onclick="closePaymentPopup()">your payment is incomplete click here</button>
                </div>
            </div>
        </form>
        <script>
            function openPaymentPopup() {
                document.getElementById('paymentPopup').style.display = 'flex';
            }
            function closePaymentPopup() {
                document.getElementById('paymentPopup').style.display = 'none';
            }
            function savePayment() {
                const transactionId = document.getElementById('transactionId').value.trim();
                if (transactionId === '') {
                    alert('Please enter your UPI Transaction ID.');
                    return false;
                }
                return true;
            }
            function closePaymentPopup()
            {
                document.getElementById('paymentPopup').style.display = 'none';
            }
        </script>
    </body>
</html>