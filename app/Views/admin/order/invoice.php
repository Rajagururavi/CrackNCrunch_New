<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial,sans-serif;
    }
    body{
        background:#f5f5f5;
        padding:30px;
    }
    .invoice{
        width:900px;
        margin:auto;
        background:#fff;
        padding:35px;
        border:1px solid #ddd;
    }
    .invoice-top{
        display:flex;
        justify-content:space-between;
        border-bottom:3px solid #2563eb;
        padding-bottom:20px;
        margin-bottom:25px;
    }
    .company h1{
        color:#2563eb;
        margin-bottom:10px;
    }
    .invoice-title{
        text-align:right;
    }
    .invoice-title h1{
        color:#2563eb;
        margin-bottom:10px;
    }
    .address-section{
        display:flex;
        justify-content:space-between;
        margin-bottom:30px;
    }
    .address-box{
        width:48%;
        border:1px solid #ddd;
        padding:15px;
        border-radius:6px;
    }
    .address-box h3{
        color:#2563eb;
        margin-bottom:10px;
    }
    table{
        width:100%;
        border-collapse:collapse;
    }
    thead{
        background:#2563eb;
        color:#fff;
    }
    th{
        padding:12px;
    }
    td{
        padding:12px;
        border:1px solid #ddd;
    }
    .summary{
        width:350px;
        margin-left:auto;
        margin-top:30px;
    }
    .summary td{
        padding:10px;
    }
    .grand{
        background:#2563eb;
        color:#fff;
        font-weight:bold;
    }
    .payment{
        display:flex;
        justify-content:space-between;
        margin-top:50px;
    }
    .payment-success{
        color:#16a34a;
        font-weight:600;
        font-size:16px;
    }
    .payment-success i{
        margin-right:6px;
        font-size:18px;
    }
    @media print{
        body{
            background:#fff;
            padding:0;
        }
        .invoice{
            width:100%;
            border:none;
            margin:0;
            box-shadow:none;
        }
    }
</style>
<div class="invoice">
    <div class="invoice-top">
        <div class="company">
            <h1>CRACK N CRUNCH</h1>
            <p><b>Phone :</b> +91 97518 11222</p>
            <p><b>Email :</b> crackxcrunch@gmail.com</p>
            <p><b>GST   :</b> </p>
        </div>
        <div class="invoice-title">
            <h1>TAX INVOICE</h1>
            <p><b>Date :</b> <?= date('d-m-Y',strtotime($order['created_at'])); ?></p>
            <p><b>Invoice # :</b> INV<?= $order['id']; ?></p>
            <p><b>Order # :</b> <?= $order['order_number']; ?></p>
            <p><b>FSSAI :</b> </p>
        </div>
    </div>
    <div class="address-section">
        <div class="address-box">
            <h3>Bill To</h3>
            <p><b><?= $user['full_name']; ?></b></p>
            <p><?= $user['mobile']; ?></p>
            <p><?= $user['email']; ?></p>
            <p><?= $user['address']; ?></p>
            <p><?= $user['city']; ?> - <?= $user['pincode']; ?></p>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Weight</th>
                <th>Qty</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $order['product_name']; ?></td>
                <td><?= $order['weight']; ?></td>
                <td><?= $order['quantity']; ?></td>
                <td>₹<?= number_format($order['subtotal'],2); ?></td>
            </tr>
        </tbody>
    </table>
    <div class="summary">
        <table>
            <tr class="grand">
                <td>Grand Total</td>
                <td>₹<?= number_format($order['subtotal'],2); ?></td>
            </tr>
        </table>
    </div>
    <div class="payment">
        <div>
            <h3>Payment Details</h3>
            <p><b>Payment Method :</b> <?= $order['payment_method']; ?></p>
            <p><b>Transaction ID :</b> TXN000000</p>
            <p><b>Status :</b>
                <span class="payment-success">Transaction Successful <i class="fa-solid fa-circle-check"></i></span>
            </p>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        window.print();
        window.onafterprint = function () {
            window.close();
        };
    };
</script>