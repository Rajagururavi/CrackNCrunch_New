<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CrackNCrunch Admin Panel</title>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            :root {
                --primary: #6366f1;
                --primary-gradient: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
                --bg-body: #f8fafc;
                --text-main: #0f172a;
                --text-muted: #64748b;
            }
            body {
                margin: 0;
                font-family: 'Plus Jakarta Sans', sans-serif;
                background: var(--bg-body);
                color: var(--text-main);
            }
            .topbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background: #ffffff;
                padding: 14px 28px;
                border-bottom: 1px solid #e2e8f0;
                box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            }
            .logo {
                font-weight: 800;
                font-size: 20px;
                letter-spacing: -0.5px;
                background: linear-gradient(135deg, #f59e0b, #ef4444);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .search {
                width: 360px;
                padding: 8px 16px;
                border: 1px solid #e2e8f0;
                border-radius: 20px;
                background: #f1f5f9;
                font-size: 14px;
                transition: all 0.2s ease;
            }
            .search:focus {
                outline: none;
                background: #ffffff;
                border-color: #6366f1;
                box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
            }
            .top-right {
                display: flex;
                align-items: center;
                gap: 20px;
            }
            .icon-btn {
                width: 38px;
                height: 38px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #f1f5f9;
                color: #64748b;
                cursor: pointer;
                transition: all 0.2s;
            }
            .icon-btn:hover {
                background: #e2e8f0;
                color: #0f172a;
            }
            .user {
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 4px 12px 4px 6px;
                border-radius: 20px;
                background: #f8fafc;
                border: 1px solid #e2e8f0;
            }
            .user img {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                object-fit: cover;
            }
            .user span {
                font-size: 13px;
                font-weight: 600;
                color: #334155;
            }
            .menu {
                display: flex;
                align-items: center;
                gap: 8px;
                background: #ffffff;
                padding: 10px 28px;
                border-bottom: 1px solid #e2e8f0;
                overflow-x: auto;
            }
            .menu a {
                display: flex;
                align-items: center;
                gap: 8px;
                text-decoration: none;
                color: #64748b;
                font-size: 13.5px;
                font-weight: 500;
                padding: 8px 14px;
                border-radius: 8px;
                transition: all 0.2s ease;
                white-space: nowrap;
            }
            .menu a:hover {
                color: #6366f1;
                background: #f1f5f9;
            }
            .menu a.active {
                color: #ffffff;
                background: var(--primary-gradient);
                font-weight: 600;
                box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
            }
            .menu a.active .menu-icon {
                fill: #ffffff;
            }
            .menu-icon {
                width: 16px;
                height: 16px;
                fill: #64748b;
                transition: fill 0.2s;
            }
        </style>
    </head>
    <body>
        <div class="topbar">
            <div class="logo">
                CRACK N CRUNCH
            </div>
            <input type="text" placeholder="Search Now..." class="search">
            <div class="top-right">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="2">
                    <path d="M18 8a6 6 0 10-12 0c0 7-3 7-3 7h18s-3 0-3-7"/>
                    <path d="M13.73 21a2 2 0 01-3.46 0"/>
                </svg>
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="2">
                    <path d="M21 15a4 4 0 01-4 4H7l-4 4V5a4 4 0 014-4h10a4 4 0 014 4z"/>
                </svg>
                <div class="user">
                    <img src="https://i.pravatar.cc/40">
                    <span>CRACK N CRUNCH</span>
                </div>
            </div>
        </div>
        <div class="menu">
            <a href="<?= base_url('admin/dashboard') ?>" class="<?= (uri_string() == 'admin/dashboard') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                </svg>
                Dashboard
            </a>
            <a href="<?= base_url('products/test_view') ?>" class="<?= (uri_string() == 'products/test_view') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4zM8 8h8M8 12h5"/>
                </svg>
                Insert Products
            </a>
            <a href="<?= base_url('products/view_products') ?>" class="<?= (uri_string() == 'products/view_products') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M3 5h18v14H3zM3 10h18"/>
                </svg>
                View Products
            </a>
            <a href="<?= base_url('products/insert_categories') ?>" class="<?= (uri_string() == 'products/insert_categories') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M12 2l4 4h-3v6h-2V6H8l4-4z"/>
                </svg>
                Insert Categories
            </a>
            <a href="#" class="<?= (uri_string() == 'products/view_categories') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 0h6v6h-6z"/>
                </svg>
                View Categories
            </a>
            <a href="<?= base_url('products/insert_brands') ?>" class="<?= (uri_string() == 'products/insert_brands') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M20 7L12 3 4 7l8 4 8-4zM4 11l8 4 8-4M4 15l8 4 8-4"/>
                </svg>
                Insert Brands
            </a>
            <a href="<?= base_url('products/view_brands') ?>" class="<?= (uri_string() == 'products/view_brands') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M3 3h18v6H3zM3 11h18v10H3z"/>
                </svg>
                View Brands
            </a>
            <a href="<?= base_url('order/order_list') ?>" class="<?= (uri_string() == 'order/order_list') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M6 2h12v4H6zM4 6h16v14H4z"/>
                </svg>
                All Orders
            </a>
            <a href="#" class="<?= (uri_string() == 'users/list_users') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V20h14v-3.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05C17.16 13.9 19 15.03 19 16.5V20h5v-3.5c0-2.33-4.67-3.5-8-3.5z"/>
                </svg>
                List Users
            </a>
            <a href="#" class="<?= (uri_string() == 'admin/logout') ? 'active' : '' ?>">
                <svg class="menu-icon" viewBox="0 0 24 24">
                    <path d="M16 17l5-5-5-5v3H9v4h7v3zM4 19h8v2H4z"/>
                </svg>
                Logout
            </a>
        </div>
        <script>
            document.querySelectorAll(".menu a").forEach(link => {
                link.addEventListener("click", function () {
                    document.querySelectorAll(".menu a").forEach(a => {
                        a.classList.remove("active");
                    });
                    this.classList.add("active");
                });
            });
        </script>
    </body>
</html>