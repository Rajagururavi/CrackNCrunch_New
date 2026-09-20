<style>
    .footer {
        background: black;
        color: #cfcfcf;
        padding: 60px 20px 20px;
        margin-top: 50px;
        font-family: Arial, sans-serif;
    }
    .footer-top {
        border-top: 1px solid #222;
    }
    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px; 
        max-width: 1200px;
        margin: auto;
        padding: 20px 0; 
        align-items: flex-start;
    }
    .footer-col {
        flex: 1;
        min-width: 220px;
        display: flex;
        flex-direction: column;
    }
    .footer-logo {
        font-size: 24px;
        font-weight: bold;
        color: #f5deb3;
        margin-bottom: 10px;
    }
    .footer h4 {
        color: #fff;
        font-size: 15px;
        margin-bottom: 10px; 
        position: relative;
        font-weight: 600;
    }
    .footer h4::after {
        content: "";
        width: 45px;
        height: 2px;
        background: #f5deb3;
        position: absolute;
        left: 0;
        bottom: -6px;
    }
    .footer p {
        font-size: 14px;
        line-height: 1.5; 
        color: #bdbdbd;
        margin: 5px 0; 
    }
    .footer ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .footer ul li {
        margin-bottom: 6px; 
    }
    .footer ul li a {
        text-decoration: none;
        color: #bdbdbd;
        font-size: 14px;
        transition: 0.3s;
        display: inline-block;
    }
    .footer ul li a:hover {
        color: #f5deb3;
        transform: translateX(5px);
    }
    .social-icons {
        margin-top: 10px;
    }
    .social-icons i {
        font-size: 18px;
        margin-right: 10px;
        color: #bdbdbd;
        cursor: pointer;
        transition: 0.3s;
    }
    .social-icons i:hover {
        color: #f5deb3;
        transform: scale(1.2);
    }
    .footer-bottom {
        text-align: center;
        margin-top: 20px; 
        padding: 12px;
        font-size: 13px;
        color: #2f2f2f;
        background-color: #f5deb3;
    } 
</style> 
<style>
    .footer-logo img {
        margin-top: -40px;
        width: 100%;
        height: 100px;
        object-fit: contain;
        display: block;
        margin-left: -20px;
    }
</style>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-col">
            <div class="footer-logo">
                <a href="<?= base_url('/') ?>"><img src="<?= base_url('uploads/1.png'); ?>"></a>
            </div>
            <p>
                At Crack n crunch, we offer premium-quality nuts, dry fruits, and wholesome snacks, carefully sourced and packed to preserve freshness, deliver natural goodness.
            </p>
        </div>
        <div class="footer-col">
            <h4>Our Policies</h4>
            <ul>
                <li><a href="<?= base_url('terms') ?>">Terms & Conditions</a></li>
                <li><a href="<?= base_url('privacy') ?>">Privacy Policy</a></li>
                <li><a href="<?= base_url('shipping') ?>">Shipping Policy</a></li>
                <li><a href="<?= base_url('return-policy') ?>">Refunds & Returns</a></li>
                <li><a href="<?= base_url('cancellation') ?>">Cancellation</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About Us</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                <li><a href="#">Latest Blogs</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Address</h4>
            <p>Door No.5, 3, Appu Street,</p>
            <p>Seetha Nagar, Nungambakkam,</p>
            <p>Chennai - 600034</p>
            <p>Email:  crackxcrunch@gmail.com</p>
            <p>Phone: +91 97518 11222</p>
        </div>
    </div>
    <div class="footer-top"></div>
    <div class="footer-bottom">
        © 2026 Crack n crunch. Designed and Developed with Excellence by Digital Devora . All Rights Reserved.
    </div>
</footer>