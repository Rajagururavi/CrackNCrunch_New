<!DOCTYPE html>
<html>
    <head>
        <title>Insert Products</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <style>
            .container {
                margin-top: 50px;
                width: 900px;
                height: auto;
                display: flex;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 40px rgba(0,0,0,0.3);
                background: #fff;
                margin-bottom: 20px;
            }
            .left-panel {
                width: 45%;
                background: linear-gradient(135deg, #667eea, #764ba2);
                color: #fff;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 40px;
                text-align: center;
            }
            .left-panel h1 {
                font-size: 28px;
                margin-bottom: 15px;
            }
            .left-panel p {
                font-size: 14px;
                opacity: 0.9;
                line-height: 1.6;
            }
            .left-panel i {
                font-size: 60px;
                margin-bottom: 20px;
                opacity: 0.9;
            }
            .right-panel {
                width: 55%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px;
            }
            .form-box {
                width: 100%;
                max-width: 320px;
            }
            .form-box h2 {
                text-align: center;
                margin-bottom: 30px;
                color: #333;
            }
            .input-group {
                position: relative;
                margin-bottom: 25px;
            }
            .input-group input {
                width: 100%;
                padding: 12px 40px 12px 12px;
                border: 2px solid #eee;
                border-radius: 10px;
                outline: none;
                transition: 0.3s;
                font-size: 14px;
            }
            .input-group input:focus {
                border-color: #667eea;
                box-shadow: 0 0 8px rgba(102,126,234,0.3);
            }
            .input-group label {
                position: absolute;
                top: 50%;
                left: 12px;
                transform: translateY(-50%);
                font-size: 13px;
                color: #777;
                pointer-events: none;
                transition: 0.3s;
                background: #fff;
                padding: 0 5px;
            }
            .input-group input:focus + label, .input-group input:valid + label {
                top: -8px;
                font-size: 11px;
                color: #667eea;
            }
            .input-group i {
                position: absolute;
                right: 12px;
                top: 50%;
                transform: translateY(-50%);
                color: #aaa;
            }
            .btn {
                width: 100%;
                padding: 12px;
                border: none;
                border-radius: 10px;
                background: linear-gradient(135deg, #ff6a00, #ee0979);
                color: #fff;
                font-size: 15px;
                cursor: pointer;
                transition: 0.3s;
            }
            .btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            }
            .input-group select {
                width: 100%;
                padding: 12px 40px 12px 12px;
                border: 2px solid #eee;
                border-radius: 10px;
                outline: none;
                font-size: 14px;
                background: #fff;
                appearance: none;
            }
            .input-group i {
                position: absolute;
                right: 12px;
                top: 50%;
                transform: translateY(-50%);
                color: #aaa;
                pointer-events: none;
            }
            .input-group label {
                pointer-events: none;
            }
            .input-group select:focus + label, .input-group select:not([value=""]) + label {
                top: -8px;
                font-size: 11px;
                color: #667eea;
            }
        </style>
    </head>
    <body>
        <?= view('admin/templates/header') ?>
        <div class="container">
            <div class="left-panel">
                <i class="fa-solid fa-layer-group"></i>
                <h1>Products Manager</h1>
                <p>
                    Easily organize your products by adding categories.
                    Keep everything structured and clean for better management.
                </p>
            </div>
            <div class="right-panel">
                <div class="form-box">
                    <h2>Add Products</h2>
                    <?php if(session()->getFlashdata('success')): ?>
                        <p style="color:green; text-align:center;">
                            <?= session()->getFlashdata('success') ?>
                        </p>
                    <?php endif; ?>
                    <form action="<?= base_url('admin/test/store') ?>" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="text" name="product_title" required>
                            <label>Products Title</label>
                            <i class="fa-solid fa-tag"></i>
                        </div>
                        <div class="input-group">
                            <input type="text" name="product_description" required>
                            <label>Products Description</label>
                            <i class="fa-solid fa-align-left"></i>
                        </div>
                        <div class="input-group">
                            <input type="text" name="product_keyword" required>
                            <label>Products Keyword</label>
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="input-group">
                            <select name="category" required>
                                <option value="">Select Category</option>
                                <?php if(!empty($categories)): ?>
                                    <?php foreach($categories as $c): ?>
                                        <option value="<?= $c->id ?>">
                                            <?= $c->cat_title ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <option>No Category found</option>
                                <?php endif; ?>
                            </select>
                            <label>Select Category</label>
                            <i class="fa-solid fa-list"></i>
                        </div>
                        <div class="input-group">
                            <select name="brands" required>
                                <option value="">Select Brands</option>
                                <?php if(!empty($brands)): ?>
                                    <?php foreach($brands as $b): ?>
                                        <option value="<?= $b->id ?>">
                                            <?= $b->brand_title ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <option>No Brand found</option>
                                <?php endif; ?>
                            </select>
                            <label>Select Brands</label>
                            <i class="fa-solid fa-store"></i>
                        </div>
                        <div class="input-group">
                            <input type="file" name="product_image1" accept="image/*" required>
                            <label>Main Product Image</label>
                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="input-group">
                            <input type="file" name="product_image2" accept="image/*" required>
                            <label>Main Product Image</label>
                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="input-group">
                            <input type="file" name="product_image3" accept="image/*" required>
                            <label>Main Product Image</label>
                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="input-group">
                            <input type="text" name="product_price" required>
                            <label>Last Price</label>
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                        </div>
                        <button class="btn">Insert Products</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>