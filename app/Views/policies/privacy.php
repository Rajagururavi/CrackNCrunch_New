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
    <img src="<?= base_url('uploads/PP.png'); ?>">
    <div class="banner-text">
        <h1>Privacy Policy</h1>
        <a href="<?= base_url('/') ?>">Home</a>
        <span> &gt;&gt; </span>
        <span>Privacy Policy</span>
    </div>
</div>
<div class="terms-content">
    <p>
        <h1>Privacy Policy</h1>
        <strong>Brand Name:</strong> CRACK N CRUNCH<br>
        <strong>Business Type:</strong> Online Sale of Dry Fruits (Retail, Bulk & B2B)<br>
        <strong>Applicable Law:</strong> Laws of India<br>
        <strong>Established:</strong> September 2026<br><br>
        CRACK N CRUNCH (“we”, “our”, “us”) respects your privacy and is committed to protecting your personal and business information. This Privacy Policy explains how we collect, use,
        disclose, and safeguard your data when you visit our website or place an order with us.<br><br>
        By accessing or using our website, you consent to the practices described in this policy.
        <h1>1.Information We Collect</h1>
        We may collect the following types of information:
        <h2>1.1 Personal Information</h2><br>
        • Full name<br><br>
        • Billing and shipping address<br><br>
        • Email address<br><br>
        • Phone number<br>
        <h2>1.2 Business Information (for B2B Orders)</h2><br>
        • Company name<br><br>
        • GST number<br><br>
        • Business address and contact details<br>
        <h2>1.3 Technical & Usage Data</h2><br>
        • IP address<br><br>
        • Browser type and device information<br><br>
        • Pages visited, time spent, and website usage data<br>
        <h2>1.4 Payment Information</h2><br>
        • Payments are processed via secure third-party gateways.<br><br>
        • CRACK N CRUNCH does not store credit card, debit card, UPI, or banking details.
        <h1>2. Purpose of Data Collection</h1>
        We collect and use your information for the following purposes:<br><br>
        • Processing and fulfilling orders<br><br>
        • Generating GST invoices and regulatory compliance<br><br>
        • FSSAI traceability and food safety compliance<br><br>
        • Shipping, logistics, and customs documentation (for international orders)<br><br>
        • Customer support, dispute resolution, and fraud prevention<br><br>
        • Internal analysis to improve our products and website performance
        <h1>3. Legal Basis for Processing</h1>
        We process your information based on one or more of the following grounds:<br><br>
        • Your consent<br><br>
        • Performance of a contract (order fulfillment)<br><br>
        • Legal and regulatory obligations (GST, FSSAI, export laws)<br><br>
        • Legitimate business interests such as fraud prevention and service improvement
        <h1>4. Sharing of Information</h1>
        We may share your data only with trusted third parties, including:<br><br>
        • Logistics and courier partners for order delivery<br><br>
        • Payment gateway providers for secure transactions<br><br>
        • Government or regulatory authorities when legally required<br><br>
        • Customs and export agencies for international shipments<br><br>
        • We do not sell, rent, or misuse your personal or business data for marketing or unauthorized purposes.
        <h1>5. Data Security</h1>
        We implement reasonable administrative, technical, and physical security measures to protect your data against unauthorized access, alteration, or disclosure.<br><br>
        However, no online platform is completely secure. By using our website, you acknowledge and accept this inherent risk.
        <h1>6. Cookies & Tracking Technologies</h1>
        Our website may use cookies and similar technologies to:<br><br>
        • Enhance user experience<br><br>
        • Analyze website traffic and performance<br><br>
        • Remember user preferences<br><br>
        You may disable cookies through your browser settings, but doing so may affect website functionality.
        <h1>7. International Data Transfers</h1>
        For international orders, your information may be shared with overseas logistics providers and customs authorities. By placing an international order, you consent to such<br>
        data transfers as required for order fulfillment and legal compliance.
        <h1>8. Data Retention</h1>
        We retain your personal and business information only for as long as necessary to:<br><br>
        • Fulfill orders<br><br>
        • Comply with legal and tax obligations<br><br>
        • Resolve disputes<br><br>
        • Maintain business records<br><br>
        Once no longer required, data is securely deleted or anonymized.
        <h1>9. Your Rights</h1>
        You have the right to:<br><br>
        • Access the personal data we hold about you<br><br>
        • Request correction of inaccurate or incomplete data<br><br>
        • Request deletion of your data, subject to legal and regulatory requirements<br><br>
        • Withdraw consent for marketing communications (if applicable)<br><br>
        To exercise these rights, please contact us using the details below.
        <h1>10. Third-Party Links</h1>
        Our website may contain links to external websites. CRACK N CRUNCH is not responsible for the privacy practices or content of such third-party sites. We encourage you to review<br>
        their policies separately.
        <h1>11. Changes to This Policy</h1>
        CRACK N CRUNCH reserves the right to update or modify this Privacy Policy at any time without prior notice. Any changes will be posted on this page with a revised effective date.<br>
        Continued use of the website constitutes acceptance of the updated policy.
        <h1>12. Contact Information</h1>
        If you have any questions about this Privacy Policy or how your data is handled, you may contact us at:<br><br>
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