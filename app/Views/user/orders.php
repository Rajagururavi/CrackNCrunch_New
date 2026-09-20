<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Orders</title>
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
                font-family:'Poppins',sans-serif;
            }
            body{
                background:#f4f6f9;
                color:#333;
            }
            .profile-section{
                width:100%;
                padding:40px 0;
                margin-top:100px;
            }
            .profile-container{
                width:95%;
                max-width:1400px;
                margin:auto;
                display:flex;
                gap:30px;
            }
            .profile-sidebar{
                width:300px;
                background:#fff;
                border-radius:15px;
                overflow:hidden;
                box-shadow:0 10px 25px rgba(0,0,0,.08);
            }
            .profile-top{
                background:linear-gradient(135deg,#000,#333);
                padding:35px 20px;
                text-align:center;
                color:#fff;
            }
            .profile-avatar{
                width:110px;
                height:110px;
                border-radius:50%;
                background:#fff;
                color:#000;
                margin:auto;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:50px;
                margin-bottom:18px;
                border:4px solid rgba(255,255,255,.2);
            }
            .profile-top h3{
                font-size:24px;
                margin-bottom:8px;
                font-weight:600;
            }
            .profile-top p{
                font-size:14px;
                opacity:.9;
                margin-top:4px;
            }
            .profile-menu{
                padding:20px;
            }
            .profile-menu a{
                display:flex;
                align-items:center;
                gap:12px;
                text-decoration:none;
                color:#444;
                padding:15px 18px;
                margin-bottom:10px;
                border-radius:10px;
                transition:.3s;
                font-size:15px;
                font-weight:500;
            }
            .profile-menu a i{
                width:22px;
                text-align:center;
            }
            .profile-menu a:hover{
                background:#000;
                color:#fff;
                transform:translateX(5px);
            }
            .profile-menu a.active{
                background:#000;
                color:#fff;
                font-weight:600;
            }
            .profile-content{
                flex:1;
            }
            .orders-card{
                background:#fff;
                border-radius:15px;
                padding:30px;
                box-shadow:0 10px 25px rgba(0,0,0,.08);
            }
            .orders-header{
                display:flex;
                justify-content:space-between;
                align-items:center;
                margin-bottom:25px;
            }
            .orders-header h2{
                font-size:30px;
                color:#111;
                font-weight:700;
            }
            .table-responsive{
                width:100%;
                overflow-x:auto;
                border-radius:12px;
            }
            .orders-table{
                width:100%;
                border-collapse:collapse;
                background:#fff;
                border-radius:12px;
                overflow:hidden;
            }
            .orders-table thead{
                background:#111;
            }
            .orders-table thead th{
                color:#fff;
                padding:18px 15px;
                font-size:14px;
                text-transform:uppercase;
                letter-spacing:.5px;
                font-weight:600;
            }
            .orders-table tbody td{
                padding:18px 15px;
                text-align:center;
                vertical-align:middle;
                border-bottom:1px solid #eee;
                font-size:15px;
                color:#444;
            }
            .orders-table tbody tr:nth-child(even){
                background:#fafafa;
            }
            .orders-table tbody tr:hover{
                background:#f5f8ff;
                transition:.3s;
            }
            .orders-table tbody tr:last-child td{
                border-bottom:none;
            }
            .orders-table td img{
                width:70px;
                height:70px;
                object-fit:cover;
                border-radius:10px;
                border:2px solid #eee;
                padding:3px;
                background:#fff;
            }
            .orders-table td:nth-child(2){
                font-weight:600;
                color:#0d6efd;
            }
            .orders-table td:nth-child(7){
                color:#28a745;
                font-weight:700;
                font-size:16px;
            }
            .status{
                display:inline-block;
                min-width:110px;
                padding:8px 18px;
                border-radius:30px;
                color:#fff;
                font-size:13px;
                font-weight:600;
                letter-spacing:.3px;
                text-align:center;
            }
            .processing{
                background:linear-gradient(135deg,#ff9800,#ffb300);
            }
            .shipping{
                background: linear-gradient(135deg,#7b1fa2,#ab47bc);
            }
            .delivered{
                background:linear-gradient(135deg,#28a745,#43d46b);
            }
            .cancelled{
                background:linear-gradient(135deg,#dc3545,#ff5a6b);
            }
            .pending{
                background:linear-gradient(135deg,#2196f3,#42a5f5);
            }
            .empty-order{
                padding:70px 20px;
                text-align:center;
            }
            .empty-order i{
                font-size:75px;
                color:#d5d5d5;
                margin-bottom:20px;
            }
            .empty-order h3{
                font-size:28px;
                color:#222;
                margin-bottom:12px;
            }
            .empty-order p{
                font-size:15px;
                color:#777;
                margin-bottom:25px;
            }
            .empty-order a{
                display:inline-block;
                background:#000;
                color:#fff;
                text-decoration:none;
                padding:14px 35px;
                border-radius:8px;
                transition:.3s;
                font-weight:600;
            }
            .empty-order a:hover{
                background:#333;
                transform:translateY(-2px);
            }
            .table-responsive::-webkit-scrollbar{
                height:8px;
            }
            .table-responsive::-webkit-scrollbar-track{
                background:#ececec;
                border-radius:20px;
            }
            .table-responsive::-webkit-scrollbar-thumb{
                background:#555;
                border-radius:20px;
            }
            .table-responsive::-webkit-scrollbar-thumb:hover{
                background:#222;
            }
            @media(max-width:992px){
                .profile-section{
                    margin-top:80px;
                    padding:30px 0;
                }
                .profile-container{
                    flex-direction:column;
                }
                .profile-sidebar{
                    width:100%;
                }
                .profile-content{
                    width:100%;
                }
                .orders-card{
                    padding:22px;
                }
                .orders-header h2{
                    font-size:26px;
                }
                .orders-table{
                    min-width:1050px;
                }
            }
            @media(max-width:768px){

                .profile-section{
                    margin-top:70px;
                    padding:20px 0;
                }
                .profile-container{
                    width:95%;
                    gap:20px;
                }
                .profile-top{
                    padding:25px 15px;
                }
                .profile-avatar{
                    width:90px;
                    height:90px;
                    font-size:42px;
                }
                .profile-top h3{
                    font-size:20px;
                }
                .profile-top p{
                    font-size:13px;
                }
                .profile-menu{
                    padding:15px;
                }
                .profile-menu a{
                    padding:13px;
                    font-size:14px;
                }
                .orders-card{
                    padding:15px;
                }
                .orders-header h2{
                    font-size:22px;
                }
                .orders-table{
                    min-width:950px;
                }
                .orders-table th, .orders-table td{
                    padding:12px;
                    font-size:14px;
                }
                .orders-table td img{
                    width:60px;
                    height:60px;
                }
                .status{
                    min-width:95px;
                    font-size:12px;
                    padding:7px 14px;
                }
                .empty-order{
                    padding:50px 15px;
                }
                .empty-order i{
                    font-size:55px;
                }
                .empty-order h3{
                    font-size:22px;
                }
                .empty-order p{
                    font-size:14px;
                }
            }
            @media(max-width:480px){
                .profile-section{
                    margin-top:60px;
                }
                .profile-container{
                    width:98%;
                }
                .profile-top{
                    padding:20px 10px;
                }
                .profile-avatar{
                    width:75px;
                    height:75px;
                    font-size:35px;
                }
                .profile-top h3{
                    font-size:18px;
                }
                .profile-top p{
                    font-size:12px;
                }
                .profile-menu a{
                    font-size:13px;
                    padding:12px;
                }
                .orders-card{
                    padding:12px;
                }
                .orders-header h2{
                    font-size:20px;
                }
                .orders-table{
                    min-width:900px;
                }
                .orders-table th, .orders-table td{
                    font-size:13px;
                    padding:10px;
                }
                .orders-table td img{
                    width:50px;
                    height:50px;
                }
                .status{
                    min-width:85px;
                    padding:6px 10px;
                    font-size:11px;
                }
                .empty-order i{
                    font-size:45px;
                }
                .empty-order h3{
                    font-size:18px;
                }
                .empty-order p{
                    font-size:13px;
                }
                .empty-order a{
                    padding:10px 20px;
                    font-size:13px;
                }
            }
        </style>
    </head>
    <body>
        <?= $this->include('templates/header'); ?>
        <div class="profile-section">
            <div class="profile-container">
                <div class="profile-sidebar">
                    <div class="profile-top">
                        <div class="profile-avatar">
                            <i class="fa fa-user"></i>
                        </div>
                        <h3><?= esc($user['full_name']); ?></h3>
                        <p><?= esc($user['email']); ?></p>
                        <p><?= esc($user['mobile']); ?></p>
                    </div>
                    <?php $uri = service('uri'); ?>
                    <div class="profile-menu">
                        <a href="<?= base_url('my_profile'); ?>" class="<?= ($uri->getSegment(1) == 'my_profile') ? 'active' : ''; ?>"><i class="fa fa-user"></i> My Profile</a>
                        <a href="<?= base_url('my_orders'); ?>" class="<?= ($uri->getSegment(1) == 'my_orders') ? 'active' : ''; ?>"><i class="fa fa-shopping-bag"></i> My Orders</a>
                        <a href="<?= base_url('change_password'); ?>" class="<?= ($uri->getSegment(1) == 'change_password') ? 'active' : ''; ?>"><i class="fa fa-lock"></i> Change Password</a>
                        <!-- <a href="<?= base_url('delete_account'); ?>" class="<?= ($uri->getSegment(1) == 'delete_account') ? 'active' : ''; ?>"><i class="fa fa-user"></i> Delete Account</a> -->
                        <a href="<?= base_url('wish_list'); ?>" class="<?= ($uri->getSegment(1) == 'whish_list') ? 'active' : ''; ?>"><i class="fa fa-heart"></i> Wishlist</a>
                        <a href="<?= base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </div>
                <div class="profile-content">
                    <div class="orders-card">
                        <div class="orders-header">
                            <h2>My Orders</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="orders-table">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Weight</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Payment</th>
                                        <th>Order Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($orders)): ?>
                                        <?php $i=1; ?>
                                        <?php foreach($orders as $row): ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><img src="<?= base_url('uploads/products/'.$row['product_image']); ?>" width="70"></td>
                                                <td><?= esc($row['product_name']); ?></td>
                                                <td><?= esc($row['weight']); ?></td>
                                                <td><?= esc($row['quantity']); ?></td>
                                                <td>₹<?= esc($row['subtotal']); ?></td>
                                                <td><?= esc($row['payment_method']); ?></td>
                                                <td>
                                                    <?php if($row['order_status']=="Delivered"): ?>
                                                        <span class="status delivered">
                                                            Delivered
                                                        </span>
                                                    <?php elseif($row['order_status']=="Shipping"): ?>
                                                        <span class="status shipping">
                                                            Shipping
                                                        </span>
                                                    <?php elseif($row['order_status']=="Cancelled"): ?>
                                                        <span class="status cancelled">
                                                            Cancelled
                                                        </span>
                                                    <?php elseif($row['order_status']=="Pending"): ?>
                                                        <span class="status pending">
                                                            Pending
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="status processing">
                                                            Processing
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="10">
                                                <div class="empty-order">
                                                    <i class="fa fa-shopping-bag"></i>
                                                    <h3>No Orders Found</h3>
                                                    <p>You haven't placed any orders yet.</p>
                                                    <a href="<?= base_url('/'); ?>">Continue Shopping</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('templates/footer'); ?>
    </body>
</html>