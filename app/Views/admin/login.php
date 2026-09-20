<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                margin: 0;
                height: 100vh;
                font-family: 'Segoe UI', sans-serif;
                background: linear-gradient(135deg, #4e73df, #1cc88a);
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .login-card {
                width: 100%;
                max-width: 380px;
                padding: 35px 30px;
                border-radius: 15px;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(12px);
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                color: #fff;
            }
            .login-card h3 {
                text-align: center;
                margin-bottom: 25px;
                font-weight: 600;
            }
            .form-control {
                border-radius: 8px;
                border: none;
                padding: 12px;
            }
            .form-control:focus {
                box-shadow: none;
                border: 1px solid #fff;
            }
            .btn-login {
                background: #fff;
                color: #4e73df;
                border-radius: 8px;
                padding: 10px;
                font-weight: 600;
                transition: 0.3s;
            }
            .btn-login:hover {
                background: #4e73df;
                color: #fff;
            }
            .alert {
                border-radius: 8px;
                font-size: 14px;
            }
            .icon {
                text-align: center;
                font-size: 40px;
                margin-bottom: 10px;
            }
            .modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
                justify-content: center;
                align-items: center;
                z-index: 999;
            }
            .modal-box {
                background: #ffffff;
                padding: 25px;
                border-radius: 10px;
                width: 320px;
                text-align: center;
                box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            }
            .modal-box h4 {
                margin-bottom: 15px;
            }
            .modal-box input {
                width: 100%;
                padding: 10px;
                margin: 6px 0;
                border-radius: 6px;
                border: 1px solid #ccc;
            }
            .modal-box button {
                width: 100%;
                padding: 10px;
                margin-top: 6px;
                border: none;
                border-radius: 6px;
                cursor: pointer;
            }
            .modal-box button:first-of-type {
                background: #4e73df;
                color: white;
            }
            #passwordBox button {
                background: #1cc88a;
                color: white;
            }
            .modal-box button:last-of-type {
                background: #e74a3b;
                color: white;
            }
            .hidden {
                display: none;
            }
            #otpText {
                font-weight: bold;
                color: #4e73df;
            }
            #error {
                font-size: 13px;
            }
        </style>
    </head>
    <body>
        <div class="login-card">
            <div class="icon">
                <i class="fa-solid fa-user-shield"></i>
            </div>
            <h3>Admin Login</h3>
            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('admin/loginProcess') ?>">
                <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                <button class="btn btn-login w-100">Login</button>
                <p onclick="openModal()" style="cursor:pointer;">Forgot Password?</p>
            </form>
        </div>
        <div id="forgotModal" class="modal">
            <div class="modal-box">
                <h4>Forgot Password</h4>
                <p>Send OTP to this number: <?= $maskedPhone ?></p>
                <button onclick="sendOtp()">Send OTP</button>
                <p id="otpText"></p>
                <input type="text" id="otpInput" class="hidden" placeholder="Enter OTP" onkeyup="checkOtp()">
                <p id="error" style="color:red;"></p>
                <div id="passwordBox" class="<?= session()->getFlashdata('success') || session()->getFlashdata('error') ? '' : 'hidden' ?>">
                    <form method="post" action="<?= base_url('admin/updatePassword') ?>">
                        <input type="password" name="newPass" placeholder="New Password" required>
                        <input type="password" name="confirmPass" placeholder="Confirm Password" required>
                        <button type="submit">Save Password</button>
                    </form>
                </div>
                <button onclick="closeModal()">Close</button>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
        <script>
            let otp = "";
            function openModal() {
                document.getElementById("forgotModal").style.display = "flex";
            }
            function closeModal() {
                document.getElementById("forgotModal").style.display = "none";
                resetAll();
            }
            function sendOtp() {
                otp = Math.floor(1000 + Math.random() * 9000);
                document.getElementById("otpText").innerHTML = "OTP: " + otp;
                document.getElementById("otpInput").classList.remove("hidden");
            }
            function checkOtp() {
                let userOtp = document.getElementById("otpInput").value;
                if (userOtp == otp) {
                    document.getElementById("passwordBox").classList.remove("hidden");
                    document.getElementById("error").innerHTML = "";
                } else {
                    document.getElementById("error").innerHTML = "Invalid OTP";
                }
            }
            function resetAll() {
                document.getElementById("otpInput").value = "";
                document.getElementById("otpInput").classList.add("hidden");
                document.getElementById("passwordBox").classList.add("hidden");
                document.getElementById("otpText").innerHTML = "";
                document.getElementById("error").innerHTML = "";
            }
        </script>
    </body>
</html>