<?= $this->include('templates/header') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    body{
        margin:0;
        padding:0;
        overflow-x: hidden;
        font-family:Arial, sans-serif;
        background:#fff;
    }
    .terms-banner{
        width:100%;
        height:320px;
        margin-top:110px;
        position:relative;
        overflow:hidden;
    }
    .terms-banner img{
        width:100%;
        height:100%;
        object-fit:cover;
        display:block;
    }
    .terms-banner::before{
        content:"";
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.45);
        z-index:1;
    }
    .banner-text{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        text-align:center;
        color:#fff;
        z-index:2;
    }
    .banner-text a{
        color:#fff;
        text-decoration:none;
        font-weight:600;
    }
    .banner-text a:hover{
        color:#f5deb3;
    }
    .about-section{
        width:100%;
        padding:90px 8%;
        background:#fff;
        box-sizing:border-box;
    }
    .about-container{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:70px;
        flex-wrap:wrap;
    }
    .about-content{
        flex:1;
        min-width:320px;
    }
    .about-tag{
        color:#c89b3c;
        font-size:15px;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
        margin-bottom:18px;
        display:block;
    }
    /* .about-content h2{
        font-size:40px;
        line-height:1.25;
        color:#222;
        margin-bottom:25px;
        font-weight:700;
    }
    .about-content p{
        font-size:16px;
        color:#666;
        line-height:1.9;
        margin-bottom:20px;
    }
    .about-image{
        flex:1;
        min-width:320px;
    }
    .about-image img{
        width:100%;
        border-radius:25px;
        object-fit:cover;
        box-shadow:0 12px 25px rgba(0,0,0,0.12);
    } */
    .dryfruit-banner{
        width:80vw;
        height:320px;
        position:relative;
        overflow:hidden;
        margin-top:25px;
        margin-left: 10px;
        border-radius:20px;
    }
    .dryfruit-banner img{
        width:100%;
        height:100%;
        object-fit:cover;
        display:block;
    }
    .dryfruit-banner::before{
        content:'';
        position:absolute;
        inset:0;
        background:rgba(0,0,0,0.45);
    }
    .dryfruit-banner-content{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        z-index:2;
        text-align:center;
        max-width:700px;
        width:90%;
    }
    .dryfruit-banner-content h1{
        color:#fff;
        font-size:55px;
        font-weight:800;
        line-height:1.2;
        margin-bottom:18px;
    }
    .dryfruit-banner-content span{
        color:#fff;
        font-size:18px;
        line-height:1.7;
        display:block;
        white-space:nowrap;
        margin-left: -190px;
    }
    .order-btn{
        display:inline-block;
        margin-top:25px;
        padding:14px 35px;
        background:#d4a017;
        color:#fff;
        text-decoration:none;
        font-size:17px;
        font-weight:600;
        border-radius:50px;
        transition:0.3s;
    }
    .order-btn:hover{
        background:#b8860b;
    } 
    .contact-info-section{
        flex:1.5;
        min-width:320px;
        display:grid;
        grid-template-columns:repeat(2,1fr);
        gap:20px;
    }
    .contact-box{
        background:#fafafa;
        border:1px solid #e8e8e8;
        border-radius:15px;
        padding:30px 25px;
        display:flex;
        align-items:center;
        gap:18px;
        transition:.3s ease;
    }
    .contact-content{
        display:flex;
        flex-direction:column;
    }
    .contact-content h3{
        margin:0 0 5px;
    }
    .contact-content p{
        margin:0;
    }
    .contact-box:hover{
        border-color:#c89b3c;
        transform:translateY(-3px);
    }
    .contact-icon{
        width:60px;
        height:60px;
        min-width:60px;
        border-radius:50%;
        background:#c89b3c;
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:22px;
    }
    .contact-box h3{
        margin:0 0 6px;
        font-size:15px;
        color:#222;
        font-weight:700;
    }
    .contact-box p{
        margin:0;
        color:#777;
        font-size:14px;
        line-height:1.6;
    }
    .contact-form-section{
        margin-top:60px;
        display:flex;
        gap:50px;
        align-items:center;
        background:#fff;
    }
    .contact-form-left{
        flex:1;
    }
    .form-tag{
        color:#c89b3c;
        font-size:14px;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
    }
    .contact-form-left h2{
        font-size:40px;
        color:#222;
        margin:15px 0;
    }
    .contact-form-left p{
        color:#666;
        line-height:1.8;
        margin-bottom:25px;
    }
    .contact-form-left ul{
        list-style:none;
        padding:0;
        margin:0;
    }
    .contact-form-left ul li{
        margin-bottom:12px;
        color:#444;
    }
    .contact-form-right{
        flex:1;
        background:black;
        padding:35px;
        border-radius:20px;
        border:1px solid #eee;
    }
    .form-row{
        display:grid;
        grid-template-columns:repeat(2,1fr);
        gap:15px;
        margin-bottom:15px;
    }
    .contact-form-right input,.contact-form-right textarea{
        width:100%;
        padding:15px;
        border:1px solid #ddd;
        border-radius:10px;
        font-size:14px;
        box-sizing:border-box;
    }
    .contact-form-right textarea{
        height:160px;
        resize:none;
        margin-bottom:15px;
    }
    .contact-form-right button{
        background:#c89b3c;
        color:#fff;
        border:none;
        padding:14px 30px;
        border-radius:50px;
        cursor:pointer;
        font-weight:600;
    }
    .contact-form-right button:hover{
        background:#b8860b;
    }
    p{
        text-align: justify;
        text-justify: inter-word; 
        line-height: 1.8;
        margin-bottom: 20px;
    }
    @media (max-width: 768px){
        .contact-info-section{
            grid-template-columns:1fr;
            gap:15px;
            width:100%;
        }
        .contact-box{
            width:100%;
            box-sizing:border-box;
        } 
        .contact-icon{
            width:55px;
            height:55px;
            min-width:55px;
            font-size:20px;
        } 
        .contact-content h3{
            font-size:15px;
        }
        .contact-content p{
            font-size:13px;
        } 
    }
    @media (max-width: 480px){
        .contact-box{
            padding:15px;
            gap:12px;
        }
        .contact-icon{
            width:50px;
            height:50px;
            min-width:50px;
            font-size:18px;
        }
        .contact-content h3{
            font-size:14px;
            margin-bottom:4px;
        }
        .contact-content p{
            font-size:12px;
            line-height:1.5;
        }
    }
    @media screen and (max-width:1024px){
        .about-section{
            padding:70px 5%;
        }
        .about-container{
            gap:50px;
            align-items:flex-start;
        }
        .about-content{
            flex:1;
        }
        .about-image{
            flex:1;
            padding-top:20px;
            margin-bottom:30px;
        }
    }
    @media screen and (max-width:768px){
        .terms-banner{
            height:220px;
            margin-top:85px;
        }
        .banner-text{
            width:92%;
        }
        .banner-text h1{
            font-size:28px;
        }
        .banner-text span,.banner-text a{
            font-size:13px;
        }
        .about-section{
            padding:55px 5%;
        }
        .about-container{
            flex-direction:column;
            gap:35px;
        }
        .about-content{
            width:100%;
        }
    }
    @media screen and (max-width:480px){
        .terms-banner{
            height:180px;
        }
        .banner-text h1{
            font-size:22px;
        }
        .about-section{
            padding:45px 4%;
        }
        .about-container{
            gap:28px;
        }
    }
    @media(max-width:1200px){
        .dryfruit-banner-content h1{
            font-size:48px;
        }
        .dryfruit-banner-content span{
            font-size:16px;
            margin-left:0;
            white-space:normal;
        }
        .work-section h2{
            font-size:42px;
        }
    }
    @media(max-width:992px){
        .dryfruit-banner{
            height:280px;
        }
        .dryfruit-banner-content h1{
            font-size:40px;
        }
        .dryfruit-banner-content span{
            font-size:15px;
            line-height:1.6;
        }
        .order-btn{
            padding:12px 28px;
            font-size:16px;
        }
    }
    @media(max-width:768px){
        .dryfruit-banner{
            height:250px;
        }
        .dryfruit-banner-content{
            width:95%;
        }
        .dryfruit-banner-content h1{
            font-size:32px;
        }
        .dryfruit-banner-content span{
            font-size:14px;
        }
        .order-btn{
            margin-top:18px;
            padding:10px 24px;
            font-size:15px;
        }
    }
    @media(max-width:480px){
        .dryfruit-banner{
            height:220px;
        }
        .dryfruit-banner-content h1{
            font-size:26px;
        }
        .dryfruit-banner-content span{
            font-size:13px;
        }
        .order-btn{
            padding:9px 20px;
            font-size:14px;
        }
    }
    @media(max-width:768px){
        .contact-form-section{
            flex-direction:column;
            gap:30px;
        }
        .form-row{
            grid-template-columns:1fr;
        }
        .contact-form-right{
            width:100%;
            padding:20px;
        }
        .contact-form-left h2{
            font-size:28px;
        }
    }
</style>
<div class="terms-banner">
    <img src="<?= base_url('uploads/contact1.png'); ?>">
    <div class="banner-text">
        <h1>CONTACT US</h1>
        <a href="<?= base_url('/') ?>">Home</a>
        <span> &gt;&gt; </span>
        <span>Contact Us</span>
    </div>
</div>
<section class="about-section">
    <div class="about-container">
        <div class="about-content">
            <span class="about-tag">Get In Touch Now</span>
            <h2>Contact Us Anytime</h2>
            <p>
                Have a question about our products or bulk orders? We’re
                here to help with premium nuts, dry fruits, dates, seeds, gift
                packs, and wholesale inquiries. Reach out to us anytime—
                we’ll be happy to assist you. <br><br>
            </p>
        </div>
        <div class="contact-info-section">
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-content">
                    <h3>Email</h3>
                    <p>crackxcrunch@gmail.com</p>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="contact-content">
                    <h3>Chat With Agent</h3>
                    <p>chat us on social medias</p>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-content">
                    <h3>Make Phone Call</h3>
                    <p>+91  97518 11222</p>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div class="contact-content">
                    <h3>FAQ</h3>
                    <p>Read FAQ to clear confusion</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form-section">
        <div class="contact-form-left">
            <span class="form-tag">SEND US A MESSAGE</span>
            <h2>Get In Touch With Us</h2>
            <p>
                Have questions about our products, wholesale orders,
                gifting solutions, or bulk requirements? Fill out the
                form and our team will contact you shortly.
            </p>
            <ul>
                <li>✔ Premium Quality Products</li>
                <li>✔ Bulk & Wholesale Orders</li>
                <li>✔ Fast Customer Support</li>
                <li>✔ Corporate Gift Solutions</li>
            </ul>
        </div>
        <div class="contact-form-right">
            <form>
                <div class="form-row">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Email Address">
                </div>
                <div class="form-row">
                    <input type="tel" placeholder="Phone Number">
                    <input type="text" placeholder="Subject">
                </div>
                <textarea placeholder="Write Your Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
    <div class="dryfruit-banner">
        <img src="<?= base_url('uploads/contact2.png'); ?>">
        <div class="dryfruit-banner-content">
            <h1>Premium Nuts &<br> Dry Fruits Store</h1>
            <span>
                Fresh, natural, and high-quality nuts, dry fruits, dates, seeds,
                and healthy snack mixes—carefully sourced for taste, purity,
                and nutrition.
            </span>
            <a href="/" class="order-btn">Order Now</a>
        </div>
    </div>
</section>
<?= $this->include('templates/footer') ?>