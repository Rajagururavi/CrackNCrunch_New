<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
    }
    body{
        background:#f4f6f9;
    }
    .container{
        width:100%;
        padding:25px;
    }
    .container h2{
        color:#333;
        margin-bottom:25px;
        font-size:28px;
        font-weight:600;
    }
    .stats{
        display:grid;
        grid-template-columns:repeat(5,1fr);
        gap:20px;
        margin-bottom:30px;
    }
    .card{
        background:#fff;
        border-radius:12px;
        padding:25px;
        cursor:pointer;
        transition:.3s;
        box-shadow:0 3px 10px rgba(0,0,0,.08);
    }
    .card:hover{
        transform:translateY(-5px);
        box-shadow:0 10px 25px rgba(0,0,0,.15);
    }
    .card h4{
        color:#777;
        font-size:16px;
        margin-bottom:12px;
    }
    .card h2{
        color:#222;
        font-size:32px;
    }
    .card span{
        color:#18a058;
        font-size:14px;
    }
    .analytics{
        display:grid;
        grid-template-columns:2fr 1fr;
        gap:20px;
        margin-bottom:30px;
    }
    .chart-box,.payment-box{
        background:#fff;
        border-radius:12px;
        padding:20px;
        box-shadow:0 3px 10px rgba(0,0,0,.08);
    }
    .chart-box h3,.payment-box h3{
        margin-bottom:20px;
        color:#333;
    }
    .payment-total{
        font-size:40px;
        font-weight:bold;
        color:#28a745;
        margin-top:20px;
    }
    .payment-box p{
        color:#777;
        margin-top:8px;
    }
    .pie-chart{
        width:300px;
        height:300px;
        margin:20px auto;
    }
    .pie-chart canvas{
        width:100% !important;
        height:100% !important;
    }
    .table-box{
        background:#fff;
        border-radius:12px;
        padding:20px;
        box-shadow:0 3px 10px rgba(0,0,0,.08);
    }
    .table-box h3{
        margin-bottom:20px;
    }
    table{
        width:100%;
        border-collapse:collapse;
    }
    table thead{
        background:#2c3e50;
        color:#fff;
    }
    table th{
        padding:15px;
        text-align:left;
    }
    table td{
        padding:15px;
        border-bottom:1px solid #eee;
    }
    table tbody tr:hover{
        background:#f8f9fa;
    }
    .pending{
        color:#ff9800;
        font-weight:bold;
    }
    .shipping{
        color:#2196f3;
        font-weight:bold;
    }
    .delivered{
        color:#28a745;
        font-weight:bold;
    }
    .table-responsive{
        overflow-x:auto;
    } 
    @media(max-width:1200px){
        .stats{
            grid-template-columns:repeat(3,1fr);
        }
        .analytics{
            grid-template-columns:1fr;
        }
    }
    @media(max-width:768px){
        .stats{
            grid-template-columns:repeat(2,1fr);
        }
        .container{
            padding:15px;
        }
        .card h2{
            font-size:24px;
        }
        .payment-total{
            font-size:30px;
        }
    }
    @media(max-width:480px){
        .stats{
            grid-template-columns:1fr;
        }
        .card{
            padding:20px;
        }
        .chart-box,.payment-box,.table-box{
            padding:15px;
        }
        .container h2{
            font-size:22px;
        }
        table th,table td{
            padding:10px;
            font-size:13px;
        }
    }
</style>
<?= view('admin/templates/header') ?>
<div class="container">
    <h2>Welcome Back, Admin 👋</h2>
    <div class="stats">
        <div class="card" onclick="showTable('Processing')">
            <h4>Processing Orders</h4>
            <h2><?= $count['processing'] ?? 0; ?></h2>
            <span>View Details</span>
        </div>
        <div class="card" onclick="showTable('Pending')">
            <h4>Pending Orders</h4>
            <h2><?= $count['pending'] ?? 0; ?></h2>
            <span>View Details</span>
        </div>
        <div class="card" onclick="showTable('Shipping')">
            <h4>Shipping Orders</h4>
            <h2><?= $count['shipping'] ?? 0; ?></h2>
            <span>View Details</span>
        </div>
        <div class="card" onclick="showTable('Delivered')">
            <h4>Delivered Orders</h4>
            <h2><?= $count['delivered'] ?? 0; ?></h2>
            <span>View Details</span>
        </div>
        <div class="card" onclick="showTable('Cancelled')">
            <h4>Cancelled Orders</h4>
            <h2><?= $count['cancelled'] ?? 0; ?></h2>
            <span>View Details</span>
        </div>
    </div>
    <div class="analytics">
        <div class="chart-box">
            <h3>Order Status</h3>
            <div class="pie-chart">
                <canvas id="orderChart"></canvas>
            </div>
        </div>
        <div class="payment-box">
            <h3>Payment Summary</h3>
            <div class="payment-total">₹ <?= number_format($count['revenue'] ?? 0, 2); ?></div>
            <p>Total Revenue (Current Year)</p>
            <hr style="margin:20px 0;">
            <p>Processing : <b><?= $count['processing'] ?? 0; ?></b></p>
            <p>Pending : <b><?= $count['pending'] ?? 0; ?></b></p>
            <p>Shipping : <b><?= $count['shipping'] ?? 0; ?></b></p>
            <p>Delivered : <b><?= $count['delivered'] ?? 0; ?></b></p>
            <p>Cancelled : <b><?= $count['cancelled'] ?? 0; ?></b></p>
            <p>Total Orders : <b><?= $count['total_orders'] ?? 0; ?></b></p>
        </div>
    </div>
    <div class="table-box">
        <h3 id="tableTitle">Pending Orders</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Order No</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const processing = <?= $count['processing'] ?? 0; ?>;
    const pending = <?= $count['pending'] ?? 0; ?>;
    const shipping = <?= $count['shipping'] ?? 0; ?>;
    const delivered = <?= $count['delivered'] ?? 0; ?>;
    const cancelled = <?= $count['cancelled'] ?? 0; ?>;
    const ctx = document.getElementById("orderChart");
    new Chart(ctx, {
        type: "pie",
        data: {
            labels: [
                "processing",
                "Pending",
                "Shipping",
                "Delivered",
                "Cancelled"
            ],
            datasets: [{
                data: [
                    processing,
                    pending,
                    shipping,
                    delivered,
                    cancelled
                ],
                backgroundColor: [
                    "#f39c12",
                    "#3498db",
                    "#9b59b6",
                    "#2ecc71",
                    "#e74c3c"
                ],
                borderColor: [
                    "#ffffff",
                    "#ffffff",
                    "#ffffff",
                    "#ffffff",
                    "#ffffff"
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "bottom"
                }
            }
        }
    });
    function showTable(type){
        document.getElementById("tableTitle").innerHTML = type + " Orders";
        fetch("<?= base_url('admin/orders/status') ?>/" + type)
        .then(response => response.json())
        .then(data => {
            let html = "";
            if (data.length > 0) {
                data.forEach(function(row){
                    html += `
                        <tr>
                            <td>${row.order_number}</td>
                            <td>${row.full_name}</td>
                            <td>₹${row.subtotal}</td>
                            <td>${row.order_status}</td>
                            <td>${row.created_at}</td>
                        </tr>
                    `;
                });
            } else {
                html = `
                    <tr>
                        <td colspan="5" style="text-align:center;">
                            No Orders Found
                        </td>
                    </tr>
                `;
            }
            document.getElementById("tableBody").innerHTML = html;
        });
    }
    window.onload = function(){
        showTable("Pending");
    };
</script>