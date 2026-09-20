<!DOCTYPE html>
<html>
    <head>
        <title>Insert Products</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <style>
            .container {
                width: 95%;
                margin: 30px auto;
            }
            .page-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }
            .page-header h2 {
                font-size: 26px;
                color: #333;
            }
            .add-btn {
                background: #28a745;
                color: #fff;
                padding: 10px 18px;
                text-decoration: none;
                border-radius: 6px;
                font-size: 14px;
                transition: .3s;
            }
            .add-btn:hover {
                background: #218838;
            }
            .add-btn i {
                margin-right: 5px;
            }
            .table-box {
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, .08);
            }
            .product-table {
                width: 100%;
                border-collapse: collapse;
            }
            .product-table thead {
                background: #222;
                color: #fff;
            }
            .product-table th,.product-table td {
                padding: 14px;
                text-align: center;
                border-bottom: 1px solid #eee;
            }
            .product-table tbody tr:hover {
                background: #f8f8f8;
            }
            .product-img {
                width: 60px;
                height: 60px;
                object-fit: cover;
                border-radius: 8px;
            }
            .view-btn,.delete-btn {
                width: 38px;
                height: 38px;
                border: none;
                border-radius: 50%;
                cursor: pointer;
                color: #fff;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                margin: 0 4px;
                transition: .3s;
            }
            .view-btn {
                background: #007bff;
            }
            .view-btn:hover {
                background: #0056b3;
            }
            .delete-btn {
                background: #dc3545;
            }
            .delete-btn:hover {
                background: #b52a37;
            }
            .modal{
                display:none;
                position:fixed;
                left:0;
                top:0;
                width:100%;
                height:100%;
                background:rgba(0,0,0,.65);
                justify-content:center;
                align-items:center;
                z-index:9999;
                overflow:auto;
            }
            .modal-content{
                width:700px;
                max-width:95%;
                max-height:90vh;
                overflow-y:auto;
                background:#fff;
                border-radius:12px;
                padding:25px;
                position:relative;
                box-shadow:0 10px 30px rgba(0,0,0,.3);
                animation:popup .3s ease;
            }
            @keyframes popup{
                from{
                    transform:translateY(-30px);
                    opacity:0;
                }
                to{
                    transform:translateY(0);
                    opacity:1;
                }
            }
            .modal-content h3{
                margin:0 0 20px;
                text-align:center;
                color:#333;
                font-size:24px;
            }
            .close{
                position:absolute;
                top:15px;
                right:20px;
                font-size:30px;
                cursor:pointer;
                color:#666;
            }

            .close:hover{
                color:red;
            }
            #updateForm{
                display:flex;
                flex-direction:column;
                gap:18px;
            }
            .form-group{
                display:flex;
                flex-direction:column;
            }
            .form-group label{
                font-weight:600;
                margin-bottom:8px;
                color:#333;
            }
            .form-group input[type="text"],.form-group input[type="number"],.form-group textarea,.form-group select{
                width:100%;
                padding:12px;
                border:1px solid #ccc;
                border-radius:6px;
                font-size:15px;
                outline:none;
                transition:.3s;
                box-sizing:border-box;
            }
            .form-group input:focus,.form-group textarea:focus,.form-group select:focus{
                border-color:#007bff;
                box-shadow:0 0 5px rgba(0,123,255,.25);
            }
            .form-group textarea{
                min-height:120px;
                resize:vertical;
            }
            .form-group input[type="file"]{
                padding:8px 0;
            }
            #preview1,#preview2,#preview3{
                width:120px;
                height:120px;
                object-fit:cover;
                border:2px solid #ddd;
                border-radius:8px;
                margin-bottom:10px;
                background:#f5f5f5;
            }
            .update-btn{
                width:100%;
                padding:14px;
                background:#28a745;
                color:#fff;
                border:none;
                border-radius:6px;
                font-size:16px;
                font-weight:600;
                cursor:pointer;
                transition:.3s;
            }
            .update-btn:hover{
                background:#218838;
            }
            @media(max-width:768px){
                .modal-content{
                    width:95%;
                    padding:20px;
                }
                .modal-content h3{
                    font-size:20px;
                }
                #preview1,#preview2,#preview3{
                    width:90px;
                    height:90px;
                }
            }
            @keyframes popup {
                from {
                    transform: scale(.8);
                    opacity: 0;
                }
                to {
                    transform: scale(1);
                    opacity: 1;
                }
            }
            .modal-content h3 {
                margin: 0 0 20px;
                color: #333;
            }
            .close {
                position: absolute;
                right: 18px;
                top: 12px;
                font-size: 28px;
                cursor: pointer;
                color: #666;
            }
            .close:hover {
                color: red;
            }
        </style>
    </head>
    <body>
        <?= view('admin/templates/header') ?>
        <div class="container">
            <div class="page-header">
                <h2>Product List</h2>
                <a href="<?= base_url('admin/products/text_view'); ?>" class="add-btn">
                    <i class="fa fa-plus"></i> Add Product
                </a>
            </div>
            <div class="table-box">
                <table class="product-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Product Keyword</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($products)): ?>
                            <?php foreach ($products as $row): ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/products/'.$row['product_image1']); ?>" class="product-img">
                                    </td>
                                    <td><?= esc($row['product_title']); ?></td>
                                    <td><?= $row['product_keyword']; ?></td>
                                    <td>₹<?= number_format($row['product_price'], 2); ?></td>
                                    <td><?= $row['status']; ?></td>
                                    <td>
                                        <button class="view-btn" data-id="<?= $row['id']; ?>"><i class="fa fa-eye"></i></button>
                                        <a href="#" class="delete-btn"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" style="text-align:center;">No Products Found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal" id="productModal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>Product Details</h3>
                <form id="updateForm" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="productId">
                    <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" name="product_title" id="productTitle" required>
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea name="product_description" id="productDescription"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Product Keyword</label>
                        <input type="text" name="product_keyword" id="productKeyword">
                    </div>
                    <div class="form-group">
                        <label>Current Image 1</label><br>
                        <img id="preview1" width="120">
                        <br><br>
                        <input type="file" name="product_image1">
                    </div>
                    <div class="form-group">
                        <label>Current Image 2</label><br>
                        <img id="preview2" width="120">
                        <br><br>
                        <input type="file" name="product_image2">
                    </div>
                    <div class="form-group">
                        <label>Current Image 3</label><br>
                        <img id="preview3" width="120">
                        <br><br>
                        <input type="file" name="product_image3">
                    </div>
                    <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" name="product_price" id="productPrice">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="productStatus">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="update-btn">Update Product</button>
                </form>
            </div>
        </div>
        <script>
            const modal = document.getElementById("productModal");
            const closeBtn = document.querySelector(".close");
            document.querySelectorAll(".view-btn").forEach(function(btn){
                btn.addEventListener("click", function(){
                    let productId = this.getAttribute("data-id");
                    modal.style.display = "flex";
                    fetch("<?= base_url('admin/products/get'); ?>/" + productId)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById("productId").value = data.id;
                        document.getElementById("productTitle").value = data.product_title;
                        document.getElementById("productDescription").value = data.product_description;
                        document.getElementById("productKeyword").value = data.product_keyword;
                        document.getElementById("productPrice").value = data.product_price;
                        document.getElementById("productStatus").value = data.status;
                        document.getElementById("preview1").src = "<?= base_url('uploads/products/') ?>/" + data.product_image1;
                        document.getElementById("preview2").src = "<?= base_url('uploads/products/') ?>/" + data.product_image2;
                        document.getElementById("preview3").src = "<?= base_url('uploads/products/') ?>/" + data.product_image3;
                    });
                });
            });
            document.getElementById("updateForm").addEventListener("submit", function(e){
                e.preventDefault();
                const formData = new FormData(this);
                fetch("<?= base_url('admin/products/update'); ?>", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(result => {
                    if(result.status === "success"){
                        alert("Product Updated Successfully");
                        modal.style.display = "none";
                        location.reload();
                    }
                }); 
            });
            closeBtn.onclick = function(){
                modal.style.display = "none";
            };
            window.onclick = function(e){
                if(e.target == modal){
                    modal.style.display = "none";
                }
            };
        </script>
    </body>
</html>