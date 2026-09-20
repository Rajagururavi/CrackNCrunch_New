<!DOCTYPE html>
<html>
    <head>
        <title>Orders</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <style>
            .table-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 30px auto 20px;
                width: 95%;
            }
            .table-header h2 {
                font-size: 28px;
                color: #222;
            }
            .search-area {
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .search-icon {
                width: 42px;
                height: 42px;
                background: #0d6efd;
                color: #fff;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                transition: .3s; 
            }
            .search-icon:hover {
                background:#0b5ed7;
            }
            #searchForm input {
                width: 0;
                opacity: 0;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 6px;
                transition: .4s;
                outline: none;
            }
            #searchForm.active input {
                width: 260px;
                opacity: 1;
            }
            .table-wrapper {
                width: 95%;
                margin: 0 auto;
                background: #fff;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 2px 12px rgba(0, 0, 0, .08);
            }
            .order-table {
                width: 100%;
                border-collapse: collapse;
            }
            .order-table thead {
                background: #f8f9fa;
            }
            .order-table th {
                padding: 18px;
                text-align: left;
                color: #444;
                font-size: 14px;
                border-bottom: 2px solid #eee;
            }
            .order-table td {
                padding: 18px;
                border-bottom: 1px solid #eee;
                font-size: 14px;
            }
            .order-table tbody tr {
                transition: .3s;
            }
            .order-table tbody tr:hover {
                background: #f8fbff;
            }
            .status {
                padding: 6px 14px;
                border-radius: 20px;
                color: #fff;
                font-size: 12px;
                font-weight: bold;
            }
            .pending {
                background: #ffc107;
                color: #222;
            }
            .packed {
                background: #17a2b8;
            }
            .shipped {
                background: #0d6efd;
            }
            .delivered {
                background: #198754;
            }
            .cancelled {
                background: #dc3545;
            }
            .view-btn {
                width: 36px;
                height: 36px;
                display: flex;
                justify-content: center;
                align-items: center;
                background: #0d6efd;
                color: #fff;
                border-radius: 8px;
                text-decoration: none;
                transition: .3s;
            }
            .view-btn:hover {
                background: #0b5ed7;
                transform: scale(1.08);
            }
            .no-data {
                text-align: center;
                padding: 40px;
            }
            .pagination-area {
                width: 95%;
                margin: 20px auto;
                display: flex;
                justify-content: flex-end;
            } 
        </style>
    </head>
    <body>
        <?= view('admin/templates/header') ?>
        <div class="table-header">
            <h2>All Orders</h2>
            <!-- Search code write here -->
        </div>
        <div class="table-wrapper">
            <table class="order-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Mobile</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($orders)): ?>
                        <?php $i = 1; ?>
                        <?php foreach ($orders as $row): ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><strong>#<?= esc($row['order_number']); ?></strong></td>
                                <td><?= esc($row['full_name']); ?></td>
                                <td><?= esc($row['mobile']); ?></td>
                                <td>₹<?= number_format($row['subtotal'], 2); ?></td>
                                <td><?= esc($row['payment_method']); ?></td>
                                <td><?= esc($row['order_status']); ?></td>
                                <td><?= date('d M Y', strtotime($row['created_at'])); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/order/view/' . $row['order_number']); ?>" class="view-btn"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="no-data">No Orders Found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="pagination-area"></div>
        <script>
            const btn = document.getElementById("searchBtn");
            const form = document.getElementById("searchForm");
            const input = form.querySelector("input");
            btn.onclick = function () {
                form.classList.toggle("active");
                if (form.classList.contains("active")) {
                    input.focus();
                }
            };
            input.addEventListener("keypress", function(e) {
                if (e.key === "Enter") {
                    form.submit();
                }
            });
        </script>
    </body>
</html>