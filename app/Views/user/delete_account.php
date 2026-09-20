<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Account</title>
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
            .profile-card {
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
                padding: 35px;
            }
            .profile-card h2 {
                margin-bottom: 25px;
                font-size: 28px;
                color: #222;
            }
            .form-row {
                display: flex;
                gap: 20px;
                margin-bottom: 20px;
            }
            .input-group {
                flex: 1;
                display: flex;
                flex-direction: column;
            }
            .input-group label {
                font-size: 15px;
                font-weight: 600;
                margin-bottom: 8px;
                color: #333;
            }
            .input-group input, .input-group textarea {
                width: 100%;
                padding: 13px 15px;
                border: 1px solid #ddd;
                border-radius: 8px;
                outline: none;
                font-size: 15px;
                transition: .3s;
            }
            .input-group textarea {
                resize: none;
                height: 120px;
            }
            .input-group input:focus, .input-group textarea:focus {
                border-color: #000;
            }
            .readonly {
                background: #f3f3f3;
            }
            .save-btn {
                margin-top: 20px;
                background: #000;
                color: #fff;
                border: none;
                padding: 14px 35px;
                border-radius: 8px;
                cursor: pointer;
                font-size: 16px;
                transition: .3s;
            }
            .save-btn:hover {
                background: #333;
            }
            .alert-success {
                background: #d4edda;
                color: #155724;
                padding: 12px 18px;
                border-radius: 6px;
                margin-bottom: 20px;
            }
            .alert-danger {
                background: #f8d7da;
                color: #721c24;
                padding: 12px 18px;
                border-radius: 6px;
                margin-bottom: 20px;
            }
            .profile-menu a.active{
                background:#000;
                color:#fff;
                font-weight:600;
            }
            .profile-menu a.active i{
                color:#fff;
            }
            /* .modal{
                display:none;
                position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:rgba(0,0,0,.5);
                justify-content:center;
                align-items:center;
                z-index:9999;
            }
            .modal-content{
                width:350px;
                background:#fff;
                border-radius:10px;
                padding:25px;
                text-align:center;
                box-shadow:0 10px 30px rgba(0,0,0,.3);
            }
            .modal-content h3{
                margin-bottom:10px;
            }
            .modal-content p{
                color:#555;
                margin-bottom:20px;
            }
            .modal-buttons{
                display:flex;
                justify-content:center;
                gap:15px;
            } */
            .delete-btn,.confirm-btn,.cancel-btn{
                padding:10px 20px;
                border:none;
                border-radius:5px;
                cursor:pointer;
                font-size:15px;
            }
            .delete-btn,.confirm-btn{
                background:#dc3545;
                color:#fff;
            }
            .modal{
                display:none;
                position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:rgba(0,0,0,.45);
                z-index:99999;
                justify-content:center;
                align-items:center;
            }
            .modal-content{
                width:420px;
                max-width:40%;
                height:auto;
                max-height:320px;
                background:#fff;
                border-radius:12px;
                overflow:hidden;
                box-shadow:0 20px 40px rgba(0,0,0,.25);
                flex:none;
                align-self:center;
            }
            .modal-content h3{
                margin:0;
                padding:18px 22px;
                font:600 18px "Segoe UI",sans-serif;
                color:#202124;
                border-bottom:1px solid #ececec;
            }
            .modal-content p{
                margin:0;
                padding:24px;
                font:15px "Segoe UI",sans-serif;
                color:#555;
                line-height:24px;
            }
            .modal-buttons{
                display:flex;
                justify-content:flex-end;
                gap:12px;
                padding:16px 20px;
                background:#f8f8f8;
                border-top:1px solid #ececec;
            }
            .modal-buttons button{
                min-width:90px;
                height:38px;
                border:none;
                border-radius:6px;
                cursor:pointer;
                font:500 14px "Segoe UI",sans-serif;
            }
            .cancel-btn{
                background:#f1f3f5;
                color:#333;
            }
            .cancel-btn:hover{
                background:#e4e6e8;
            }
            .confirm-btn{
                background:#d32f2f;
                color:#fff;
            }
            .confirm-btn:hover{
                background:#b71c1c;
            }
            @media(max-width:991px) {
                .profile-container {
                    flex-direction: column;
                }
                .profile-sidebar {
                    width: 100%;
                }
            }
            @media(max-width:768px) {
                .form-row {
                    flex-direction: column;
                }
                .profile-card {
                    padding: 20px;
                }
                .profile-top {
                    padding: 20px;
                }
                .profile-avatar {
                    width: 90px;
                    height: 90px;
                    font-size: 45px;
                }
                .profile-card h2 {
                    font-size: 24px;
                }
            }
            @media(max-width:480px) {
                .profile-section {
                    padding: 20px 0;
                }
                .profile-card {
                    padding: 15px;
                }
                .save-btn {
                    width: 100%;
                }
                .profile-menu a {
                    font-size: 14px;
                }
            }
            @keyframes popup{
                from{
                    transform:scale(.9);
                    opacity:0;
                }
                to{
                    transform:scale(1);
                    opacity:1;
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
                    <div class="profile-card">
                        <h2>Delete Account</h2>
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert-success">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert-danger">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="container" style="max-width:500px;margin:60px auto;text-align:center;">
                            <h2>Delete Account</h2>
                            <p style="color:red;">
                                Are you sure you want to delete your account?<br>This action cannot be undone.
                            </p>
                            <form action="<?= base_url('delete_account') ?>" method="post">
                                <?= csrf_field() ?>
                                <button type="button" id="deleteBtn" class="delete-btn">Delete My Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="deleteModal" class="modal">
            <div class="modal-content">
                <h3>Delete Account</h3>
                <p>Are you sure you want to delete your account?</p>
                <div class="modal-buttons">
                    <button type="button" id="cancelBtn" class="cancel-btn">Cancel</button>
                    <form action="<?= base_url('delete_account') ?>" method="post">
                        <?= csrf_field() ?>
                        <button type="submit" class="confirm-btn">Yes, Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            const modal = document.getElementById("deleteModal");
            const deleteBtn = document.getElementById("deleteBtn");
            const cancelBtn = document.getElementById("cancelBtn");
            deleteBtn.onclick = function () {
                modal.style.display = "flex";
            };
            cancelBtn.onclick = function () {
                modal.style.display = "none";
            };
            window.onclick = function (e) {
                if (e.target == modal) {
                    modal.style.display = "none";
                }
            };
        </script>
        <?= $this->include('templates/footer'); ?>
    </body>
</html>