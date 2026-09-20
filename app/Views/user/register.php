<?php if (session()->getFlashdata('error')): ?> 
    <div class="alert alert-danger"> 
        <?= session()->getFlashdata('error'); ?> 
    </div> 
<?php endif; ?> 
<style> 
    .alert-danger{ 
        background:#ffe6e6; 
        color:#c62828; 
        padding:12px; 
        border-radius:5px; 
        margin-bottom:15px; text-align:center; 
    } 
</style> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>User Registration</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <style> 
            body { 
                background: #f5f5f5; 
                font-family: Arial, sans-serif; 
            } 
            .register-box { 
                width: 100%; 
                max-width: 650px; 
                margin: 40px auto; 
                background: #fff; 
                padding: 30px; 
                border-radius: 10px; 
                box-shadow: 0 5px 20px rgba(0, 0, 0, .15); 
            } 
            h2 { 
                text-align: center; 
                margin-bottom: 25px; 
                font-weight: bold; 
            } 
            label { 
                font-weight: 600; 
                margin-bottom: 5px; 
            } 
            .otp-box { 
                display: flex; 
                gap: 10px; 
            } 
            .otp-box input { 
                flex: 1; 
            } 
            .otp-text { 
                color: green; 
                font-weight: bold; 
                margin-top: 5px; 
            } 
            .btn-register { 
                width: 100%; 
                background: #000; 
                color: #fff; 
                padding: 12px; 
                border: none; 
                border-radius: 5px; 
                font-size: 16px; 
            } 
            .btn-register:disabled { 
                background: #999; 
                cursor: not-allowed; 
            } 
        </style> 
    </head> 
    <body> 
        <div class="container mt-5"> 
            <div class="row justify-content-center"> 
                <div class="col-lg-6 col-md-8"> 
                    <div class="card shadow"> 
                        <div class="card-header text-center"> 
                            <h2>User Registration</h2> 
                        </div> 
                        <div class="card-body"> 
                            <?php if (session()->getFlashdata('error')): ?> 
                                <div class="alert alert-danger"> 
                                    <?= session()->getFlashdata('error'); ?> 
                                </div> 
                            <?php endif; ?> 
                            <?php if (session()->getFlashdata('success')): ?> 
                                <div class="alert alert-success"> 
                                    <?= session()->getFlashdata('success'); ?> 
                                </div> 
                            <?php endif; ?> 
                            <form action="<?= base_url('register'); ?>" method="post"> 
                                <div class="mb-3"> 
                                    <label class="form-label">Full Name</label> 
                                    <input type="text" name="full_name" class="form-control" placeholder="Enter Full Name" required> 
                                </div> 
                                <div class="mb-3"> 
                                    <label class="form-label">Email Address</label> 
                                    <div class="input-group"> 
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required> 
                                        <button type="button" class="btn btn-primary" onclick="sendEmailOTP()">Send OTP</button> 
                                    </div> 
                                    <div id="emailOtpShow" class="mt-2 text-success fw-bold"></div>
                                </div> 
                                <div class="mb-3"> 
                                    <label class="form-label">Email OTP</label> 
                                    <div class="input-group"> 
                                        <input type="text" id="emailOtpInput" class="form-control" placeholder="Enter Email OTP"> 
                                        <button type="button" class="btn btn-success" onclick="verifyEmailOTP()">Verify</button> 
                                    </div> 
                                </div> 
                                <div class="mb-3"> 
                                    <label class="form-label">Mobile Number</label> 
                                    <div class="input-group"> 
                                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number" maxlength="10" required> 
                                        <button type="button" class="btn btn-primary" onclick="sendMobileOTP()">Send OTP</button> 
                                    </div> 
                                    <div id="mobileOtpShow" class="mt-2 text-success fw-bold"></div> 
                                </div> 
                                <div class="mb-3"> 
                                    <label class="form-label">Mobile OTP</label> 
                                    <div class="input-group"> 
                                        <input type="text" id="mobileOtpInput" class="form-control" placeholder="Enter Mobile OTP"> 
                                        <button type="button" class="btn btn-success" onclick="verifyMobileOTP()">Verify</button> 
                                    </div> 
                                </div> 
                                <div class="mb-3"> 
                                    <label class="form-label">Password</label> 
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required> 
                                </div> 
                                <div class="mb-3"> 
                                    <label class="form-label">Confirm Password</label> 
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required> 
                                </div> 
                                <div class="d-grid mt-3"> 
                                    <button type="submit" class="btn btn-dark">Register</button> 
                                </div> 
                                <div class="text-center mt-3"> 
                                    Already have an account? 
                                    <a href="<?= base_url('/'); ?>">Login</a> 
                                </div> 
                            </form> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
        <script> 
            let emailOTP = ""; 
            let mobileOTP = ""; 
            let emailVerified = false; 
            let mobileVerified = false; 
            function generateOTP() { 
                return Math.floor(100000 + Math.random() * 900000).toString(); 
            } 
            function sendEmailOTP() { 
                let email = document.getElementById("email").value.trim(); 
                if (email == "") { 
                    alert("Please enter Email Address"); return; 
                } 
                emailOTP = generateOTP(); 
                document.getElementById("emailOtpShow").innerHTML = "OTP : <strong>" + emailOTP + "</strong>"; 
                emailVerified = false; 
            }
            function sendMobileOTP() { 
                let mobile = document.getElementById("mobile").value.trim(); 
                if (mobile == "") { 
                    alert("Please enter Mobile Number"); return; 
                } 
                if (mobile.length != 10) { 
                    alert("Please enter valid Mobile Number"); 
                    return; 
                } 
                emailVerified = false; 
                mobileOTP = generateOTP(); 
                document.getElementById("mobileOtpShow").innerHTML = "OTP : <strong>" + mobileOTP + "</strong>"; 
                mobileVerified = false; 
            } 
            function verifyEmailOTP() { 
                let otp = document.getElementById("emailOtpInput").value.trim(); 
                if (otp == emailOTP) { 
                    emailVerified = true; alert("Email Verified Successfully"); 
                } else { 
                    emailVerified = false; alert("Invalid Email OTP"); 
                } 
                checkRegister(); 
            } 
            function verifyMobileOTP() { 
                let otp = document.getElementById("mobileOtpInput").value.trim(); 
                if (otp == mobileOTP) { 
                    mobileVerified = true; 
                    alert("Mobile Verified Successfully"); 
                } else { 
                    mobileVerified = false; 
                    alert("Invalid Mobile OTP"); 
                } 
                checkRegister(); 
            } 
            function checkRegister() { 
                if (emailVerified && mobileVerified) { 
                    document.getElementById("registerBtn").disabled = false; 
                } else { 
                    document.getElementById("registerBtn").disabled = true; 
                } 
            } 
            document.querySelector("form").addEventListener("submit", function (e) { 
                if (!emailVerified) { 
                    alert("Please verify Email OTP."); e.preventDefault(); 
                    return; 
                } 
                if (!mobileVerified) { 
                    alert("Please verify Mobile OTP."); e.preventDefault(); 
                    return; 
                } 
                let password = document.querySelector("input[name='password']").value; 
                let confirm = document.querySelector("input[name='confirm_password']").value; 
                if (password != confirm) { 
                    alert("Password and Confirm Password do not match."); e.preventDefault(); 
                    return; 
                } 
            }); 
        </script> 
    </body> 
</html>