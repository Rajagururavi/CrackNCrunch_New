<?= $this->include('templates/header') ?>
<style>
    body{
        margin:0;
        padding:0;
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
    .terms-content{
        margin-left: 80px;
        padding:40px 80px;
        color:#333;
    }
    .terms-content h1{
        font-size:30px;
        margin-bottom:0px;
    }
    .terms-content h2{
        font-size:30px;
        margin-top:25px;
    }
    .terms-content p{
        font-size:14px;
        line-height:1.8;
        color:#555;
    }
    .terms-content h1{
        font-size:30px;
        margin-bottom:20px;
        margin-top:40px;
        position:relative;
        padding-top:20px;
    }
    .terms-content h1::before{
        content:"";
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:1px;
        background:#ddd;
    }
    .terms-content h1:first-of-type::before{
        display:none;
    }
    .terms-content h1:first-of-type{
        margin-top:0;
        padding-top:0;
    }
    .proof-points{
        margin-left:40px;
    }
    @media(max-width:768px){
        .terms-banner{
            height:180px;
            margin-top:90px;
        }
        .terms-content{
            padding:20px;
        }
        .banner-text{
            font-size:13px;
        }
    }
</style>
<div class="terms-banner">
    <img src="<?= base_url('uploads/RR.png'); ?>">
    <div class="banner-text">
        <h1>Refunds & Returns</h1>
        <a href="<?= base_url('/') ?>">Home</a>
        <span> &gt;&gt; </span>
        <span>Refunds & Returns</span>
    </div>
</div>
<div class="terms-content">
    <p>
        <h1>Refunds & Returns</h1>
        <strong>Brand Name:</strong> CRACK N CRUNCH<br>
        <strong>Business Type:</strong> Online Sale of Dry Fruits (Retail, Bulk & B2B)<br>
        <strong>Applicable Law:</strong> Laws of India<br><br>
        At CRACK N CRUNCH, customer satisfaction and product quality are our top priorities. Due to the consumable and perishable nature of dry fruits and food products, we follow a strict and transparent Refunds & Returns Policy.<br><br>
        By placing an order on our website, you agree to the terms outlined below.
        <h1>1. Nature of Products</h1>
        All CRACK N CRUNCH products are food items. As per hygiene, safety, and regulatory standards, returns are limited and accepted only under specific conditions.
        <h1>2. Eligible Cases for Return or Refund</h1>
        We will consider a return, replacement, or refund only in the following situations:<br><br>
        • <strong>Damaged Products:</strong> Items received in a physically damaged condition<br><br>
        • <strong>Incorrect Items:</strong> Products different from what was ordered<br><br>
        • <strong>Expired Products:</strong> Items delivered beyond their expiry date<br>   
        <h2>Conditions:</h2>
        • Requests must be raised within <strong>48 hours of delivery.</strong><br><br>
        • Customers must provide:<br><br>
        <div style="margin-left:40px;">
            <strong>• Unboxing video</strong> (from sealed package to product)<br><br>
            <strong>• Clear images</strong> of the product and outer packaging<br><br>
        </div>
        Requests without proper evidence may not be accepted.
        <h1>3. Non-Eligible Cases (No Refund / No Return)</h1>
        We do <strong>not</strong> accept returns or refunds for:<br><br>
        • Opened, used, or partially consumed products<br><br>
        • Products with damaged packaging due to customer handling<br><br>
        • Dissatisfaction based on taste, texture, color, or natural variation<br><br>
        • Bulk or B2B orders unless a genuine quality issue is verified<br><br>
        • International orders once dispatched<br><br>
        • Delays caused by courier services, customs, or regulatory authorities
        <h1>4. Refund Process</h1>
        4.1 Once your request is received, our quality team will review the provided evidence.<br><br>
        4.2 If approved, the refund will be processed within <strong>7–10 business days.</strong><br><br>
        4.3 Refunds will be credited to the <strong>original payment method</strong> used during purchase.<br><br> 
        4.4 In cases where replacement is applicable, a new shipment may be arranged instead of a refund.
        <h1>5. Order Cancellation</h1>
        <h2>5.1 Customer-Initiated Cancellations</h2>
        • Orders can be cancelled within 12 hours of placement or before dispatch, whichever is earlier.<br><br>
        <h2>5.2 CRACK N CRUNCH-Initiated Cancellations</h2>
        • Stock unavailability<br><br>
        • Pricing or technical errors<br><br>
        • Regulatory or compliance issues<br><br>
        In such cases, a <strong>full refund</strong> will be issued.
        <h1>6. Bulk & B2B Orders</h1>
        6.1 Bulk and B2B orders may require advance payment and are processed as per agreed commercial terms.<br><br>
        6.2 Goods are considered <strong>accepted upon delivery.</strong><br><br>
        6.3 Quality complaints must be reported within <strong>24 hours of delivery</strong> with valid proof.<br><br>
        6.4 Refunds or returns for B2B orders are allowed <strong>only if a genuine quality deviation is confirmed.</strong>
        <h1>7. International Orders</h1>
        • International orders are <strong>non-returnable and non-refundable once dispatched.</strong><br><br>
        • Customers are responsible for customs duties, import taxes, and clearance charges.<br><br>
        • CRACK N CRUNCH is not liable for delays, rejections, or losses caused by customs authorities.
        <h1>8. Contact for Refunds & Returns</h1>
        For refund or return requests, please contact us with your order details and supporting proof:<br><br>
        <strong>Brand:</strong> CRACK N CRUNCH<br>
        <strong>FSSAI License No:</strong> <br>
        <strong>GST Registration No:</strong> <br><br>
        <strong>Address:</strong><br>
        Door No.5, 3, Appu Street,<br>
        Seetha Nagar, Nungambakkam,<br>
        Chennai, Tamil Nadu – 600034<br><br>
        <strong>Phone:</strong> 97518 11222<br>
        <strong>Email:</strong> crackxcrunch@gmail.com
        <h1>9. Policy Updates</h1>
        CRACK N CRUNCH reserves the right to modify or update this Refunds & Returns Policy at any time without 
        prior notice. Changes will be effective immediately upon posting on the<br>website.
    </p>
</div>
<?= $this->include('templates/footer') ?>