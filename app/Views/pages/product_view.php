<style>
    body{
        background:#fff8f9;
        font-family:'Poppins',sans-serif;
        margin:0;
        padding:0;
    }
    .product-view-wrapper{
        max-width:1200px;
        margin:150px auto 50px;
        padding:25px;
        display:flex;
        gap:40px;
        background:#fff5f7;
        border-radius:15px;
        box-shadow:0 2px 10px rgba(0,0,0,0.05);
    }
    .product-gallery{
        width:55%;
        display:flex;
        gap:15px;
        background:#fffafb;
        padding:15px;
        border-radius:12px;
    }
    .thumbs{
        display:flex;
        flex-direction:column;
        gap:15px;
    }
    .thumbs img{
        width:90px;
        height:90px;
        object-fit:cover;
        border:2px solid #f3d9df;
        border-radius:8px;
        cursor:pointer;
        transition:.3s;
        background:#fff;
    }
    .thumbs img:hover{
        border-color:#d98fa0;
    }
    .active-thumb{
        border:2px solid #d98fa0 !important;
    }
    .main-image{
        flex:1;
        overflow:hidden;
        border-radius:10px;
        cursor:zoom-in;
        background:#fff;
    } 
    .main-image img{
        width:500px;
        height:450px;
        object-fit:cover;
        border:1px solid #f3d9df;
        border-radius:10px;
        transition:transform .4s ease; 
    } 
    .product-details{
        width:500px;
        background:#fffafb;
        padding:25px;
        border-radius:12px;
    }
    .product-details h1{
        font-size:32px;
        line-height:1.4;
        margin-bottom:15px;
        color:#333;
    }
    .price{
        font-size:30px;
        font-weight:700;
        color:#d16d8a;
        margin:20px 0;
    }
    .description{
        font-size:16px;
        line-height:1.8;
        color:#555;
        margin-top:25px;
        text-align:justify;
    }
    .weight-section,.quantity-section{
        margin:20px 0;
        display:flex;
        align-items:center;
        gap:12px;
        flex-wrap:wrap;
    }
    .weight-section label,.quantity-section label{
        font-weight:600;
        color:#444;
    }
    .weight-section select{
        min-width:180px;
        padding:10px 14px;
        border:1px solid #f3d9df;
        border-radius:8px;
        background:#fff;
        outline:none;
        cursor:pointer;
        font-size:14px;
    }
    .qty-box{
        display:flex;
        align-items:center;
        border:1px solid #f3d9df;
        border-radius:8px;
        overflow:hidden;
        background:#fff;
    }
    .qty-box button{
        width:42px;
        height:42px;
        border:none;
        background:#fff5f7;
        cursor:pointer;
        font-size:20px;
        font-weight:600;
        transition:.3s;
    }
    .qty-box button:hover{
        background:#ffe5ec;
    }
    .qty-box input{
        width:60px;
        height:42px;
        border:none;
        text-align:center;
        font-size:16px;
        font-weight:600;
        background:#fff;
    }
    .qty-box input:focus{
        outline:none;
    }
    .cart-buttons{
        margin-top:25px;
    }
    .add-cart-btn{
        width:100%;
        padding:14px;
        border:none;
        border-radius:8px;
        background:#d98fa0;
        color:#fff;
        font-size:16px;
        font-weight:600;
        cursor:pointer;
        transition:.3s;
    }
    .add-cart-btn:hover{
        background:#c7798b;
    }
    .add-cart-btn.not-selected{
        background:#bdbdbd;
    }
    .add-cart-btn.not-selected:hover{
        background:#bdbdbd;
    } 
    .product-divider{
        height:1px;
        background:#f3d9df;
        margin:0 50px;
    }
    .product-tabs{
        margin:15px 50px 40px;
    }
    .tab-header{
        display:flex;
        justify-content:center;
        align-items:center;
        gap:40px;
        margin-bottom:25px;
    }
    .tab-btn{
        background:none;
        border:none;
        padding:15px 0;
        cursor:pointer;
        font-size:16px;
        font-weight:600;
        color:#666;
        transition:.3s;
    }
    .tab-btn:hover{
        color:#d98fa0;
    }
    .tab-btn.active{
        color:#d98fa0;
        border:none;
        box-shadow:none;
    }
    .tab-content{
        display:none;
        line-height:1.8;
        color:#555;
    }
    .active-tab{
        display:block;
    }
    .benefits-list{
        margin-top:15px;
        padding-left:20px;
        text-align:left;
    }
    .benefits-list li{
        margin-bottom:10px;
        line-height:1.8;
        color:#555;
        margin-left:145px;
    }
    .tab-content h3{
        margin-bottom:15px;
        color:#333;
        margin-left:145px;
    }
    #additional,#shipping{
        padding-left:165px;
    }
    .related-products-section{
        margin:50px;
    }
    .related-title{
        margin-left: 145px;
        margin-bottom:30px;
        font-size:30px;
        font-weight:700;
    }
    .related-products{
        display:grid;
        grid-template-columns:repeat(4,1fr);
        gap:25px;
        margin-left:145px;
        margin-right:145px;
    }
    .related-card{
        text-decoration:none;
        background:#fffafb;
        border-radius:12px;
        overflow:hidden;
        box-shadow:0 2px 8px rgba(0,0,0,.05);
    }
    .related-card img{
        width:100%;
        height:250px;
        object-fit:cover;
    }
    .related-card h4{
        padding:15px 15px 5px;
        color:#333;
    }
    .related-card p{
        padding:0 15px 15px;
        color:#d16d8a;
        font-weight:600;
    }
    .disabled{
        background:#999;
        cursor:not-allowed;
        opacity:0.7;
    }
    @media(max-width:991px){
        .product-view-wrapper{
            gap:25px;
        }
        .product-details h1{
            font-size:26px;
        }
        .main-image img{
            height:350px;
        }
        .thumbs img{
            width:75px;
            height:75px;
        }
        .benefits-list li{
            margin-left:50px;
        }
        .tab-content h3{
            margin-left:50px;
        }
        #additional,#shipping{
            padding-left:70px;
        }
    }
    @media(max-width:768px){
        .product-view-wrapper{
            flex-direction:column;
            margin:150px 15px 30px;
            padding:15px;
            gap:20px;
        }
        .product-gallery{
            width:100%;
            flex-direction:column-reverse;
        }
        .product-details{
            width:100%;
            padding:20px;
        }
        .main-image img{
            width:100%;
            height:auto;
            max-height:350px;
        }
        .thumbs{
            flex-direction:row;
            justify-content:center;
            flex-wrap:wrap;
        }
        .thumbs img{
            width:65px;
            height:65px;
        }
        .product-details h1{
            font-size:24px;
        }
        .price{
            font-size:24px;
        }
        .description{
            font-size:15px;
        }
        .weight-section select{
            width:100%;
        }
        .product-divider{
            margin:0 15px;
        }
        .product-tabs{
            margin:15px;
        }
        .tab-header{
            justify-content:center;
            gap:20px;
            flex-wrap:wrap;
        }
        .tab-btn{
            white-space:nowrap;
            font-size:14px;
        }
        .benefits-list li{
            margin-left:0;
        }
        .tab-content h3{
            margin-left:0;
            text-align:left;
        }
        #additional,#shipping{
            padding-left:0;
        }
    }
    @media(max-width:480px){
        .product-view-wrapper{
            margin:150px 10px 20px;
            padding:12px;
        }
        .product-details{
            padding:15px;
        }
        .product-details h1{
            font-size:20px;
        }
        .price{
            font-size:22px;
        }
        .thumbs img{
            width:55px;
            height:55px;
        }
        .weight-section,.quantity-section{
            flex-direction:column;
            align-items:flex-start;
        }
        .weight-section select{
            width:100%;
        }
        .qty-box{
            width:100%;
            justify-content:center;
        }
        .add-cart-btn{
            font-size:15px;
            padding:13px;
        }
        .tab-header{
            gap:12px;
        }
        .tab-btn{
            font-size:13px;
        }
    }
    @media(max-width:768px){
        .related-products{
            grid-template-columns:repeat(2,1fr);
        }
    }
    @media(max-width:480px){
        .related-products{
            grid-template-columns:1fr;
        }
    }
</style>
<div class="product-view-wrapper">
    <div class="product-gallery">
        <div class="thumbs">
            <?php if(!empty($product['product_image1'])): ?>
                <img class="active-thumb" src="<?= base_url('uploads/products/'.$product['product_image1']) ?>"onclick="changeImg(this)">
            <?php endif; ?>
            <?php if(!empty($product['product_image2'])): ?>
                <img src="<?= base_url('uploads/products/'.$product['product_image2']) ?>" onclick="changeImg(this)">
            <?php endif; ?>
            <?php if(!empty($product['product_image3'])): ?>
                <img src="<?= base_url('uploads/products/'.$product['product_image3']) ?>" onclick="changeImg(this)">
            <?php endif; ?>
        </div>
        <div class="main-image">
            <img id="mainImg" src="<?= base_url('uploads/products/'.$product['product_image1']) ?>" alt="<?= $product['product_title'] ?>">
        </div>
    </div>
    <form action="<?= base_url('add-cart') ?>" method="post">
        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
        <input type="hidden" name="product_title" value="<?= $product['product_title'] ?>">
        <input type="hidden" name="product_image" value="<?= $product['product_image1'] ?>">
        <input type="hidden" name="final_price" id="finalPriceInput" value="<?= $product['product_price'] ?>">
        <div class="product-details">
            <h1><?= $product['product_title'] ?></h1>
            <div class="price">
                ₹<span id="productPrice"><?= $product['product_price'] ?></span>
            </div>
            <div class="description">
                <?= $product['product_description'] ?>
            </div>
            <div class="weight-section">
                <label><strong>Weight:</strong></label>
                <select id="weightSelect" name="weight" required>
                    <option value="">Choose an option</option>
                    <option value="250 Gram" data-multiplier="1">250 Gram</option>
                    <option value="500 Gram" data-multiplier="2">500 Gram</option>
                    <option value="1 Kg" data-multiplier="4">1 Kg</option>
                </select>
            </div>
            <div class="quantity-section">
                <label><strong>Quantity:</strong></label>
                <div class="qty-box">
                    <button type="button" id="minusBtn">−</button>
                    <input type="text" id="quantity" name="quantity" value="1" readonly>
                    <button type="button" id="plusBtn">+</button>
                </div>
            </div>
            <?php if ($product['status'] == 'active'): ?>
                <div class="cart-buttons">
                    <button type="submit" id="addToCartBtn" class="add-cart-btn">Add To Cart</button>
                </div>
            <?php else: ?>
                <button type="button" class="add-cart-btn disabled" disabled>Currently Unavailable</button>
            <?php endif; ?>
        </div>
    </form>
</div>
<div class="product-divider"></div>
<div class="product-tabs">
    <div class="tab-header">
        <button class="tab-btn active" onclick="openTab(event,'description')">Description</button>
        <button class="tab-btn" onclick="openTab(event,'additional')">Additional Information</button>
        <button class="tab-btn" onclick="openTab(event,'shipping')">Shipping & Delivery</button>
    </div>
    <div id="description" class="tab-content active-tab">
        <h3 style="font-weight:800;">Health Benefits</h3><br>
        <h6 style="margin-left: 145px">Including almonds in your daily diet may help to:</h6><br>
        <h6 style="margin-left: 145px">Support heart health</h6>
        <h6 style="margin-left: 145px">Improve brain function and memory</h6>
        <h6 style="margin-left: 145px">Strengthen bones and teeth</h6>
        <h6 style="margin-left: 145px">Help manage healthy cholesterol levels</h6>
        <h6 style="margin-left: 145px">Support skin and hair health</h6>
        <h6 style="margin-left: 145px">Promote sustained energy levels</h6><br>
        <div class="product-divider"></div><br>
        <h3 style="font-weight:800;">Product Specifications</h3><br>
        <h6 style="margin-left: 145px"><strong>Brand Name:</strong> CRACK N CRUNCH</h6>
        <h6 style="margin-left: 145px"><strong>Product Name:</strong> CRACK N CRUNCH Premium <?= $product['product_title'] ?></h6>
        <h6 style="margin-left: 145px"><strong>Grade:</strong> Premium Almonds</h6>
        <h6 style="margin-left: 145px"><strong>Ingredients:</strong> 100% Premium Almonds</h6>
        <h6 style="margin-left: 145px"><strong>Country of Origin:</strong> India / Imported (as applicable)</h6>
        <h6 style="margin-left: 145px"><strong>Number of Items:</strong> 1</h6>
        <h6 style="margin-left: 145px"><strong>Shelf Life:</strong> 12 Months</h6>
        <h6 style="margin-left: 145px"><strong>Dimensions:</strong> As per pack size</h6>
        <h6 style="margin-left: 145px"><strong>Vegetarian:</strong> Yes</h6>
        <h6 style="margin-left: 145px"><strong>Manufacturer / Marketed by:</strong> CRACK N CRUNCH</h6>
        <h6 style="margin-left: 145px"><strong>Address:</strong> As per package</h6>
        <h6 style="margin-left: 145px"><strong>Processed & Packed by:</strong> CRACK N CRUNCH</h6>
        <h6 style="margin-left: 145px"><strong>FSSAI License No.:</strong> As mentioned on the package</h6>
        <h6 style="margin-left: 145px"><strong>Storage Instructions:</strong> Store in a cool, dry place. Keep away from direct sunlight. Reseal after opening.</h6>
        <h6 style="margin-left: 145px"><strong>Allergen Information:</strong> Contains almonds. May contain traces of other nuts.</h6>
        <h6 style="margin-left: 145px"><strong>For Queries / Feedback / Complaints:</strong> Contact details as mentioned on the package</h6>
        <h6 style="margin-left: 145px"><strong>Delivery and Shipment:</strong> Shipped in hygienic and secure packaging</h6>
        <h6 style="margin-left: 145px"><strong>Returns & Refund Policy:</strong> As per company policy</h6><br>
        <div class="product-divider"></div><br>
        <h3 style="font-weight:800;">Nutrition Facts</h3><br>
        <h6 style="margin-left: 145px">(Approximate values per 100 g of the product)</h6><br>
        <table style="width:80%;margin-left:150px;border-collapse:collapse;">
            <tr>
                <th style="text-align:left;padding:12px 0;border-bottom:2px solid #ddd;">Nutrient</th>
                <th style="text-align:left;padding:12px 0;border-bottom:2px solid #ddd;">Amount</th>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Energy (kcal)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">553</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Protein (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">18.2</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Carbohydrates (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">30.2</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Sugar (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">5.9</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Total Fat (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">43.9</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Saturated Fatty Acids (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">7.8</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Trans Fatty Acids (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">0</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Monounsaturated Fatty Acids (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">23.8</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Polyunsaturated Fatty Acids (g)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">7.8</td>
            </tr>
            <tr>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">Cholesterol (mg)</td>
                <td style="padding:12px 0;border-bottom:2px solid #ddd;">0</td>
            </tr>
        </table><br>
        <h3 style="font-weight:500;">RDA calculated on the basis of a 2000 kcal diet.</h3><br>
    </div>
    <div id="additional" class="tab-content">
        <p><strong>Weight:</strong> Available in 250g, 500g and 1kg.</p>
    </div>
    <div id="shipping" class="tab-content">
        <p>Orders are processed within 24 hours.</p>
        <p>Delivery usually takes 3-7 business days depending on location.</p>
    </div>
    <div class="product-divider"></div>
</div>
<div class="related-products-section">
    <h2 class="related-title">Related Products</h2>
    <div class="related-products">
       <div class="related-products">
            <?php foreach(array_slice($product, 0, 4) as $item): ?>
                <a href="<?= base_url('product_view/'.$product['id']) ?>" class="related-card">
                    <img src="<?= base_url('uploads/products/'.$product['product_image1']) ?>" alt="<?= $product['product_title'] ?>">
                    <h4><?= $product['product_title'] ?></h4>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const basePrice = <?= $product['product_price'] ?>;
        const weightSelect = document.getElementById('weightSelect');
        const productPrice = document.getElementById('productPrice');
        const quantityInput = document.getElementById('quantity');
        const addToCartBtn = document.getElementById('addToCartBtn');
        const finalPriceInput = document.getElementById('finalPriceInput');
        const mainImage = document.getElementById('mainImg');
        let qty = 1;
        if(mainImage){
            mainImage.addEventListener('mousemove', function(e){
                const rect = this.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;
                this.style.transformOrigin = x + '% ' + y + '%';
                this.style.transform = 'scale(2)';
            });
            mainImage.addEventListener('mouseleave', function(){
                this.style.transform = 'scale(1)';
                this.style.transformOrigin = 'center center';
            });
        }
        function updatePrice(){
            let multiplier = parseInt(
                weightSelect.options[weightSelect.selectedIndex].dataset.multiplier
            );
            if(isNaN(multiplier)){
                multiplier = 1;
            }
            let totalPrice = basePrice * multiplier * qty;
            productPrice.innerText = totalPrice;
            if(finalPriceInput){
                finalPriceInput.value = totalPrice;
            }
        }
        if(weightSelect){
            weightSelect.addEventListener('change', function(){
                updatePrice();
            });
        }
        document.getElementById('plusBtn').addEventListener('click', function(){
            qty++;
            quantityInput.value = qty;
            updatePrice();
        });
        document.getElementById('minusBtn').addEventListener('click', function(){
            if(qty > 1){
                qty--;
                quantityInput.value = qty;
                updatePrice();
            }
        });
        if(addToCartBtn){
            addToCartBtn.addEventListener('click', function(e){
                if(weightSelect.value === ''){
                    e.preventDefault();
                    alert('Please choose weight');
                    weightSelect.focus();
                    return false;
                }
            });
        }
    });
    function changeImg(element){
        document.getElementById('mainImg').src = element.src;
        document.querySelectorAll('.thumbs img').forEach(function(img){
            img.classList.remove('active-thumb');
        });
        element.classList.add('active-thumb');
    }
    function openTab(evt, tabId){
        document.querySelectorAll('.tab-content').forEach(function(tab){
            tab.classList.remove('active-tab');
        });
        document.querySelectorAll('.tab-btn').forEach(function(btn){
            btn.classList.remove('active');
        });
        document.getElementById(tabId).classList.add('active-tab');
        evt.currentTarget.classList.add('active');
    }
</script>