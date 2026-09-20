<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>Admin Panel</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: #f4f6f9;
            }
            .topbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background: #fff;
                padding: 10px 20px;
                border-bottom: 1px solid #ddd;
            }
            .logo {
                font-weight: bold;
                font-size: 18px;
            }
            .search {
                width: 40%;
                padding: 6px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .top-right {
                display: flex;
                align-items: center;
                gap: 20px;
            }
            .icon {
                width: 20px;
                height: 20px;
                cursor: pointer;
            }
            .user {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            .user img {
                width: 35px;
                height: 35px;
                border-radius: 50%;
            }
            .menu {
                display: flex;
                gap: 25px;
                background: #fff;
                padding: 12px 20px;
                border-bottom: 1px solid #ddd;
            }
            .menu a {
                display: flex;
                align-items: center;
                gap: 6px;
                text-decoration: none;
                color: #555;
                font-size: 14px;
            }
            .menu a.active {
                color: #007bff;
                font-weight: bold;
                border-bottom: 2px solid #007bff;
                padding-bottom: 4px;
            }
            .menu-icon {
                width: 16px;
                height: 16px;
                fill: #777;
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