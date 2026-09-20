<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container-dashboard {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 28px;
    }
    .page-title {
        color: #0f172a;
        margin-bottom: 24px;
        font-size: 24px;
        font-weight: 700;
        letter-spacing: -0.5px;
    }
    .stats {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 18px;
        margin-bottom: 28px;
    }
    .card-stat {
        background: #ffffff;
        border-radius: 16px;
        padding: 22px;
        cursor: pointer;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        position: relative;
        overflow: hidden;
    }
    .card-stat::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: #cbd5e1;
    }
    .card-stat.processing::before { background: #f59e0b; }
    .card-stat.pending::before { background: #3b82f6; }
    .card-stat.shipping::before { background: #8b5cf6; }
    .card-stat.delivered::before { background: #10b981; }
    .card-stat.cancelled::before { background: #ef4444; }

    .card-stat:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.06);
        border-color: #cbd5e1;
    }
    .card-stat h4 {
        color: #64748b;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .card-stat h2 {
        color: #0f172a;
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 6px;
    }
    .card-stat span {
        color: #6366f1;
        font-size: 12.5px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }
    .analytics {
        display: grid;
        grid-template-columns: 1.6fr 1fr;
        gap: 20px;
        margin-bottom: 28px;
    }
    .chart-box, .payment-box {
        background: #ffffff;
        border-radius: 16px;
        padding: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.03);
    }
    .chart-box h3, .payment-box h3 {
        margin-bottom: 20px;
        color: #0f172a;
        font-size: 17px;
        font-weight: 700;
    }
    .payment-total {
        font-size: 34px;
        font-weight: 800;
        color: #10b981;
        margin-top: 12px;
        letter-spacing: -0.5px;
    }
    .payment-box p {
        color: #64748b;
        font-size: 13.5px;
        margin-top: 4px;
    }
    .summary-list {
        margin-top: 16px;
    }
    .summary-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px dashed #f1f5f9;
        font-size: 14px;
        color: #475569;
    }
    .summary-item:last-child {
        border-bottom: none;
        font-weight: 700;
        color: #0f172a;
    }
    .pie-chart {
        width: 260px;
        height: 260px;
        margin: 10px auto;
    }
    .pie-chart canvas {
        width: 100% !important;
        height: 100% !important;
    }
    .table-box {
        background: #ffffff;
        border-radius: 16px;
        padding: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.03);
    }
    .table-box h3 {
        margin-bottom: 20px;
        color: #0f172a;
        font-size: 17px;
        font-weight: 700;
    }
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    table thead {
        background: #f8fafc;
    }
    table th {
        padding: 12px 16px;
        text-align: left;
        color: #475569;
        font-size: 13px;
        font-weight: 600;
        border-bottom: 1px solid #e2e8f0;
    }
    table td {
        padding: 14px 16px;
        border-bottom: 1px solid #f1f5f9;
        font-size: 13.5px;
        color: #334155;
    }
    table tbody tr:hover {
        background: #f8fafc;
    }
    .status-badge {
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
    }
    .status-badge.Processing { background: #fef3c7; color: #b45309; }
    .status-badge.Pending { background: #dbeafe; color: #1d4ed8; }
    .status-badge.Shipping { background: #f3e8ff; color: #6b21a8; }
    .status-badge.Delivered { background: #d1fae5; color: #047857; }
    .status-badge.Cancelled { background: #fee2e2; color: #b91c1c; }

    @media(max-width: 1200px) {
        .stats { grid-template-columns: repeat(3, 1fr); }
        .analytics { grid-template-columns: 1fr; }
    }
    @media(max-width: 768px) {
        .stats { grid-template-columns: repeat(2, 1fr); }
        .container-dashboard { padding: 16px; }
    }
    @media(max-width: 480px) {
        .stats { grid-template-columns: 1fr; }
    }
</style>
<?= view('admin/templates/header') ?>
<div class="container-dashboard">
    <h2 class="page-title">Welcome Back, Admin 👋</h2>
    <div class="stats">
        <div class="card-stat processing" onclick="showTable('Processing')">
            <h4>Processing Orders</h4>
            <h2><?= $count['processing'] ?? 0; ?></h2>
            <span>View Details <i class="fa-solid fa-arrow-right-long ms-1"></i></span>
        </div>
        <div class="card-stat pending" onclick="showTable('Pending')">
            <h4>Pending Orders</h4>
            <h2><?= $count['pending'] ?? 0; ?></h2>
            <span>View Details <i class="fa-solid fa-arrow-right-long ms-1"></i></span>
        </div>
        <div class="card-stat shipping" onclick="showTable('Shipping')">
            <h4>Shipping Orders</h4>
            <h2><?= $count['shipping'] ?? 0; ?></h2>
            <span>View Details <i class="fa-solid fa-arrow-right-long ms-1"></i></span>
        </div>
        <div class="card-stat delivered" onclick="showTable('Delivered')">
            <h4>Delivered Orders</h4>
            <h2><?= $count['delivered'] ?? 0; ?></h2>
            <span>View Details <i class="fa-solid fa-arrow-right-long ms-1"></i></span>
        </div>
        <div class="card-stat cancelled" onclick="showTable('Cancelled')">
            <h4>Cancelled Orders</h4>
            <h2><?= $count['cancelled'] ?? 0; ?></h2>
            <span>View Details <i class="fa-solid fa-arrow-right-long ms-1"></i></span>
        </div>
    </div>
    <div class="analytics">
        <div class="chart-box">
            <h3>Order Breakdown</h3>
            <div class="pie-chart">
                <canvas id="orderChart"></canvas>
            </div>
        </div>
        <div class="payment-box">
            <h3>Revenue Overview</h3>
            <div class="payment-total">₹ <?= number_format($count['revenue'] ?? 0, 2); ?></div>
            <p>Total Revenue Collected</p>
            <div class="summary-list">
                <div class="summary-item"><span>Processing</span> <b><?= $count['processing'] ?? 0; ?></b></div>
                <div class="summary-item"><span>Pending</span> <b><?= $count['pending'] ?? 0; ?></b></div>
                <div class="summary-item"><span>Shipping</span> <b><?= $count['shipping'] ?? 0; ?></b></div>
                <div class="summary-item"><span>Delivered</span> <b><?= $count['delivered'] ?? 0; ?></b></div>
                <div class="summary-item"><span>Cancelled</span> <b><?= $count['cancelled'] ?? 0; ?></b></div>
                <div class="summary-item"><span>Total Orders</span> <b><?= $count['total_orders'] ?? 0; ?></b></div>
            </div>
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
        type: "doughnut",
        data: {
            labels: [
                "Processing",
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
                    "#f59e0b",
                    "#3b82f6",
                    "#8b5cf6",
                    "#10b981",
                    "#ef4444"
                ],
                borderWidth: 0
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
                            <td><strong>#${row.order_number}</strong></td>
                            <td>${row.full_name}</td>
                            <td>₹${row.subtotal}</td>
                            <td><span class="status-badge ${row.order_status}">${row.order_status}</span></td>
                            <td>${row.created_at}</td>
                        </tr>
                    `;
                });
            } else {
                html = `
                    <tr>
                        <td colspan="5" style="text-align:center; padding: 24px; color: #94a3b8;">
                            No ${type} Orders Found
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