<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change Password</title>
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
            .password-card{
                background:#fff;
                border-radius:12px;
                box-shadow:0 5px 15px rgba(0,0,0,.08);
                padding:35px;
            }
            .password-card h2{
                margin-bottom:25px;
                color:#222;
            }
            .form-group{
                margin-bottom:20px;
            }
            .form-group label{
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#333;
            }
            .password-box{
                position:relative;
            }
            .password-box input{
                width:100%;
                height:50px;
                border:1px solid #ddd;
                border-radius:8px;
                padding:0 50px 0 15px;
                font-size:15px;
                outline:none;
                transition:.3s;
            }
            .password-box input:focus{
                border-color:#000;
            }
            .toggle-password{
                position:absolute;
                right:18px;
                top:50%;
                transform:translateY(-50%);
                cursor:pointer;
                color:#666;
            }
            .change-btn{
                width:100%;
                height:50px;
                background:#000;
                color:#fff;
                border:none;
                border-radius:8px;
                font-size:16px;
                cursor:pointer;
                transition:.3s;
            }
            .change-btn:hover{
                background:#222;
            }
            .alert-success{
                background:#d4edda;
                color:#155724;
                padding:12px 15px;
                border-radius:6px;
                margin-bottom:20px;
            }
            .alert-error{
                background:#f8d7da;
                color:#721c24;
                padding:12px 15px;
                border-radius:6px;
                margin-bottom:20px;
            }
            @media (max-width:992px){
                .profile-section{
                    margin-top:80px;
                    padding:30px 0;
                }
                .profile-container{
                    flex-direction:column;
                    gap:20px;
                }
                .profile-sidebar{
                    width:100%;
                }
                .profile-content{
                    width:100%;
                }
                .password-card{
                    padding:25px;
                }
            }
            @media (max-width:768px){
                .profile-section{
                    margin-top:70px;
                    padding:20px 0;
                }
                .profile-container{
                    width:95%;
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
                    padding:12px 15px;
                    font-size:14px;
                }
                .password-card{
                    padding:20px;
                }
                .password-card h2{
                    font-size:24px;
                    margin-bottom:20px;
                }
                .form-group{
                    margin-bottom:18px;
                }
                .form-group label{
                    font-size:14px;
                }
                .password-box input{
                    height:45px;
                    font-size:14px;
                }
                .toggle-password{
                    right:15px;
                    font-size:14px;
                }
                .change-btn{
                    height:45px;
                    font-size:15px;
                }
                .alert-success, .alert-error{
                    font-size:14px;
                }
            }
            @media (max-width:480px){
                .profile-section{
                    margin-top:60px;
                }
                .profile-container{
                    width:98%;
                }
                .profile-sidebar{
                    border-radius:10px;
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
                .profile-menu{
                    padding:10px;
                }
                .profile-menu a{
                    padding:10px;
                    font-size:13px;
                }
                .password-card{
                    padding:15px;
                    border-radius:10px;
                }
                .password-card h2{
                    font-size:20px;
                }
                .form-group label{
                    font-size:13px;
                }
                .password-box input{
                    height:42px;
                    padding:0 42px 0 12px;
                    font-size:13px;
                }
                .toggle-password{
                    right:12px;
                    font-size:13px;
                }
                .change-btn{
                    height:42px;
                    font-size:14px;
                }
                .alert-success, .alert-error{
                    padding:10px;
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
                    <div class="password-card">
                        <h2>Change Password</h2>
                        <?php if(session()->getFlashdata('success')): ?>
                            <div class="alert-success">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(session()->getFlashdata('error')): ?>
                            <div class="alert-error">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url('change_password'); ?>" method="post">
                            <div class="form-group">
                                <label>Current Password</label>
                                <div class="password-box">
                                    <input type="password" name="current_password" id="current_password" placeholder="Enter Current Password" required>
                                    <span class="toggle-password"onclick="togglePassword('current_password',this)"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <div class="password-box">
                                    <input type="password" name="new_password" id="new_password" placeholder="Enter New Password" required>
                                    <span class="toggle-password" onclick="togglePassword('new_password',this)"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <div class="password-box">
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm New Password" required>
                                    <span class="toggle-password" onclick="togglePassword('confirm_password',this)"></span>
                                </div>
                            </div>
                            <button type="submit" class="change-btn">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('templates/footer'); ?>
    </body>
</html>