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
        margin-bottom:10px;
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
    <img src="<?= base_url('uploads/Cancel.png'); ?>">
    <div class="banner-text">
        <h1>Cancellation</h1>
        <a href="<?= base_url('/') ?>">Home</a>
        <span> &gt;&gt; </span>
        <span>Cancellation</span>
    </div>
</div>
<div class="terms-content">
    <p>
        <h1>Cancellation Policy</h1>
        <strong>Brand Name:</strong> CRACK N CRUNCH<br>
        <strong>Business Type:</strong> Online Sale of Dry Fruits (Retail, Bulk & B2B)<br>
        <strong>Applicable Law:</strong> Laws of India<br><br>
        At CRACK N CRUNCH, we understand that sometimes orders may need to be cancelled. This Cancellation Policy explains when and how an order can be cancelled and the<br>
        conditions under which refunds may be issued.<br><br>
        By placing an order on our website, you agree to the terms stated below.
        <h1>1. Customer-Initiated Cancellations</h1>
        1.1 Orders can be cancelled<strong>  within 12 hours of placement or before dispatch,</strong> whichever is earlier.<br><br>
        1.2 Once the order has been dispatched, <strong>cancellation is not permitted,</strong> as our products are food items and subject to hygiene, safety, and regulatory restrictions.<br><br>
        1.3 To request a cancellation, customers must contact us immediately using the contact details provided below, mentioning the <strong>order number and registered contact<br> information.</strong>
        <h1>2. CRACK N CRUNCH-Initiated Cancellations</h1>
        We reserve the right to cancel an order in the following situations:<br><br>
        • Product is out of stock or unavailable<br><br>
        • Errors in pricing, product description, or technical issues<br><br>
        • Payment failure or suspected fraudulent transactions<br><br>
        • Regulatory, compliance, or legal restrictions<br><br>
        • Incomplete or incorrect customer information<br><br>
        In such cases, the customer will be notified and a <strong>full refund</strong> will be processed.
        <h1>3. Refunds for Cancelled Orders</h1>
        3.1 If a cancellation request is approved before dispatch, the refund will be processed within <strong>7–10 business days.</strong><br><br>
        3.2 Refunds will be credited to the <strong>original payment method</strong> used at the time of purchase.<br><br>
        3.3 CRACK N CRUNCH is not responsible for delays caused by banks, payment gateways, or third-party financial institutions.
        <h1>4. Non-Cancellable Orders</h1>
        The following orders cannot be cancelled:<br><br>
        • Orders that have already been dispatched<br><br>
        • Bulk or B2B orders once processing has begun<br><br>
        • Customized, special-pack, or large-volume orders<br><br>
        • International orders after dispatch
        <h1>5. Bulk & B2B Orders</h1>
        5.1 Bulk and B2B orders may require <strong>advance payment</strong> and are processed as per mutually agreed commercial terms.<br><br>
        5.2 Cancellation of such orders is subject to:<br><br>
        • Processing stage<br><br>
        • Procurement commitments<br><br>
        • Packaging and logistics arrangements<br><br>
        5.3 Any applicable deductions or non-refundable amounts will be communicated before order confirmation.
        <h1>6. International Orders</h1>
        • International orders <strong>cannot be cancelled once dispatched.</strong><br><br>
        • Any customs duties, import taxes, or shipping charges incurred are <strong>non-refundable.</strong><br><br>
        • If an international shipment is refused or returned due to customer non-compliance with customs regulations, the customer shall bear all associated costs.
        <h1>7. How to Request Cancellation</h1>
        To request a cancellation, please contact us immediately with your order details:<br><br>
        <strong>Brand:</strong> CRACK N CRUNCH<br>
        <strong>FSSAI License No:</strong> <br>
        <strong>GST Registration No:</strong> <br><br>
        <strong>Address:</strong><br>
        Door No.5, 3, Appu Street,<br>
        Seetha Nagar, Nungambakkam,<br>
        Chennai, Tamil Nadu – 600034<br><br>
        <strong>Phone:</strong> 97518 11222<br>
        <strong>Email:</strong> crackxcrunch@gmail.com
        <h1>8. Policy Updates</h1>
        CRACK N CRUNCH reserves the right to amend or update this Cancellation Policy at any time without prior notice. Any changes will be effective immediately upon publication on the <br>website.
    </p>
</div>
<?= $this->include('templates/footer') ?>