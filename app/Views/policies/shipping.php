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
    <img src="<?= base_url('uploads/SP.png'); ?>">
    <div class="banner-text">
        <h1>Shipping Policy</h1>
        <a href="<?= base_url('/') ?>">Home</a>
        <span> &gt;&gt; </span>
        <span>Shipping Policy</span>
    </div>
</div>
<div class="terms-content">
    <p>
        <h1>Shipping Policy</h1>
        <strong>Brand Name:</strong> CRACK N CRUNCH<br>
        <strong>Business Type:</strong> Online Sale of Dry Fruits (Retail, Bulk & B2B)<br>
        <strong>Applicable Law:</strong> Laws of India<br><br>
        At CRACK N CRUNCH, we aim to deliver high-quality dry fruits, nuts, seeds, and related products safely, efficiently, and on time. This Shipping Policy explains how orders are<br>
        processed, shipped, and delivered for both domestic and international customers.
        <h1>1. Shipping Coverage</h1>
        1.1<strong>  Domestic (India):</strong><br>
        We ship to most locations across India.<br><br>
        1.2<strong>  International:</strong><br>
        We ship to selected international destinations, subject to courier availability, customs regulations, and destination country laws.<br><br>
        1.3<strong>  Bulk & B2B Orders:</strong><br>
        Large-volume or B2B shipments may be handled through specialized logistics partners and may follow separate shipping arrangements.
        <h1>2. Order Processing & Dispatch</h1>
        2.1 Orders are usually processed and dispatched within <strong>2–5 business days</strong> after order confirmation and payment verification.<br><br>
        2.2 Bulk or customized B2B orders may require additional processing time, which will be communicated at the time of order.<br><br>
        2.3 Orders are not dispatched on Sundays or public holidays.
        <h1>3. Estimated Delivery Time</h1>
        3.1<strong>  Domestic (India):</strong><br>
        Delivery typically takes <strong>3–7 business days,</strong> depending on the delivery location and courier service.<br><br>
        3.2<strong>  International:</strong><br>
        Delivery generally takes <strong>7–21 business days,</strong> depending on destination country, courier partner, customs clearance, and local regulations.<br><br>
        3.3 Delivery timelines are estimates and may vary due to external factors such as weather conditions, logistics disruptions, or regulatory delays.
        <h1>4. Shipping Charges</h1>
        4.1 Shipping charges are calculated at checkout based on order value, weight, destination, and shipping method.<br><br>
        4.2 For bulk and B2B orders, shipping charges may be quoted separately.<br><br>
        4.3 Any promotional free-shipping offers are subject to specific terms and conditions.
        <h1>5. Customs, Duties & International Orders</h1>
        5.1 For international shipments, customers are solely responsible for:<br><br>
        • Customs duties<br><br>
        • Import taxes<br><br>
        • Clearance fees<br><br>
        • Any other charges levied by the destination country<br><br>
        5.2 CRACK N CRUNCH has no control over customs processing times and is not responsible for delays caused by customs authorities.<br><br>
        5.3 If a shipment is refused or returned due to unpaid duties or regulatory issues, the customer shall bear all associated costs.
        <h1>6. Packaging & Compliance</h1>
        6.1 All products are packed in compliance with FSSAI regulations and applicable food safety standards.<br><br>
        6.2 Export shipments are prepared in accordance with Indian export laws and documentation requirements.<br><br>
        6.3 CRACK N CRUNCH ensures hygienic, secure, and tamper-proof packaging to maintain product quality during transit.
        <h1>7. Tracking & Delivery</h1>
        7.1 Once your order is shipped, you will receive tracking details via email or SMS.<br><br>
        7.2 Customers are responsible for providing accurate and complete delivery information. CRACK N CRUNCH is not liable for delays or failed deliveries due to incorrect or incomplete addresses.<br><br>
        7.3 If delivery attempts fail due to customer unavailability, the courier company’s re-delivery or return policies will apply.
        <h1>8. Damaged, Missing, or Lost Shipments</h1>
         8.1 If your order arrives damaged, incomplete, or incorrect, you must notify us within <strong>48 hours of delivery</strong> with:<br><br>
        • Unboxing video<br><br>
        • Clear images of the product and packaging<br><br>
        8.2 Claims raised after 48 hours may not be accepted.<br><br>
        8.3 In the case of lost shipments confirmed by the courier, CRACK N CRUNCH will investigate and take appropriate action in line with our Refund & Returns Policy.
        <h1>9. Non-Delivery & Delays</h1>
        9.1 CRACK N CRUNCH shall not be responsible for delivery delays caused by:<br><br>
        • Natural disasters or force majeure events<br><br>
        • Courier service disruptions<br><br>
        • Customs or regulatory inspections<br><br>
        • Incorrect address or contact details provided by the customer<br><br>
        9.2 While we strive for timely delivery, shipping timelines are indicative and not guaranteed.
        <h1>10. Bulk & B2B Shipping Terms</h1>
        10.1 Bulk and B2B shipments may require:<br><br>
        • Advance payment<br><br>
        • Separate freight quotations<br><br>
        • Custom logistics arrangements<br><br>
        10.2 Goods supplied for business purposes are deemed delivered and accepted once handed over to the buyer or their appointed logistics provider.<br><br>
        10.3 CRACK N CRUNCH is not responsible for any downstream handling, repackaging, or resale by B2B buyers.
        <h1>11. Changes to Shipping Policy</h1>
        CRACK N CRUNCH reserves the right to modify or update this Shipping Policy at any time without prior notice. Changes will be effective immediately upon posting on the website.
        <h1>12. Contact Information</h1>
        For any shipping-related queries, please contact us:<br><br>
        <strong>Brand:</strong> CRACK N CRUNCH<br>
        <strong>FSSAI License No:</strong> <br>
        <strong>GST Registration No:</strong> <br><br>
        <strong>Address:</strong><br>
        Door No.5, 3, Appu Street,<br>
        Seetha Nagar, Nungambakkam,<br>
        Chennai, Tamil Nadu – 600034<br><br>
        <strong>Phone:</strong> 97518 11222<br>
        <strong>Email:</strong> crackxcrunch@gmail.com
    </p>
</div>
<?= $this->include('templates/footer') ?>