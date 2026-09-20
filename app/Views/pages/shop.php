<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        margin:0;
        padding:0;
        font-family:Arial, sans-serif;
        background:#f5f5f5;
        overflow-x:hidden;
    }
    .terms-banner{
        width:100%;
        height:300px;
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
    }
    .banner-text h2{
        margin:0;
        font-size:32px;
    }
    .shop-container{
        max-width:1400px;
        margin:40px auto;
        padding:0 20px;
        display:flex;
        gap:25px;
        align-items:flex-start;
    }
    .filter-sidebar{
        width:280px;
        background:#fff;
        padding:20px;
        border-radius:12px;
        box-shadow:0 2px 10px rgba(0,0,0,0.08);
        height:fit-content;
        flex-shrink:0;
    }
    .filter-sidebar h3{
        margin:0 0 15px;
        font-size:18px;
        color:#222;
    }
    .sidebar-title{
        margin-top:25px !important;
        padding-bottom:12px;
        border-bottom:1px solid #ddd;
    }
    .filter-sidebar input[type="range"]{
        width:100%;
    }
    .price-range{
        margin:10px 0;
        font-size:14px;
        color:#666;
    }
    .filter-btn{
        width:100%;
        padding:12px;
        border:none;
        background:#111;
        color:#fff;
        cursor:pointer;
        border-radius:6px;
        margin-bottom:20px;
        font-weight:600;
    }
    .filter-btn:hover{
        background:#333;
    }
    .filter-sidebar p{
        margin:0;
    }
    .filter-sidebar p a{
        display:block;
        padding:11px 0;
        text-decoration:none;
        color:#333;
        border-bottom:1px solid #eee;
        transition:0.3s;
    }
    .filter-sidebar p a:hover{
        color:#000;
        padding-left:8px;
        font-weight:600;
    }
    .group-title{
        padding:12px 0;
        border-bottom:1px solid #eee;
        cursor:pointer;
        font-weight:700;
        color:#222;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    .group-title:hover{
        color:#d35400;
    }
    #nuts-group{
        padding-left:15px;
    }
    #nuts-group p a{
        font-size:14px;
        padding:9px 0;
    }
    .shop-products{
        flex:1;
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:20px;
    }
    .product-card{
        background:#fff;
        border-radius:12px;
        overflow:hidden;
        box-shadow:0 2px 12px rgba(0,0,0,0.08);
        transition:0.3s;
    }
    .product-card:hover{
        transform:translateY(-5px);
        box-shadow:0 8px 20px rgba(0,0,0,0.15);
    }
    .product-card img{
        width:100%;
        height:300px;
        object-fit:cover;
        display:block;
    }
    .product-info{
        padding:15px;
        text-align:center;
    }
    .product-info h4{
        margin:0;
        font-size:16px;
        color:#333;
        font-weight:600;
    }
    .product-info p{
        margin:8px 0 0;
        color:#777;
        font-size:14px;
    }
    .no-products{
        grid-column:1/-1;
        text-align:center;
        padding:80px 20px;
        background:#fff;
        border-radius:12px;
    }
    .no-products i{
        font-size:50px;
        color:#999;
        margin-bottom:15px;
    }
    .no-products h2{
        margin:0;
        color:#666;
    }
    .pagination-wrapper{
        grid-column:1 / -1;
        display:flex;
        justify-content:flex-end;
        align-items:center;
        gap:10px;
        margin-top:30px;
        margin-bottom:10px;
    }
    .pagination-wrapper button{
        padding:10px 18px;
        border:none;
        background:#222;
        color:#fff;
        cursor:pointer;
        border-radius:5px;
        font-size:14px;
        transition:0.3s;
    }
    .pagination-wrapper button:hover{
        opacity:0.8;
    }
    .pagination-wrapper span{
        font-size:16px;
        font-weight:600;
        min-width:30px;
        text-align:center;
    }
    .image-wrapper{
        position:relative;
        overflow:hidden;
    }
    .product-image{
        width:100%;
        height:250px;
        object-fit:cover;
        display:block;
        transition:opacity .4s ease;
    }
    .image1{
        position:relative;
        z-index:1;
    }
    .image2{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        object-fit:cover;
        opacity:0;
        z-index:2;
    }
    .image-wrapper:hover .image1{
        opacity:0;
    }
    .image-wrapper:hover .image2{
        opacity:1;
    }
    .sale-badge{
        position:absolute;
        top:10px;
        left:10px;
        padding:6px 12px;
        border-radius:20px;
        color:#fff;
        font-size:11px;
        font-weight:bold;
        z-index:5;
        text-transform:uppercase;
    }
    .sale{
        background:#28a745;
    }
    .unavailable{
        background:#dc3545;
    }
    .product-card {
        position: relative;
    }
    .image-wrapper {
        position: relative;
        width: 100%;
        overflow: hidden;
    }
    .product-image {
        width: 100%;
        height: 300px;
        display: block;
        object-fit: cover;
    }
    .product-hover-actions {
        position: absolute;
        top: 15px;
        right: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        z-index: 100;
        opacity: 0;
        visibility: hidden;
        transform: translateX(15px);
        transition: opacity 0.25s ease, visibility 0.25s ease, transform 0.25s ease;
    }
    .image-wrapper:hover .product-hover-actions {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
    }
    .hover-action {
        width: 42px;
        height: 42px;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0;
        margin: 0;
        padding: 0;
        border: 0;
        border-radius: 50%;
        background: #ffffff !important;
        color: #000000 !important;
        text-decoration: none;
        font-size: 16px;
        line-height: 1;
        cursor: pointer;
        box-sizing: border-box;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.25);
        transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
    }
    .hover-action i {
        display: block !important;
        width: auto;
        height: auto;
        margin: 0;
        padding: 0;
        color: #000000 !important;
        font-size: 16px;
        line-height: 1;
        text-align: center;
    }
    .hover-action:hover {
        background: #000000 !important;
        color: #ffffff !important;
        transform: scale(1.08);
    }
    .hover-action:hover i {
        color: #ffffff !important;
    }
    .wishlist-action {
        background: #ffffff !important;
        color: #ffffff !important;
    }
    .wishlist-action i {
        color: #ffffff !important;
    }
    .wishlist-action.wishlist-selected {
        background: #000000 !important;
        color: #e53935 !important;
    }
    .wishlist-action.wishlist-selected i {
        color: #e53935 !important;
    }
    .wishlist-action:hover {
        background: #000000 !important;
    }
    .wishlist-action:hover i {
        color: #e53935 !important;
    }
    .quick-view-modal {
        position: fixed;
        inset: 0;
        width: 100%;
        height: 100vh;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
        box-sizing: border-box;
        background: rgba(0, 0, 0, 0.60);
        z-index: 999999;
    }
    .quick-view-modal.active {
        display: flex;
    }
    .quick-view-box {
        position: relative;
        width: 900px;
        max-width: 95%;
        max-height: 90vh;
        display: flex;
        background: #ffffff;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 25px 70px rgba(0, 0, 0, 0.30);
        animation: quickViewOpen 0.25s ease;
    }
    @keyframes quickViewOpen {
        from {
            opacity: 0;
            transform: scale(0.95) translateY(15px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }
    .quick-view-close {
        position: absolute;
        top: 14px;
        right: 14px;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 50%;
        background: #ffffff;
        color: #222222;
        font-size: 25px;
        line-height: 1;
        cursor: pointer;
        z-index: 20;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
        transition: 0.2s ease;
    }
    .quick-view-close:hover {
        background: #222222;
        color: #ffffff;
    }
    .quick-view-content {
        width: 100%;
        display: flex;
        min-height: 500px;
    }
    .quick-view-image {
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 35px;
        box-sizing: border-box;
        background: #f7f7f7;
    }
    .quick-view-image img {
        display: block;
        width: 100%;
        max-width: 400px;
        height: 400px;
        object-fit: contain;
    }
    .quick-view-details {
        width: 50%;
        padding: 45px 40px 35px;
        box-sizing: border-box;
        overflow-y: auto;
    }
    .quick-view-details h2 {
        margin: 0 45px 14px 0;
        color: #171717;
        font-size: 27px;
        font-weight: 700;
        line-height: 1.35;
    }
    .quick-view-price {
        margin-bottom: 20px;
        color: #111111;
        font-size: 23px;
        font-weight: 700;
    }
    .quick-view-description {
        margin-bottom: 25px;
        color: #666666;
        font-size: 14px;
        line-height: 1.7;
    }
    .quick-view-label {
        display: block;
        margin-bottom: 8px;
        color: #222222;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }
    .quick-view-select {
        width: 100%;
        height: 48px;
        margin-bottom: 22px;
        padding: 0 14px;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        border-radius: 7px;
        background: #ffffff;
        color: #222222;
        font-size: 14px;
        outline: none;
        cursor: pointer;
        transition: 0.2s ease;
    }
    .quick-view-select:hover {
        border-color: #999999;
    }
    .quick-view-select:focus {
        border-color: #222222;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.06);
    }
    .quick-quantity {
        width: fit-content;
        height: 46px;
        display: flex;
        align-items: center;
        margin-bottom: 25px;
        border: 1px solid #dcdcdc;
        border-radius: 7px;
        overflow: hidden;
        background: #ffffff;
    }
    .quick-quantity button {
        width: 46px;
        height: 46px;
        padding: 0;
        border: none;
        background: #f5f5f5;
        color: #222222;
        font-size: 21px;
        line-height: 1;
        cursor: pointer;
        transition: 0.2s ease;
    }
    .quick-quantity button:hover {
        background: #222222;
        color: #ffffff;
    }
    .quick-quantity span {
        width: 55px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-left: 1px solid #dcdcdc;
        border-right: 1px solid #dcdcdc;
        color: #222222;
        font-size: 15px;
        font-weight: 600;
        box-sizing: border-box;
    }
    .quick-add-cart {
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 0 20px;
        border: none;
        border-radius: 7px;
        background: #111111;
        color: #ffffff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.7px;
        cursor: pointer;
        transition: 0.2s ease;
    }
    .quick-add-cart:hover {
        background: #333333;
        transform: translateY(-1px);
        box-shadow: 0 7px 18px rgba(0, 0, 0, 0.18);
    }
    .quick-add-cart i {
        font-size: 15px;
    }
    .quick-view-details::-webkit-scrollbar {
        width: 5px;
    }
    .quick-view-details::-webkit-scrollbar-track {
        background: transparent;
    }
    .quick-view-details::-webkit-scrollbar-thumb {
        background: #cccccc;
        border-radius: 10px;
    }
    .compare-added {
        background: #28a745 !important;
        color: #fff !important;
    }
    .compare-added:hover {
        background: #218838 !important;
        color: #fff !important;
    }
    .quick-add-cart:disabled {
        background: #999 !important;
        color: #fff !important;
        cursor: not-allowed !important;
        opacity: 1 !important;
        transform: none !important;
        box-shadow: none !important;
    }
    .quick-add-cart:disabled:hover {
        background: #999 !important;
        color: #fff !important;
        transform: none !important;
        box-shadow: none !important;
    }
    .product-bottom-action {
        position: absolute;
        left: 15px;
        right: 15px;
        bottom: 5px;
        z-index: 40;
        opacity: 0;
        visibility: hidden;
        transform: translateY(15px);
        transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
    }
    .image-wrapper:hover .product-bottom-action {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .select-option-btn {
        position: relative;
        width: 100%;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        color: #111;
        border: 1px solid rgba(255, 255, 255, 0.9);
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1px;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.8);
        transition: background 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }
    .option-text {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        opacity: 1;
        visibility: visible;
        white-space: nowrap;
        transition: opacity 0.2s ease;
    }
    .option-cart {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        visibility: hidden;
        font-size: 18px;
        transition: opacity 0.2s ease;
    }
    .select-option-btn:hover {
        background: rgba(0, 0, 0, 0.65);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        color: #fff;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.25), inset 0 1px 0 rgba(255, 255, 255, 0.15);
    }
    .select-option-btn:hover .option-text {
        opacity: 0;
        visibility: hidden;
    }
    .select-option-btn:hover .option-cart {
        opacity: 1;
        visibility: visible;
    }
    .disabled-btn {
        background: rgba(120, 120, 120, 0.85) !important;
        color: #fff !important;
        cursor: not-allowed !important;
        pointer-events: none;
        border: none !important;
    }
    .product-options-panel {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        z-index: 200;
        padding: 50px 25px 25px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
        box-sizing: border-box;
    }
    .product-options-panel.active {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .product-options-close {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 32px;
        height: 32px;
        border: none;
        border-radius: 50%;
        background: #111;
        color: #fff;
        font-size: 21px;
        line-height: 32px;
        padding: 0;
        cursor: pointer;
        z-index: 10;
    }
    .product-options-close:hover {
        background: #d32f2f;
    }
    .product-options-inner {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 25px;
        box-sizing: border-box;
    }
    .product-options-inner label {
        display: block;
        margin-bottom: 8px;
        font-size: 12px;
        font-weight: 700;
        color: #222;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .product-option-select {
        width: 100%;
        height: 42px;
        padding: 0 12px;
        border: 1px solid #ddd;
        background: #fff;
        color: #222;
        font-size: 13px;
        outline: none;
        cursor: pointer;
    }
    .product-option-select:focus {
        border-color: #111;
    }
    .weight-add-cart {
        width: 100%;
        height: 42px;
        margin-top: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: #111;
        color: #fff;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.7px;
        box-sizing: border-box;
        transition: background 0.3s ease, transform 0.2s ease;
    }
    .weight-add-cart:hover {
        background: #d32f2f;
        color: #fff;
        transform: translateY(-1px);
    }
    .weight-add-cart i {
        font-size: 14px;
    }
    .weight-error {
        display: none;
        margin: 7px 0 0;
        color: #d32f2f;
        font-size: 11px;
        font-weight: 600;
    }
    .hover-action {
        transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
    }
    .select-option-btn {
        transition: background 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }
    .weight-add-cart {
        transition: background 0.3s ease, color 0.3s ease, transform 0.2s ease;
    }
    @media (min-width: 1400px) {
        .shop-container {
            max-width: 1400px;
        }
        .shop-products {
            grid-template-columns: repeat(3, 1fr);
        }
        .product-image {
            height: 300px;
        }
        .quick-view-box {
            width: 900px;
        }
    }
    @media (min-width: 1025px) and (max-width: 1399px) {
        .shop-container {
            max-width: 1200px;
            padding: 0 20px;
        }
        .filter-sidebar {
            width: 250px;
        }
        .shop-products {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        .product-image {
            height: 280px;
        }
        .quick-view-box {
            width: 850px;
            max-width: 92%;
        }
    }
    @media (min-width: 769px) and (max-width: 1024px) {
        .terms-banner {
            height: 260px;
            margin-top: 90px;
        }
        .banner-text h2 {
            font-size: 28px;
        }
        .shop-container {
            width: 100%;
            max-width: 100%;
            padding: 0 20px;
            margin: 30px auto;
            box-sizing: border-box;
            gap: 18px;
        }
        .filter-sidebar {
            width: 220px;
            padding: 18px;
            box-sizing: border-box;
        }
        .shop-products {
            flex: 1;
            min-width: 0;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }
        .product-image {
            height: 260px;
        }
        .product-info {
            padding: 13px;
        }
        .product-info h4 {
            font-size: 15px;
        }
        .quick-view-box {
            width: 90%;
            max-width: 90%;
            max-height: 88vh;
        }
        .quick-view-content {
            min-height: 450px;
        }
        .quick-view-image {
            padding: 25px;
        }
        .quick-view-image img {
            height: 350px;
        }
        .quick-view-details {
            padding: 35px 25px;
        }
        .quick-view-details h2 {
            font-size: 24px;
        }
        .quick-view-price {
            font-size: 21px;
        }
    }
    @media (min-width: 576px) and (max-width: 768px) {
        .terms-banner {
            height: 230px;
            margin-top: 80px;
        }
        .banner-text h2 {
            font-size: 25px;
        }
        .shop-container {
            width: 100%;
            display: block;
            padding: 0 15px;
            margin: 25px auto;
            box-sizing: border-box;
        }
        .filter-sidebar {
            width: 100%;
            margin-bottom: 25px;
            box-sizing: border-box;
        }
        .shop-products {
            width: 100%;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }
        .product-image {
            height: 240px;
        }
        .product-info {
            padding: 12px;
        }
        .product-info h4 {
            font-size: 15px;
        }
        .product-hover-actions {
            top: 10px;
            right: 10px;
            gap: 8px;
        }
        .hover-action {
            width: 38px;
            height: 38px;
            font-size: 14px;
        }
        .hover-action i {
            font-size: 14px;
        }
        .product-bottom-action {
            left: 10px;
            right: 10px;
            bottom: 5px;
        }
        .quick-view-modal {
            padding: 15px;
        }
        .quick-view-box {
            width: 100%;
            max-width: 100%;
            max-height: 90vh;
            overflow-y: auto;
        }
        .quick-view-content {
            display: block;
            min-height: auto;
        }
        .quick-view-image {
            width: 100%;
            height: 300px;
            padding: 20px;
        }
        .quick-view-image img {
            width: 100%;
            max-width: 280px;
            height: 260px;
        }
        .quick-view-details {
            width: 100%;
            padding: 25px 22px 30px;
            overflow-y: visible;
        }
        .quick-view-details h2 {
            font-size: 22px;
            margin-right: 35px;
        }
        .quick-view-price {
            font-size: 20px;
        }
        .quick-view-description {
            font-size: 13px;
        }
    }
    @media (max-width: 575px) {
        body {
            width: 100%;
            overflow-x: hidden;
        }
        .terms-banner {
            width: 100%;
            height: 190px;
            margin-top: 70px;
        }
        .banner-text {
            width: 90%;
        }
        .banner-text h2 {
            font-size: 22px;
            line-height: 1.3;
        }
        .shop-container {
            width: 100%;
            display: block;
            padding: 0 12px;
            margin: 20px auto;
            box-sizing: border-box;
        }
        .filter-sidebar {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        .filter-sidebar h3 {
            font-size: 17px;
        }
        .shop-products {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }
        .product-card {
            width: 100%;
            min-width: 0;
            border-radius: 8px;
        }
        .product-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }
        .product-info {
            padding: 10px 7px;
        }
        .product-info h4 {
            font-size: 13px;
            line-height: 1.4;
            word-break: break-word;
        }
        .sale-badge {
            top: 7px;
            left: 7px;
            padding: 5px 7px;
            font-size: 9px;
            border-radius: 12px;
        }
        .product-hover-actions {
            top: 8px;
            right: 8px;
            gap: 6px;
        }
        .hover-action {
            width: 34px;
            height: 34px;
            font-size: 13px;
        }
        .hover-action i {
            font-size: 13px;
        }
        .product-bottom-action {
            left: 8px;
            right: 8px;
            bottom: 5px;
        }
        .select-option-btn {
            height: 38px;
            font-size: 10px;
            letter-spacing: 0.5px;
        }
        .option-cart {
            font-size: 16px;
        }
        .quick-view-modal {
            padding: 10px;
        }
        .quick-view-box {
            width: 100%;
            max-width: 100%;
            max-height: 94vh;
            display: block;
            overflow-y: auto;
            border-radius: 10px;
        }
        .quick-view-content {
            width: 100%;
            display: block;
            min-height: auto;
        }
        .quick-view-image {
            width: 100%;
            height: 240px;
            padding: 15px;
        }
        .quick-view-image img {
            width: 100%;
            max-width: 220px;
            height: 210px;
            object-fit: contain;
        }
        .quick-view-details {
            width: 100%;
            padding: 22px 18px 25px;
            overflow: visible;
            box-sizing: border-box;
        }
        .quick-view-details h2 {
            margin: 0 35px 10px 0;
            font-size: 20px;
            line-height: 1.3;
        }
        .quick-view-price {
            margin-bottom: 14px;
            font-size: 19px;
        }
        .quick-view-description {
            margin-bottom: 18px;
            font-size: 13px;
            line-height: 1.6;
        }
        .quick-view-label {
            font-size: 11px;
            margin-bottom: 6px;
        }
        .quick-view-select {
            height: 44px;
            margin-bottom: 17px;
            font-size: 13px;
        }
        .quick-quantity {
            height: 42px;
            margin-bottom: 20px;
        }
        .quick-quantity button {
            width: 42px;
            height: 42px;
            font-size: 19px;
        }
        .quick-quantity span {
            width: 48px;
            height: 42px;
        }
        .quick-add-cart {
            height: 46px;
            font-size: 12px;
        }
        .quick-view-close {
            top: 8px;
            right: 8px;
            width: 34px;
            height: 34px;
            font-size: 21px;
        }
        .product-options-panel {
            padding: 45px 15px 20px;
        }
        .product-options-inner {
            padding: 15px;
        }
        .product-options-close {
            top: 8px;
            right: 8px;
            width: 30px;
            height: 30px;
            font-size: 19px;
            line-height: 30px;
        }
        .product-option-select {
            height: 40px;
            font-size: 12px;
        }
        .weight-add-cart {
            height: 40px;
            font-size: 11px;
        }
        .pagination-wrapper {
            justify-content: center;
            gap: 7px;
            margin-top: 20px;
        }
        .pagination-wrapper button {
            padding: 8px 12px;
            font-size: 12px;
        }
        .pagination-wrapper span {
            font-size: 14px;
        }
    }
    @media (max-width: 380px) {
        .shop-container {
            padding: 0 8px;
        }
        .shop-products {
            gap: 8px;
        }
        .product-image {
            height: 165px;
        }
        .product-info h4 {
            font-size: 12px;
        }
        .product-hover-actions {
            top: 6px;
            right: 6px;
            gap: 5px;
        }
        .hover-action {
            width: 30px;
            height: 30px;
        }
        .hover-action i {
            font-size: 12px;
        }
        .quick-view-details {
            padding: 20px 15px;
        }
        .quick-view-details h2 {
            font-size: 18px;
        }
        .quick-view-image {
            height: 210px;
        }
        .quick-view-image img {
            height: 180px;
        }
    }
</style>
<div class="terms-banner">
    <img src="<?= base_url('uploads/shop.png'); ?>">
    <div class="banner-text">
        <h2>
            <a href="<?= base_url('/') ?>">Home</a>
            &gt;&gt;
            <?= $category ?>
        </h2>
    </div>
</div>
<div class="shop-container">
    <div class="filter-sidebar">
        <h3 class="sidebar-title">PRODUCT CATEGORIES</h3>
        <p><a href="<?= base_url('shop/Berries') ?>">Berries</a></p>
        <p><a href="<?= base_url('shop/Bulk/Wholesale') ?>">Bulk/Wholesale</a></p>
        <p><a href="<?= base_url('shop/Combo Offers') ?>">Combo Offers</a></p>
        <p><a href="<?= base_url('shop/Combo and Gift Packs') ?>">Combo & Gift Packs</a></p>
        <p><a href="<?= base_url('shop/Dates') ?>">Dates</a></p>
        <p><a href="<?= base_url('shop/Dry Fruits') ?>">Dry Fruits</a></p>
        <p><a href="<?= base_url('shop/Flavoured Nuts') ?>">Flavoured Nuts</a></p>
        <p><a href="<?= base_url('shop/Hampers') ?>">Hampers</a></p>
        <p><a href="<?= base_url('shop/Jumbo and Premium') ?>">Jumbo & Premium</a></p>
        <p><a href="<?= base_url('shop/Mixes and Snacking') ?>">Mixes & Snacking</a></p>
        <div class="group-title" onclick="toggleNuts()">
            <span>NUTS</span>
            <i class="fa fa-chevron-down"></i>
        </div>
        <div id="nuts-group" style="display:none;">
            <p><a href="<?= base_url('shop/Almonds') ?>">Almonds</a></p>
            <p><a href="<?= base_url('shop/Cashews') ?>">Cashews</a></p>
            <p><a href="<?= base_url('shop/Pistachios') ?>">Pistachios</a></p>
            <p><a href="<?= base_url('shop/Walnuts') ?>">Walnuts</a></p>
        </div>
        <p><a href="<?= base_url('shop/Powders') ?>">Powders</a></p>
        <p><a href="<?= base_url('shop/Seeds') ?>">Seeds</a></p>
        <p><a href="<?= base_url('shop/Uncategorized') ?>">Uncategorized</a></p>
    </div>
    <div class="shop-products">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $p): ?>
                <div class="product-card product-item">
                    <div class="image-wrapper">
                        <a href="<?= base_url('product_view/' . $p['id']) ?>" class="product-image-link">
                            <?php if (($p['status'] ?? '') === 'active'): ?>
                                <span class="sale-badge sale">SALE</span>
                            <?php else: ?>
                                <span class="sale-badge unavailable">CURRENTLY UNAVAILABLE</span>
                            <?php endif; ?>
                            <img src="<?= base_url('uploads/products/' . $p['product_image1']) ?>" class="premium-image image1" alt="<?= esc($p['product_title']) ?>">
                            <?php if (!empty($p['product_image2'])): ?>
                                <img src="<?= base_url('uploads/products/' . $p['product_image2']) ?>" class="premium-image image2" alt="<?= esc($p['product_title']) ?>">
                            <?php endif; ?>
                        </a>
                        <div class="product-bottom-action">
                            <?php if ($p['status'] == 'active'): ?>
                                <div class="select-option-btn">
                                    <span class="option-text">SELECT OPTIONS</span>
                                    <button type="button" class="option-cart" onclick="openProductOptions(event, <?= $p['id'] ?>)"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                            <?php else: ?>
                                <button type="button" class="select-option-btn disabled-btn" disabled>CURRENTLY UNAVAILABLE</button>
                            <?php endif; ?>
                        </div>
                        <div class="product-hover-actions">
                            <a href="#" class="hover-action" title="Add to Compare" onclick="compareClicked(this, event)"><i class="fa fa-exchange"></i></a>
                            <button type="button" class="hover-action quick-view-btn" title="Quick View" onclick="openQuickView(<?= $p['id'] ?>)"><i class="fa fa-eye"></i></button>
                            <a href="<?= base_url('wishlist/add/' . $p['id']) ?>" class="hover-action" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <?php if ($p['status'] == 'active'): ?>
                            <div id="productOptionsModal<?= $p['id'] ?>" class="product-options-panel">
                                <button type="button" class="product-options-close" onclick="closeProductOptions(event, <?= $p['id'] ?>)">&times;</button>
                                <div class="product-options-inner">
                                    <form action="<?= base_url('add-cart') ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?= $p['id'] ?>">
                                        <input type="hidden" name="product_title" value="<?= esc($p['product_title']) ?>">
                                        <input type="hidden" name="product_image" value="<?= esc($p['product_image1']) ?>">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="final_price" id="finalPrice<?= $p['id'] ?>" value="<?= esc($p['product_price']) ?>">
                                        <label>Weight</label>
                                        <select name="weight" id="weight<?= $p['id'] ?>" class="product-option-select" onchange="updateWeightPrice(<?= $p['id'] ?>, <?= $p['product_price'] ?>)" required>
                                            <option value="">Select Weight</option>
                                            <option value="250g">250g</option>
                                            <option value="500g">500g</option>
                                            <option value="1kg">1kg</option>
                                        </select>
                                        <p id="weightError<?= $p['id'] ?>" class="weight-error">Please select a weight.</p>
                                        <button type="submit" class="weight-add-cart" onclick="addProductToCart(<?= $p['id'] ?>)"><i class="fa fa-shopping-cart"></i>ADD TO CART</button>
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="product-info">
                        <h4><?= esc($p['product_title']) ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-products">
                <i class="fa fa-box-open"></i>
                <h2>No Products Found</h2>
            </div>
        <?php endif; ?>
        <div class="pagination-wrapper">
            <button onclick="prevPage()">Previous</button>
            <span id="pageNumber">1</span>
            <button onclick="nextPage()">Next</button>
        </div>
    </div>
</div>
<div id="quickViewModal" class="quick-view-modal">
    <div class="quick-view-box">
        <button type="button" class="quick-view-close" onclick="closeQuickView()">&times;</button>
        <div class="quick-view-content">
            <div class="quick-view-image">
                <img id="quickViewImage" src="" alt="Product">
            </div>
            <div class="quick-view-details">
                <h2 id="quickViewTitle"></h2>
                <div class="quick-view-price" id="quickViewPrice"></div>
                <div class="quick-view-description" id="quickViewDescription"></div>
                <form action="<?= base_url('add-cart') ?>" method="post" id="quickViewCartForm">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="product_id" id="quickViewProductId">
                    <input type="hidden" name="product_title" id="quickViewCartTitle">
                    <input type="hidden" name="product_image" id="quickViewCartImage">
                    <input type="hidden" name="final_price" id="quickViewFinalPrice">
                    <input type="hidden" name="quantity" id="quickViewQuantity" value="1">
                    <label class="quick-view-label">Weight</label>
                    <select name="weight" id="quickViewWeight" class="quick-view-select" required>
                        <option value="">Select Weight</option>
                        <option value="250g">250g</option>
                        <option value="500g">500g</option>
                        <option value="1kg">1kg</option>
                    </select>
                    <label class="quick-view-label">Quantity</label>
                    <div class="quick-quantity">
                        <button type="button" onclick="changeQuickQuantity(-1)">−</button>
                        <span id="quickViewQuantityDisplay">1</span>
                        <button type="button" onclick="changeQuickQuantity(1)">+</button>
                    </div>
                    <button type="submit" class="quick-add-cart"><i class="fa fa-shopping-cart" id="quickViewAddCartBtn"></i>ADD TO CART</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const products = document.querySelectorAll('.product-item');
    const perPage = 6;
    let currentPage = 1;
    function showPage(page) {
        const totalPages = Math.max(1, Math.ceil(products.length / perPage));
        products.forEach((item, index) => {
            if (
                index >= (page - 1) * perPage &&
                index < page * perPage
            ) {
                item.style.display = "";
            } else {
                item.style.display = "none";
            }
        });
        document.getElementById('pageNumber').innerText = page + " / " + totalPages;
    }
    function nextPage() {
        const totalPages = Math.ceil(products.length / perPage);
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    }
    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    }
    showPage(1);
    function toggleNuts() {
        const nuts = document.getElementById("nuts-group");
        if (nuts.style.display === "none") {
            nuts.style.display = "block";
        } else {
            nuts.style.display = "none";
        }
    }
    function openProductOptions(event, productId) {
        event.preventDefault();
        event.stopPropagation();
        const panel = document.getElementById(
            'productOptionsModal' + productId
        );
        if (!panel) {
            return;
        }
        panel.classList.add('active');
    }
    function closeProductOptions(event, productId) {
        event.preventDefault();
        event.stopPropagation();
        const panel = document.getElementById(
            'productOptionsModal' + productId
        );
        if (!panel) {
            return;
        }
        panel.classList.remove('active');
    }
    function addProductToCart(productId) {
        const weightElement = document.getElementById(
            'weight' + productId
        );
        const errorElement = document.getElementById(
            'weightError' + productId
        );
        if (!weightElement || !errorElement) {
            return;
        }
        const weight = weightElement.value;
        if (weight === '') {
            errorElement.style.display = 'block';
            return false;
        }
        errorElement.style.display = 'none';
        return true;
    }
    function updateWeightPrice(productId, basePrice) {
        const weightElement = document.getElementById(
            'weight' + productId
        );
        const finalPriceInput = document.getElementById(
            'finalPrice' + productId
        );
        if (!weightElement || !finalPriceInput) {
            return;
        }
        const weight = weightElement.value;
        let multiplier = 1;
        if (weight === '250g') {
            multiplier = 1;
        }
        else if (weight === '500g') {
            multiplier = 2;
        }
        else if (weight === '1kg') {
            multiplier = 4;
        }
        const finalPrice = parseFloat(basePrice) * multiplier;
        finalPriceInput.value = finalPrice.toFixed(2);
    }
    let selectedProductId = null;
    let selectedProductPrice = 0;
    let quickViewQuantity = 1;
    let selectedWeightMultiplier = 1;
    function closeQuickView() {
        document.getElementById('quickViewModal').classList.remove('active');
    }
    function openQuickView(productId) {
        selectedProductId = productId;
        quickViewQuantity = 1;
        selectedWeightMultiplier = 1;
        document.getElementById('quickViewQuantityDisplay').textContent = '1';
        document.getElementById('quickViewQuantity').value = '1';
        document.getElementById('quickViewModal').classList.add('active');
        document.getElementById('quickViewTitle').textContent = 'Loading...';
        document.getElementById('quickViewPrice').textContent = '';
        document.getElementById('quickViewDescription').textContent = '';
        const addCartButton = document.querySelector('.quick-add-cart');
        addCartButton.disabled = true;
        addCartButton.innerHTML = 'Loading...';
        fetch('<?= base_url('quick-view') ?>/' + productId)
        .then(response => {
            if (!response.ok) {
                throw new Error('Product not found');
            }
            return response.json();
        })
        .then(data => {
            if (!data.status) {
                alert(data.message);
                closeQuickView();
                return;
            }
            const product = data.product;
            selectedProductPrice = parseFloat(product.product_price);
            document.getElementById('quickViewImage').src = '<?= base_url('uploads/products/') ?>' + product.product_image1;
            document.getElementById('quickViewTitle').textContent = product.product_title;
            document.getElementById('quickViewDescription').textContent = product.product_description;
            document.getElementById('quickViewProductId').value = product.id;
            document.getElementById('quickViewCartTitle').value = product.product_title;
            document.getElementById('quickViewCartImage').value = product.product_image1;
            document.getElementById('quickViewWeight').value = '';
            document.getElementById('quickViewFinalPrice').value = selectedProductPrice.toFixed(2);
            updateQuickViewPrice();
            if (product.status === 'active') {
                addCartButton.disabled = false;
                addCartButton.innerHTML = '<i class="fa fa-shopping-cart"></i> ADD TO CART';
            } else {
                addCartButton.disabled = true;
                addCartButton.innerHTML = 'CURRENTLY UNAVAILABLE';
            }
        })
        .catch(error => {
            console.error(error);
            document.getElementById('quickViewTitle').textContent = 'Unable to load product';
            addCartButton.disabled = true;
            addCartButton.innerHTML = 'CURRENTLY UNAVAILABLE';
        });
    }
    function updateQuickViewPrice() {
        const totalPrice = selectedProductPrice * selectedWeightMultiplier * quickViewQuantity;
        document.getElementById('quickViewPrice').textContent = '₹' + totalPrice.toLocaleString(
            'en-IN',
            {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }
        );
        document.getElementById('quickViewFinalPrice').value = totalPrice.toFixed(2);
    }
    function changeQuickQuantity(change) {
        const newQuantity = quickViewQuantity + change;
        if (newQuantity < 1) {
            return;
        }
        quickViewQuantity = newQuantity;
        document.getElementById('quickViewQuantityDisplay').textContent = quickViewQuantity;
        document.getElementById('quickViewQuantity').value = quickViewQuantity;
        updateQuickViewPrice();
    }
    document.addEventListener('DOMContentLoaded',
        function () {
            const weightSelect = document.getElementById('quickViewWeight');
            if (!weightSelect) {
                return;
            }
            weightSelect.addEventListener('change',
                function () {
                    const weight = this.value;
                    selectedWeightMultiplier = 1;
                    if (weight === '250g') {
                        selectedWeightMultiplier = 1;
                    }
                    else if (weight === '500g') {
                        selectedWeightMultiplier = 2;
                    }
                    else if (weight === '1kg') {
                        selectedWeightMultiplier = 4;
                    }
                    updateQuickViewPrice();
                }
            );
        }
    );
    document.addEventListener('click',
        function (event) {
            const modal = document.getElementById('quickViewModal');
            if (
                modal && modal.classList.contains('active') && event.target === modal
            ) 
            {
                closeQuickView();
            }
        }
    );
    function compareClicked(element, event) {
        event.preventDefault();
        event.stopPropagation();
        const icon = element.querySelector('i');
        if (
            !element.classList.contains('compare-added')
        ) 
        {
            icon.classList.remove('fa-exchange');
            icon.classList.add('fa-check');
            element.setAttribute(
                'title',
                'Compare products'
            );
            element.classList.add(
                'compare-added'
            );
        } else {

            window.location.reload();
        }
    }
</script>