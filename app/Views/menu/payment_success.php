
<?php

    // Get order details from session
    $orderNumber = session()->get('order_number');
    $total       = session()->get('order_total');

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Order Successful</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
          rel="stylesheet">

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

        .success-box {

            width: 90%;
            max-width: 600px;

            margin: 150px auto;

            background: #fff;

            padding: 40px;

            border-radius: 10px;

            box-shadow:
                0 5px 15px rgba(0, 0, 0, .1);

            text-align: center;
        }

        .success-icon {

            font-size: 70px;

            color: #28a745;

        }

        h2 {

            margin: 20px 0;

            color: #28a745;

        }

        p {

            color: #555;

            line-height: 28px;

        }

        .order-details {

            margin-top: 25px;

            padding: 20px;

            background: #f8f9fa;

            border-radius: 8px;

            text-align: left;

        }

        .order-details p {

            margin-bottom: 8px;

        }

        .btn {

            display: inline-block;

            margin-top: 30px;

            background: #28a745;

            color: #fff;

            text-decoration: none;

            padding: 14px 35px;

            border-radius: 6px;

        }

        .btn:hover {

            background: #218838;

        }

    </style>

</head>

<body>

    <?= $this->include('templates/header'); ?>


    <div class="success-box">

        <div class="success-icon">
            ✔
        </div>

        <h2>
            Order Placed Successfully
        </h2>

        <p>

            Thank you for your order.

            <br>

            Your order details have been sent through WhatsApp.

        </p>


        <?php if ($orderNumber && $total): ?>

            <div class="order-details">

                <p>
                    <strong>Order Number:</strong>
                    <?= esc($orderNumber); ?>
                </p>

                <p>
                    <strong>Total Amount:</strong>
                    ₹<?= number_format($total, 2); ?>
                </p>

            </div>

        <?php endif; ?>


        <a href="<?= base_url('/'); ?>"
           class="btn">

            Continue Shopping

        </a>

    </div>


    <?= $this->include('templates/footer'); ?>

</body>

</html>