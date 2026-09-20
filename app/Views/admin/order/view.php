<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Details</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, Helvetica, sans-serif;
            }
            body {
                background: #f4f6f9;
                color: #333;
            }
            .order-view-container {
                width: 95%;
                max-width: 1400px;
                margin: 30px auto;
            }
            .page-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 25px;
            }
            .page-header h2 {
                font-size: 30px;
                color: #222;
            }
            .page-header p {
                margin-top: 5px;
                color: #777;
            }
            .back-btn {
                text-decoration: none;
                background: #2563eb;
                color: #fff;
                padding: 12px 22px;
                border-radius: 6px;
                transition: .3s;
            }
            .back-btn:hover {
                background: #1d4ed8;
            }
            .back-btn i {
                margin-right: 8px;
            }
            .order-summary-card {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 20px;
                margin-bottom: 30px;
            }
            .summary-item {
                background: #fff;
                border-radius: 10px;
                padding: 22px;
                box-shadow: 0 3px 12px rgba(0, 0, 0, .08);
                border-left: 5px solid #2563eb;
            }
            .summary-item span {
                display: block;
                color: #777;
                margin-bottom: 8px;
            }
            .summary-item h4 {
                color: #222;
                font-size: 20px;
            }
            .status {
                display: inline-block;
                padding: 8px 15px;
                border-radius: 20px;
                color: #fff;
                font-size: 13px;
                font-weight: bold;
            }
            .success {
                background: #22c55e;
            }
            .summary-item select{
                width:100%;
                padding:10px;
                border:1px solid #ccc;
                border-radius:6px;
                font-size:15px;
                cursor:pointer;
                outline:none;
            }
            .summary-item select:focus{
                border-color:#2563eb;
            }
            .details-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
                margin-bottom: 30px;
            }
            .info-card {
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 3px 12px rgba(0, 0, 0, .08);
                overflow: hidden;
            }
            .card-header {
                background: #2563eb;
                color: #fff;
                padding: 15px 20px;
                font-size: 18px;
                font-weight: bold;
            }.card-header i {
                margin-right: 10px;
            }
            .card-body {
                padding: 20px;
            }
            .card-body p {
                margin-bottom: 12px;
                line-height: 24px;
            }
            .product-card {
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 3px 12px rgba(0, 0, 0, .08);
                overflow: hidden;
                margin-bottom: 30px;
            }
            .table-responsive {
                overflow-x: auto;
            }
            .product-table {
                width: 100%;
                border-collapse: collapse;
            }
            .product-table thead {
                background: #f8fafc;
            }
            .product-table th {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .product-table td {
                padding: 15px;
                border-bottom: 1px solid #eee;
            }
            .product-table tr:hover {
                background: #fafafa;
            }
            .product-img {
                width: 70px;
                height: 70px;
                object-fit: cover;
                border-radius: 8px;
                border: 1px solid #ddd;
            }
            .action-buttons {
                display: flex;
                justify-content: flex-end;
                gap: 15px;
                margin-top: 30px;
            }
            .btn-back, .btn-print, .btn-download {
                text-decoration: none;
                padding: 12px 22px;
                border-radius: 6px;
                color: #fff;
                font-weight: 600;
                transition: .3s;
            }
            .btn-back {
                background: #6c757d;
            }
            .btn-back:hover {
                background: #5a6268;
            }
            .btn-print {
                background: #0d6efd;
            }
            .btn-print:hover {
                background: #0b5ed7;
            }
            .btn-download {
                background: #198754;
            }
            .btn-download:hover {
                background: #157347;
            }
            @media (max-width:1200px) {
                .order-summary-card {
                    grid-template-columns: repeat(3, 1fr);
                }
            }
            @media (max-width:992px) {
                .details-grid {
                    grid-template-columns: 1fr;
                }
                .order-summary-card {
                    grid-template-columns: repeat(2, 1fr);
                }
                .page-header {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 15px;
                }
                .action-buttons {
                    flex-wrap: wrap;
                }
            }
            @media (max-width:768px) {
                .order-view-container {
                    width: 98%;
                    margin: 15px auto;
                }
                .page-header h2 {
                    font-size: 24px;
                }
                .page-header p {
                    font-size: 14px;
                }
                .order-summary-card {
                    grid-template-columns: 1fr;
                    gap: 15px;
                }
                .summary-item {
                    padding: 18px;
                }
                .summary-item h4 {
                    font-size: 18px;
                }
                .details-grid {
                    gap: 15px;
                }
                .card-header {
                    font-size: 16px;
                    padding: 14px;
                }
                .card-body {
                    padding: 15px;
                }
                .product-table {
                    min-width: 700px;
                }
                .product-img {
                    width: 55px;
                    height: 55px;
                }
                .price-summary {
                    flex-direction: column;
                }
                .summary-left, .summary-right {
                    width: 100%;
                }
                .payment-grid {
                    grid-template-columns: 1fr;
                }
                .timeline {
                    margin-left: 10px;
                }
                .timeline-item {
                    padding-left: 35px;
                }
                .timeline-item .circle {
                    width: 14px;
                    height: 14px;
                    left: -8px;
                }
                .action-buttons {
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                }
                .btn-back, .btn-print, .btn-download {
                    width: 100%;
                    text-align: center;
                }
            }
            @media (max-width:576px) {
                .order-view-container {
                    width: 100%;
                    padding: 10px;
                }
                .page-header {
                    margin-bottom: 15px;
                }
                .page-header h2 {
                    font-size: 20px;
                }
                .back-btn {
                    width: 100%;
                    text-align: center;
                }
                .summary-item {
                    padding: 15px;
                }
                .summary-item h4 {
                    font-size: 16px;
                }
                .card-header {
                    font-size: 15px;
                }
                .card-body p {
                    font-size: 14px;
                    word-break: break-word;
                }
                .price-table td {
                    font-size: 14px;
                    padding: 8px;
                }
                textarea {
                    font-size: 14px;
                }
            }
            @page {
                margin: 10mm;
            }
        </style>
    </head>
    <body>
        <div class="order-view-container">
            <div class="page-header">
                <div>
                    <h2>Order Details</h2>
                    <p>View customer order information</p>
                </div>
                <div>
                    <a href="<?= base_url('order/order_list'); ?>" class="back-btn"><i class="fa fa-arrow-left"></i> Back to Orders</a>
                </div>
            </div>
            <div class="order-summary-card">
                <div class="summary-item">
                    <span>Order ID</span>
                    <h4>#<?= esc($order['order_number']); ?></h4>
                </div>
                <div class="summary-item">
                    <span>Order Date and Time</span>
                    <h4><?= esc($order['created_at']); ?></h4>
                </div>
                <div class="summary-item">
                    <span>Payment Method</span>
                    <h4><?= esc($order['payment_method']); ?></h4>
                </div>
                <div class="summary-item">
                    <span>Payment Status</span>
                    <span class="status success">Paid</span>
                </div>
                <div class="summary-item">
                    <span>Order Status</span>
                    <form action="<?= base_url('admin/order/updateStatus'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="order_id" value="<?= $order['id']; ?>">
                        <input type="hidden" name="order_number" value="<?= $order['order_number']; ?>">
                        <select name="order_status" onchange="this.form.submit()">
                            <option value="Pending" <?= ($order['order_status']=='Pending') ? 'selected' : ''; ?>>Pending</option>
                            <option value="Processing" <?= ($order['order_status']=='Processing') ? 'selected' : ''; ?>>Processing</option>
                            <option value="Shipping" <?= ($order['order_status']=='Shipping') ? 'selected' : ''; ?>>Shipping</option>
                            <option value="Delivered" <?= ($order['order_status']=='Delivered') ? 'selected' : ''; ?>>Delivered</option>
                            <option value="Cancelled" <?= ($order['order_status']=='Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="details-grid">
                <div class="info-card">
                    <div class="card-header">
                        <i class="fa fa-user"></i>Customer Details
                    </div>
                    <div class="card-body">
                        <p><strong>Name :</strong> <?= esc($user['full_name']); ?></p>
                        <p><strong>Mobile :</strong> <?= esc($user['mobile']); ?></p>
                        <p><strong>Email :</strong> <?= esc($user['email']); ?></p>
                        <!-- <p><strong>Customer Notes:</strong> Hii</p> -->
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-header">
                        <i class="fa fa-location-dot"></i>Shipping Address
                    </div>
                    <div class="card-body">
                        <p><strong>address:</strong> <?= esc($user['address']); ?></p>
                        <p><strong>City:</strong> <?= esc($user['city']); ?></p>
                        <p><strong>State:</strong> <?= esc($user['state']); ?></p>
                        <p><strong>Pincode:</strong> <?= esc($user['pincode']); ?></p>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="card-header">
                    <i class="fa fa-box"></i>Ordered Products
                </div>
                <div class="table-responsive">
                    <table class="product-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Weight</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><?= esc($order['product_name']); ?></strong></td>
                                <td><strong><?= esc($order['quantity']); ?></strong></td>
                                <td><strong><?= esc($order['weight']); ?></strong></td>
                                <td><strong><?= esc($order['subtotal']); ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><br>
            <div class="info-card mt-4">
                <div class="card-header">
                    <i class="fa fa-credit-card"></i>Payment Information
                </div>
                <div class="card-body">
                    <div class="payment-grid">
                        <div>
                            <strong>Payment Method</strong>
                            <p><?= $order['payment_method'] ?? 'Google Pay'; ?></p>
                        </div>
                        <div>
                            <strong>Transaction ID</strong>
                            <p><?= $order['transaction_id'] ?? 'TXN000000'; ?></p>
                        </div>
                        <div>
                            <strong>Payment Status</strong>
                            <span class="status success">Success</span>
                        </div>
                        <div>
                            <strong>Payment Date</strong>
                            <p><?= date('d-m-Y', strtotime($order['payment_date'] ?? 'now')); ?></p>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="info-card mt-4">
                <div class="card-header">
                    <i class="fa fa-comment"></i>Customer Notes
                </div>
                <div class="card-body">
                    <p><?= $order['customer_note'] ?? 'No customer notes available.'; ?></p>
                </div>
            </div><br>
            <div class="action-buttons">
                <a href="<?= base_url('order/order_list'); ?>" class="btn-back"><i class="fa fa-arrow-left"></i>Back</a>
                <a href="<?= base_url('admin/order/invoice/'.$order['order_number']); ?>" class="btn-print" onclick="window.open(this.href,'printWindow','width=900,height=700'); return false;"><i class="fa fa-print"></i> Print Invoice</a>
            </div>
        </div>
    </body>
</html>