<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Profile</title>
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
                        <h2>My Profile</h2>
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
                        <form id="profileForm" action="<?= base_url('my_profile'); ?>" method="post">
                            <div class="form-row">
                                <div class="input-group">
                                    <label>Full Name</label>
                                    <input type="text" id="full_name" name="full_name" value="<?= esc($user['full_name']); ?>" required>
                                </div>
                                <div class="input-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" value="<?= esc($user['email']); ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <label>Mobile Number</label>
                                    <input type="text" id="mobile" name="mobile" maxlength="10"
                                        value="<?= esc($user['mobile']); ?>" required>
                                </div>
                                <div class="input-group">
                                    <label>Date Joined</label>
                                    <input type="text" value="<?= esc($user['created_at']); ?>" class="readonly" readonly>
                                </div>
                            </div>
                            <div class="input-group">
                                <label>Address</label>
                                <textarea name="address" placeholder="Enter your Address"><?= esc($user['address'] ?? ''); ?></textarea>
                            </div><br>
                            <div class="form-row">
                                <div class="input-group">
                                    <label>City</label>
                                    <input type="text" name="city" value="<?= esc($user['city'] ?? ''); ?>"
                                        placeholder="Enter City">
                                </div>
                                <div class="input-group">
                                    <label>State</label>
                                    <input type="text" name="state" value="<?= esc($user['state'] ?? ''); ?>"
                                        placeholder="Enter State">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <label>Country</label>
                                    <input type="text" name="country"
                                        value="<?= !empty($user['country']) ? esc($user['country']) : 'India'; ?>" readonly
                                        class="readonly">
                                </div>
                                <div class="input-group">
                                    <label>Pincode</label>
                                    <input type="text" name="pincode" maxlength="6"
                                        value="<?= esc($user['pincode'] ?? ''); ?>" placeholder="Enter Pincode">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <label>Account Status</label>
                                    <input type="text" value="Active" class="readonly" readonly>
                                </div>
                                <div class="input-group">
                                    <label>Gender</label>
                                    <select name="gender"
                                        style="width:100%;padding:13px;border:1px solid #ddd;border-radius:8px;outline:none;">
                                        <option value="">Select Gender</option>
                                        <option value="Male" <?= (isset($user['gender']) && $user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                        <option value="Female" <?= (isset($user['gender']) && $user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                        <option value="Other" <?= (isset($user['gender']) && $user['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div style="margin-top:30px;">
                                <button type="submit" class="save-btn">Save Changes</button>
                                <a href="<?= base_url('/'); ?>" style="display:inline-block; margin-left:15px; padding:14px 30px; background:#6c757d; color:#fff; text-decoration:none; border-radius:8px;">Back Home</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.getElementById("profileForm");
                if (form) {
                    form.addEventListener("submit", function (e) {
                        let fullName = document.getElementById("full_name").value.trim();
                        let mobile = document.getElementById("mobile").value.trim();
                        if (fullName === "") {
                            alert("Please enter Full Name");
                            e.preventDefault();
                            return;
                        }
                        if (mobile === "") {
                            alert("Please enter Mobile Number");
                            e.preventDefault();
                            return;
                        }
                        if (!/^[0-9]{10}$/.test(mobile)) {
                            alert("Please enter a valid 10-digit Mobile Number");
                            e.preventDefault();
                            return;
                        }
                        if (!confirm("Do you want to save your profile changes?")) {
                            e.preventDefault();
                            return;
                        }
                    });

                }
            });
        </script>
        <?= $this->include('templates/footer'); ?>
    </body>
</html>