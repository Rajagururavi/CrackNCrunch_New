<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wishlist</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body {
                background: #f4f6f9;
                color: #333;
            }
            .profile-section {
                width: 100%;
                padding: 40px 0;
                margin-top: 100px;
            }
            .profile-container {
                width: 95%;
                max-width: 1400px;
                margin: auto;
                display: flex;
                gap: 30px;
            }
            .profile-sidebar {
                width: 300px;
                background: #fff;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            }
            .profile-top {
                background: linear-gradient(135deg, #000, #333);
                padding: 35px 20px;
                text-align: center;
                color: #fff;
            }
            .profile-avatar {
                width: 110px;
                height: 110px;
                border-radius: 50%;
                background: #fff;
                color: #000;
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 50px;
                margin-bottom: 18px;
                border: 4px solid rgba(255, 255, 255, .2);
            }
            .profile-top h3 {
                font-size: 24px;
                margin-bottom: 8px;
                font-weight: 600;
            }
            .profile-top p {
                font-size: 14px;
                opacity: .9;
                margin-top: 4px;
            }
            .profile-menu {
                padding: 20px;
            }
            .profile-menu a {
                display: flex;
                align-items: center;
                gap: 12px;
                text-decoration: none;
                color: #444;
                padding: 15px 18px;
                margin-bottom: 10px;
                border-radius: 10px;
                transition: .3s;
                font-size: 15px;
                font-weight: 500;
            }
            .profile-menu a i {
                width: 22px;
                text-align: center;
            }
            .profile-menu a:hover {
                background: #000;
                color: #fff;
                transform: translateX(5px);
            }
            .profile-menu a.active {
                background: #000;
                color: #fff;
                font-weight: 600;
            }
            .profile-content {
                flex: 1;
                min-width: 0;
            }
            .profile-card {
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
                padding: 35px;
            }
            .profile-card h2 {
                margin-bottom: 25px;
                font-size: 28px;
                color: #222;
            }
            .wishlist-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }
            .wishlist-item {
                position: relative;
                background: #fff;
                border: 1px solid #eee;
                border-radius: 10px;
                overflow: hidden;
                transition: .3s;
            }
            .wishlist-item:hover {
                box-shadow: 0 8px 20px rgba(0, 0, 0, .10);
                transform: translateY(-3px);
            }
            .wishlist-image {
                width: 100%;
                height: 220px;
                background: #f7f7f7;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
            }
            .wishlist-image img {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }
            .wishlist-no-image {
                font-size: 45px;
                color: #ccc;
            }
            .wishlist-details {
                padding: 15px;
            }
            .wishlist-details h3 {
                font-size: 17px;
                color: #222;
                margin-bottom: 10px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .wishlist-price {
                font-size: 18px;
                font-weight: 600;
                color: #e00000;
                margin-bottom: 15px;
            }
            .wishlist-actions {
                display: flex;
                gap: 8px;
            }
            .view-product-btn {
                flex: 1;
                text-align: center;
                text-decoration: none;
                background: #000;
                color: #fff;
                padding: 10px;
                border-radius: 6px;
                font-size: 13px;
            }
            .remove-wishlist-btn {
                width: 42px;
                border: 1px solid #ddd;
                background: #fff;
                color: #e00000;
                border-radius: 6px;
                cursor: pointer;
                font-size: 16px;
            }
            .remove-wishlist-btn:hover {
                background: #e00000;
                color: #fff;
                border-color: #e00000;
            }
            .empty-wishlist {
                text-align: center;
                padding: 70px 20px;
            }
            .empty-wishlist i {
                font-size: 65px;
                color: #ddd;
                margin-bottom: 20px;
            }
            .empty-wishlist h3 {
                font-size: 22px;
                margin-bottom: 10px;
                color: #333;
            }
            .empty-wishlist p {
                color: #888;
                margin-bottom: 25px;
            }
            .shop-btn {
                display: inline-block;
                background: #000;
                color: #fff;
                text-decoration: none;
                padding: 11px 25px;
                border-radius: 6px;
            }
            @media (max-width: 1000px) {
                .profile-container {
                    flex-direction: column;
                }
                .profile-sidebar {
                    width: 100%;
                }
                .wishlist-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            @media (max-width: 600px) {
                .profile-section {
                    margin-top: 70px;
                }
                .profile-card {
                    padding: 20px;
                }
                .wishlist-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body>
        <?= $this->include('templates/header'); ?>
        <div class="profile-section">
            <div class="profile-container">
                <div class="profile-sidebar">
                    <div class="profile-top">
                        <div class="profile-avatar">
                            <i class="fa fa-user"></i>
                        </div>
                        <h3><?= esc($user['full_name']); ?></h3>
                        <p><?= esc($user['email']); ?></p>
                        <p><?= esc($user['mobile']); ?></p>
                    </div>
                    <?php $uri = service('uri'); ?>
                    <div class="profile-menu">
                        <a href="<?= base_url('my_profile'); ?>" class="<?= ($uri->getSegment(1) == 'my_profile') ? 'active' : ''; ?>"><i class="fa fa-user"></i>My Profile</a>
                        <a href="<?= base_url('my_orders'); ?>" class="<?= ($uri->getSegment(1) == 'my_orders') ? 'active' : ''; ?>"><i class="fa fa-shopping-bag"></i>My Orders</a>
                        <a href="<?= base_url('change_password'); ?>" class="<?= ($uri->getSegment(1) == 'change_password') ? 'active' : ''; ?>"><i class="fa fa-lock"></i>Change Password</a>
                        <a href="<?= base_url('wish_list'); ?>" class="<?= ($uri->getSegment(1) == 'wish_list') ? 'active' : ''; ?>"><i class="fa fa-heart"></i>Wishlist</a>
                        <a href="<?= base_url('logout'); ?>"><i class="fa fa-sign-out"></i>Logout</a>
                    </div>
                </div>
                <div class="profile-content">
                    <div class="profile-card">
                        <h2><i class="fa fa-heart" style="color:red;"></i>Wish List</h2>
                        <?php if (!empty($products)): ?>
                            <div class="wishlist-grid">
                                <?php foreach ($products as $product): ?>
                                    <div class="wishlist-item" id="wishlist-item-<?= $product['id']; ?>">
                                        <div class="wishlist-image">
                                            <?php if (!empty($product['image'])): ?>
                                                <img src="<?= base_url('uploads/products/' . $product['image']); ?>" alt="<?= esc($product['product_name']); ?>">
                                            <?php else: ?>
                                                <i class="fa fa-image wishlist-no-image"></i>
                                            <?php endif; ?>
                                        </div>
                                        <div class="wishlist-details">
                                            <h3><?= esc($product['product_name']); ?></h3>
                                            <?php if (isset($product['price'])): ?>
                                                <div class="wishlist-price">
                                                    ₹<?= number_format($product['price'], 2); ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="wishlist-actions">
                                                <a href="<?= base_url('product/' . $product['id']); ?>" class="view-product-btn"><i class="fa fa-eye"></i>View Product</a>
                                                <button type="button" class="remove-wishlist-btn" onclick="removeWishlist(<?= $product['id']; ?>)" title="Remove from Wishlist"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="empty-wishlist">
                                <i class="fa fa-heart-o"></i>
                                <h3>Your Wishlist is Empty</h3>
                                <p>You haven't added any products to your wishlist yet.</p>
                                <a href="<?= base_url('/'); ?>" class="shop-btn">Continue Shopping</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function removeWishlist(productId) {
                if (!confirm('Do you want to remove this product from your wishlist?')) {
                    return;
                }
                const formData = new FormData();
                formData.append(
                    'product_id',
                    productId
                );
                formData.append(
                    '<?= csrf_token(); ?>',
                    '<?= csrf_hash(); ?>'
                );
                fetch(
                    "<?= base_url('wish_list/remove'); ?>",
                    {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }
                )
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    console.log('Remove wishlist:', data);
                    if (data.status === 'removed' || data.status === 'success') {
                        const item = document.getElementById('wishlist-item-' + productId);
                        if (item) {
                            item.remove();
                        }
                        const items = document.querySelectorAll('.wishlist-item');
                        if (items.length === 0) {
                            location.reload();
                        }
                    }
                    else {
                        alert('Unable to remove product from wishlist.');
                    }
                })
                .catch(function (error) {
                    console.error('Wishlist remove error:', error);
                    alert('Something went wrong. Please try again.');
                });
            }
        </script>
        <?= $this->include('templates/footer'); ?>
    </body>
</html>