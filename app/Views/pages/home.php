<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        background: #f3f3f3;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }
    .hero-banner {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
        margin-top: 145px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }
    .banner-slider {
        display: flex;
        width: 100%;
        height: 100%;
        transition: 1s ease-in-out;
    }
    .banner-slider img {
        min-width: 100%;
        width: 100%;
        height: 500px;
        object-fit: cover;
        flex-shrink: 0;
    }
    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        border: none;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.25);
        color: #fff;
        font-size: 22px;
        cursor: pointer;
        z-index: 100;
        transition: 0.3s;
    }
    .slider-btn:hover {
        background: #00bcd4;
    }
    .prev-btn {
        left: 20px;
    }
    .next-btn {
        right: 20px;
    }
    .category-section {
        padding: 40px 20px;
    }
    .section-title {
        text-align: center;
        font-size: 38px;
        font-weight: 700;
        color: #222;
        margin-bottom: 40px;
    }
    .category-row {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
    }
    .category-column {
        width: 100%;
    }
    .category-card {
        width: 100%;
        height: 280px;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        transition: 0.4s;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
    }
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    .category-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }
    .category-content {
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: #fff;
        padding: 10px;
        box-sizing: border-box;
    }
    .category-title {
        font-size: 18px;
        font-weight: 700;
        color: #222;
        margin: 0;
    }
    .no-product-msg {
        width: 100%;
        text-align: center;
        padding: 50px;
        background: #fff;
        border-radius: 15px;
        font-size: 22px;
        font-weight: 600;
        color: #777;
    }
    .product-section {
        width: 100%;
        padding: 40px 0;
    }
    .section-header {
        margin-left: 30px;
        margin-right: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }
    .section-heading {
        margin: 0;
        font-size: 32px;
        font-weight: 700;
        color: #222;
    }
    .view-all-btn {
        text-decoration: none;
        background: #000;
        color: #fff;
        padding: 10px 25px;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 600;
    }
    .view-all-btn:hover {
        background: #333;
    }
    .product-row {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        margin: 0 30px;
    }
    .product-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
    }
    .product-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
    }
    .premium-section {
        width: 100%;
        padding: 40px 20px;
        box-sizing: border-box;
    }
    .premium-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }
    .premium-main-title {
        margin: 0;
        font-size: 38px;
        font-weight: 700;
        color: #222;
    }
    .premium-view-btn {
        background: #000;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
    }
    .premium-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }
    .premium-card {
        background: #fff;
        border-radius: 0px;
        overflow: hidden;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
    }
    .premium-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    .premium-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
    }
    .premium-content {
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        text-align: center;
    }
    .premium-title {
        margin: 0;
        font-size: 17px;
        font-weight: 700;
        color: #222;
    }
    .nutrition-banner {
        width: 100%;
        margin: 20px 0;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }
    .nutrition-banner img {
        width: 100%;
        height: 450px;
        display: block;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .premium-main-title {
        word-break: break-word;
    }
    .premium-view-btn {
        flex-shrink: 0;
    }
    .category-img, .premium-image, .nutrition-banner img {
        width: 100%;
        display: block;
        object-fit: cover;
    }
    .image-wrapper {
        position: relative;
        overflow: hidden;
        width: 100%;
    }
    .image-wrapper>a {
        display: block;
        position: relative;
        width: 100%;
    }
    .premium-image {
        width: 100%;
        display: block;
        transition: opacity 0.4s ease;
    }
    .image1 {
        position: relative;
        z-index: 1;
    }
    .image2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        z-index: 2;
        transition: opacity 0.4s ease;
    }
    .image-wrapper:hover .image2 {
        opacity: 1;
    }
    .image-wrapper:hover .image1 {
        opacity: 0;
    }
    .sale-badge {
        position: absolute;
        top: 12px;
        left: 0px;
        background: black;
        color: #fff;
        padding: 6px 12px;
        font-size: 12px;
        font-weight: bold;
        border-radius: 0px;
        z-index: 5;
    }
    .sale {
        background: #28a745;
    }
    .unavailable {
        background: #dc3545;
    }
    .product-hover-actions {
        position: absolute;
        top: 12px;
        right: 12px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        z-index: 40;
        opacity: 0;
        visibility: hidden;
        transform: translateX(15px);
        transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
    }
    .image-wrapper:hover .product-hover-actions {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
    }
    .hover-action {
        position: relative;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        background: #fff;
        color: #222;
        border: none;
        border-radius: 50%;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        transition: background 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }
    .hover-action:hover {
        background: #000;
        color: #fff;
        transform: scale(1.08);
    }
    .hover-action i {
        line-height: 1;
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
    .cart-btn {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -60px;
        background: #000;
        color: #fff;
        text-decoration: none;
        padding: 12px 28px;
        border-radius: 30px;
        font-weight: 600;
        transition: 0.35s;
        z-index: 10;
    }
    .image-wrapper:hover .cart-btn {
        bottom: 20px;
    }
    .cart-btn:hover {
        background: #d32f2f;
    }
    .premium-card {
        position: relative;
    }
    .premium-column {
        position: relative;
    }
    .premium-title {
        margin-top: 12px;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.4;
    }
    .hover-action::after {
        content: attr(title);
        position: absolute;
        right: calc(100% + 10px);
        top: 50%;
        transform: translateY(-50%);
        background: #111;
        color: #fff;
        padding: 7px 10px;
        font-size: 11px;
        font-weight: 500;
        white-space: nowrap;
        border-radius: 4px;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: all 0.25s ease;
        z-index: 100;
    }
    .hover-action::before {
        content: "";
        position: absolute;
        right: calc(100% + 4px);
        top: 50%;
        transform: translateY(-50%);
        border-width: 5px 0 5px 6px;
        border-style: solid;
        border-color: transparent transparent transparent #111;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: all 0.25s ease;
        z-index: 100;
    }
    .hover-action:hover::after {
        opacity: 1;
        visibility: visible;
    }
    .hover-action:hover::before {
        opacity: 1;
        visibility: visible;
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
    @media (min-width: 1400px) {
        .premium-section {
            padding: 45px 40px;
        }
        .premium-grid {
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 25px;
        }
        .nutrition-banner img {
            height: 450px;
        }
        .premium-image {
            height: 320px;
        }
        .quick-view-box {
            width: 950px;
        }
        .quick-view-image img {
            max-width: 420px;
            height: 420px;
        }
    }
    @media (min-width: 1025px) and (max-width: 1399px) {
        .premium-section {
            padding: 35px 25px;
        }
        .premium-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
        }
        .premium-image {
            height: 280px;
        }
        .nutrition-banner img {
            height: 380px;
        }
        .premium-main-title {
            font-size: 32px;
        }
        .quick-view-box {
            width: 850px;
            max-width: 92%;
        }
        .quick-view-content {
            min-height: 450px;
        }
        .quick-view-image {
            padding: 25px;
        }
        .quick-view-image img {
            height: 360px;
        }
        .quick-view-details {
            padding: 40px 30px 30px;
        }
    }
    @media (min-width: 769px) and (max-width: 1024px) {
        body {
            overflow-x: hidden;
        }
        .hero-banner {
            height: 220px;
            margin-top: 80px;
        }
        .banner-slider img {
            height: 220px;
        }
        .category-section {
            padding: 30px 20px;
        }
        .category-row {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }
        .category-card {
            height: 250px;
        }
        .category-img {
            height: 190px;
        }
        .product-section {
            padding: 30px 0;
        }
        .section-header {
            margin-left: 20px;
            margin-right: 20px;
        }
        .section-heading {
            font-size: 28px;
        }
        .product-row {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin: 0 20px;
        }
        .premium-section {
            padding: 30px 20px;
        }
        .premium-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }
        .premium-main-title {
            font-size: 30px;
        }
        .nutrition-banner {
            margin: 15px 0;
        }
        .nutrition-banner img {
            height: 300px;
        }
        .premium-image {
            height: 260px;
        }
        .quick-view-modal {
            padding: 20px;
        }
        .quick-view-box {
            width: 90%;
            max-width: 760px;
            max-height: 88vh;
        }
        .quick-view-content {
            min-height: 420px;
        }
        .quick-view-image {
            width: 48%;
            min-height: 420px;
            padding: 25px;
        }
        .quick-view-image img {
            width: 100%;
            max-width: 300px;
            height: 320px;
        }
        .quick-view-details {
            width: 52%;
            padding: 35px 25px 25px;
        }
        .quick-view-details h2 {
            font-size: 23px;
        }
        .quick-view-price {
            font-size: 21px;
        }
    }
    @media (min-width: 601px) and (max-width: 768px) {
        .hero-banner {
            height: 200px;
            margin-top: 75px;
        }
        .banner-slider img {
            height: 200px;
        }
        .slider-btn {
            width: 42px;
            height: 42px;
            font-size: 18px;
        }
        .category-section {
            padding: 25px 15px;
        }
        .section-title {
            font-size: 30px;
            margin-bottom: 25px;
        }
        .category-row {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }
        .category-card {
            height: 250px;
        }
        .category-img {
            height: 190px;
        }
        .product-row {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
            margin: 0 15px;
        }
        .section-header {
            margin-left: 15px;
            margin-right: 15px;
        }
        .section-heading {
            font-size: 26px;
        }
        .premium-section {
            padding: 25px 15px;
        }
        .premium-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }
        .premium-main-title {
            font-size: 28px;
        }
        .premium-image {
            height: 250px;
        }
        .nutrition-banner img {
            height: 260px;
        }
        .quick-view-modal {
            padding: 15px;
        }
        .quick-view-box {
            width: 94%;
            max-width: 620px;
            max-height: 90vh;
            overflow-y: auto;
        }
        .quick-view-content {
            flex-direction: column;
            min-height: auto;
        }
        .quick-view-image {
            width: 100%;
            min-height: 280px;
            height: 280px;
            padding: 20px;
        }
        .quick-view-image img {
            width: 100%;
            max-width: 280px;
            height: 240px;
        }
        .quick-view-details {
            width: 100%;
            padding: 30px 25px 25px;
            overflow-y: visible;
        }
        .quick-view-details h2 {
            font-size: 22px;
            margin-right: 45px;
        }
        .quick-view-price {
            font-size: 20px;
        }
        .quick-view-description {
            max-height: 100px;
            overflow-y: auto;
        }
    }
    @media (min-width: 481px) and (max-width: 600px) {
        .hero-banner {
            height: 180px;
            margin-top: 70px;
        }
        .banner-slider img {
            height: 180px;
        }
        .slider-btn {
            width: 38px;
            height: 38px;
            font-size: 16px;
        }
        .prev-btn {
            left: 10px;
        }
        .next-btn {
            right: 10px;
        }
        .category-section {
            padding: 25px 12px;
        }
        .section-title {
            font-size: 27px;
            margin-bottom: 22px;
        }
        .category-row {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }
        .category-card {
            height: 220px;
        }
        .category-img {
            height: 165px;
        }
        .category-title {
            font-size: 15px;
        }
        .product-row {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin: 0 12px;
        }
        .section-header {
            margin: 0 12px 20px;
        }
        .section-heading {
            font-size: 23px;
        }
        .view-all-btn {
            padding: 8px 15px;
            font-size: 12px;
        }
        .premium-section {
            padding: 25px 12px;
        }
        .premium-header {
            margin-bottom: 20px;
        }
        .premium-main-title {
            font-size: 25px;
        }
        .premium-view-btn {
            padding: 8px 14px;
            font-size: 12px;
        }
        .premium-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }
        .premium-image {
            height: 220px;
        }
        .premium-content {
            height: auto;
            min-height: 55px;
        }
        .premium-title {
            font-size: 14px;
        }
        .nutrition-banner img {
            height: 220px;
        }
        .quick-view-modal {
            padding: 10px;
        }
        .quick-view-box {
            width: 100%;
            max-width: 500px;
            max-height: 92vh;
            border-radius: 10px;
            overflow-y: auto;
        }
        .quick-view-content {
            flex-direction: column;
            min-height: auto;
        }
        .quick-view-image {
            width: 100%;
            height: 240px;
            min-height: 240px;
            padding: 15px;
        }
        .quick-view-image img {
            width: 100%;
            max-width: 250px;
            height: 210px;
        }
        .quick-view-details {
            width: 100%;
            padding: 25px 20px;
            overflow: visible;
        }
        .quick-view-details h2 {
            font-size: 20px;
            margin-right: 40px;
        }
        .quick-view-price {
            font-size: 19px;
            margin-bottom: 15px;
        }
        .quick-view-description {
            font-size: 13px;
            line-height: 1.6;
            max-height: 85px;
            overflow-y: auto;
            margin-bottom: 20px;
        }
        .quick-view-select {
            height: 44px;
        }
        .quick-quantity {
            height: 44px;
        }
        .quick-quantity button {
            width: 42px;
            height: 44px;
        }
        .quick-quantity span {
            height: 44px;
            width: 50px;
        }
        .quick-add-cart {
            height: 48px;
        }
        .quick-view-close {
            width: 34px;
            height: 34px;
            top: 8px;
            right: 8px;
            font-size: 22px;
        }
    }
    @media (max-width: 480px) {
        body {
            overflow-x: hidden;
        }
        .hero-banner {
            height: 150px;
            margin-top: 65px;
        }
        .banner-slider img {
            height: 150px;
        }
        .slider-btn {
            width: 34px;
            height: 34px;
            font-size: 14px;
        }
        .prev-btn {
            left: 7px;
        }
        .next-btn {
            right: 7px;
        }
        .category-section {
            padding: 20px 10px;
        }
        .section-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .category-row {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }
        .category-card {
            height: 190px;
            border-radius: 8px;
        }
        .category-img {
            height: 140px;
        }
        .category-content {
            height: 50px;
            padding: 5px;
        }
        .category-title {
            font-size: 13px;
        }
        .product-section {
            padding: 25px 0;
        }
        .section-header {
            margin: 0 10px 18px;
        }
        .section-heading {
            font-size: 20px;
        }
        .view-all-btn {
            padding: 7px 12px;
            font-size: 11px;
        }
        .product-row {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            margin: 0 10px;
        }
        .premium-section {
            padding: 20px 10px;
        }
        .premium-header {
            margin-bottom: 18px;
            gap: 10px;
        }
        .premium-main-title {
            font-size: 21px;
            line-height: 1.3;
        }
        .premium-view-btn {
            padding: 7px 11px;
            font-size: 11px;
            white-space: nowrap;
        }
        .premium-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }
        .premium-card {
            border-radius: 7px;
        }
        .premium-image {
            height: 190px;
        }
        .premium-content {
            min-height: 50px;
            padding: 7px 5px;
        }
        .premium-title {
            font-size: 13px;
            line-height: 1.3;
        }
        .nutrition-banner {
            margin: 12px 0;
        }
        .nutrition-banner img {
            height: 170px;
        }
        .sale-badge {
            top: 8px;
            padding: 5px 8px;
            font-size: 9px;
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
        .product-bottom-action {
            left: 8px;
            right: 8px;
            bottom: 5px;
        }
        .select-option-btn {
            height: 38px;
            font-size: 9px;
        }
        .option-cart {
            font-size: 15px;
        }
        .quick-view-modal {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            padding: 8px;
            align-items: center;
            justify-content: center;
        }
        .quick-view-box {
            width: 100%;
            max-width: 100%;
            max-height: 94vh;
            border-radius: 9px;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }
        .quick-view-content {
            width: 100%;
            display: flex;
            flex-direction: column;
            min-height: auto;
        }
        .quick-view-image {
            width: 100%;
            height: 210px;
            min-height: 210px;
            padding: 12px;
            flex-shrink: 0;
        }
        .quick-view-image img {
            width: 100%;
            max-width: 220px;
            height: 185px;
            object-fit: contain;
        }
        .quick-view-details {
            width: 100%;
            padding: 22px 16px 18px;
            overflow: visible;
            box-sizing: border-box;
        }
        .quick-view-details h2 {
            margin: 0 35px 10px 0;
            font-size: 18px;
            line-height: 1.35;
        }
        .quick-view-price {
            margin-bottom: 13px;
            font-size: 18px;
        }
        .quick-view-description {
            margin-bottom: 18px;
            font-size: 12px;
            line-height: 1.6;
            max-height: 75px;
            overflow-y: auto;
        }
        .quick-view-label {
            margin-bottom: 6px;
            font-size: 11px;
        }
        .quick-view-select {
            width: 100%;
            height: 42px;
            margin-bottom: 17px;
            padding: 0 10px;
            font-size: 13px;
        }
        .quick-quantity {
            height: 42px;
            margin-bottom: 18px;
        }
        .quick-quantity button {
            width: 40px;
            height: 42px;
            font-size: 19px;
        }
        .quick-quantity span {
            width: 48px;
            height: 42px;
            font-size: 14px;
        }
        .quick-add-cart {
            width: 100%;
            height: 45px;
            font-size: 11px;
            border-radius: 6px;
        }
        .quick-view-close {
            top: 7px;
            right: 7px;
            width: 32px;
            height: 32px;
            font-size: 21px;
        }
    }
    @media (max-width: 359px) {
        .premium-grid {
            grid-template-columns: 1fr;
        }
        .product-row {
            grid-template-columns: 1fr;
        }
        .category-row {
            grid-template-columns: 1fr;
        }
        .premium-image {
            height: 250px;
        }
        .category-card {
            height: auto;
        }
        .category-img {
            height: 200px;
        }
        .nutrition-banner img {
            height: 150px;
        }
        .quick-view-image {
            height: 190px;
            min-height: 190px;
        }
        .quick-view-image img {
            height: 165px;
        }
    }
    @media (hover: none) and (pointer: coarse) {
        .premium-card:hover {
            transform: none;
        }
        .category-card:hover {
            transform: none;
        }
        .product-hover-actions {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }
        .product-bottom-action {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .hover-action:hover {
            transform: none;
        }
        .select-option-btn:hover {
            background: rgba(255, 255, 255, 0.75);
            color: #111;
        }
        .select-option-btn:hover .option-text {
            opacity: 1;
            visibility: visible;
        }
        .select-option-btn:hover .option-cart {
            opacity: 0;
            visibility: hidden;
        }
        .quick-add-cart:hover {
            transform: none;
            box-shadow: none;
        }
    }
    @media (max-height: 600px) and (orientation: landscape) {
        .quick-view-modal {
            padding: 8px;
        }
        .quick-view-box {
            max-height: 96vh;
        }
        .quick-view-content {
            flex-direction: row;
        }
        .quick-view-image {
            width: 45%;
            height: auto;
            min-height: 360px;
        }
        .quick-view-image img {
            height: 280px;
        }
        .quick-view-details {
            width: 55%;
            padding: 25px;
        }
        .quick-view-description {
            max-height: 65px;
            overflow-y: auto;
        }
    }
</style>
<style>
    .wishlist-action {
        background: #ffffff !important;
        color: #000000 !important;
    }
    .wishlist-action i {
        color: #000000 !important;
    }
    .wishlist-action.wishlist-selected {
        background: #ffffff !important;
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
</style>
<div class="hero-banner">
    <div class="banner-slider" id="bannerSlider">
        <img src="<?= base_url('uploads/2.PNG'); ?>">
        <img src="<?= base_url('uploads/3.PNG'); ?>">
        <img src="<?= base_url('uploads/4.PNG'); ?>">
    </div>
    <button class="slider-btn prev-btn" onclick="prevSlide()">❮</button>
    <button class="slider-btn next-btn" onclick="nextSlide()">❯</button>
</div>
<div class="container-fluid category-section">
    <h1 class="section-title">Our Categories</h1>
    <div class="category-row">
        <?php if (!empty($categories)): ?>
            <?php foreach ($categories as $c): ?>
                <div class="category-column">
                    <div class="category-card">
                        <a href="<?= base_url('shop/' . $c->cat_title) ?>">
                            <img src="<?= base_url('uploads/categories/' . $c->cat_image) ?>" class="category-img">
                        </a>
                        <div class="category-content">
                            <h3 class="category-title"><?= $c->cat_title ?></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="no-product-msg">No Categories Found</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php if (!empty($brands)): ?>
    <?php foreach ($brands as $brand): ?>
        <div class="nutrition-banner">
            <img src="<?= base_url('uploads/brands/' . $brand->brand_image) ?>">
        </div>
        <div class="premium-section">
            <div class="premium-header">
                <h2 class="premium-main-title">
                    <?= $brand->brand_title ?>
                </h2>
                <a href="<?= base_url('shop/' . urlencode($brand->brand_title)) ?>" class="premium-view-btn">View All</a>
            </div>
            <div class="premium-grid">
                <?php if (!empty($brand->products)): ?>
                    <?php foreach ($brand->products as $p): ?>
                        <div class="premium-column">
                            <div class="premium-card">
                                <div class="image-wrapper">
                                    <?php if ($p['status'] == 'active'): ?>
                                        <span class="sale-badge">SALE</span>
                                    <?php else: ?>
                                        <span class="sale-badge unavailable">CURRENTLY UNAVAILABLE</span>
                                    <?php endif; ?>
                                    <a href="<?= base_url('product_view/' . $p['id']) ?>" class="product-image-link">
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
                                        <a href="#"
   class="hover-action wishlist-action"
   title="Add to Wishlist"
   data-id="<?= $p['id'] ?>"
   data-logged-in="<?= session()->get('user_id') ? '1' : '0' ?>"
   onclick="wishlistClicked(this, event)">

    <i class="fa fa-heart-o"></i>

</a>
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
                                <div class="premium-content">
                                    <h3 class="premium-title">
                                        <?= esc($p['product_title']) ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="no-product-msg">No Products Found</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
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
    let slider = document.getElementById("bannerSlider");
    let currentSlide = 0;
    let totalSlides = slider.children.length;
    function nextSlide() {
        currentSlide++;
        if (currentSlide >= totalSlides) {
            currentSlide = 0;
        }
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
    function prevSlide() {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = totalSlides - 1;
        }
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
    function openProductOptions(event, productId) {
        event.preventDefault();
        event.stopPropagation();
        const panel = document.getElementById('productOptionsModal' + productId);
        if (!panel) {
            return;
        }
        panel.classList.add('active');
    }
    function closeProductOptions(event, productId) {
        event.preventDefault();
        event.stopPropagation();
        const panel = document.getElementById('productOptionsModal' + productId);
        if (!panel) {
            return;
        }
        panel.classList.remove('active');
    }
    function addProductToCart(productId) {
        const weight = document.getElementById('weight' + productId).value;
        const error = document.getElementById('weightError' + productId);
        if (weight === '') {
            error.style.display = 'block';
            return;
        }
        error.style.display = 'none';
        const form = document.createElement('form');
        form.method = 'POST';
        form.action =
            '<?= base_url('cart/add') ?>/' + productId;
        const productInput = document.createElement('input');
        productInput.type = 'hidden';
        productInput.name = 'product_id';
        productInput.value = productId;
        form.appendChild(productInput);
        const weightInput = document.createElement('input');
        weightInput.type = 'hidden';
        weightInput.name = 'weight';
        weightInput.value = weight;
        form.appendChild(weightInput);
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '<?= csrf_token() ?>';
        csrfInput.value = '<?= csrf_hash() ?>';
        form.appendChild(csrfInput);
        document.body.appendChild(form);
        form.submit();
    }
    function updateWeightPrice(productId, basePrice) {
        const weight = document.getElementById('weight' + productId).value;
        const finalPriceInput = document.getElementById('finalPrice' + productId);
        const priceDisplay = document.getElementById('weightPrice' + productId);
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
        const finalPrice = basePrice * multiplier;
        finalPriceInput.value = finalPrice;
        if (priceDisplay) {
            priceDisplay.innerText = '₹' + Number(finalPrice).toLocaleString(
                'en-IN',
                {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                }
            );
        }
    }
    let selectedProductId = null;
    let selectedProductPrice = 0;
    let quickViewQuantity = 1;
    function closeQuickView() {
        document.getElementById('quickViewModal').classList.remove('active');
    }
    function openQuickView(productId) {
        selectedProductId = productId;
        quickViewQuantity = 1;
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
                throw new Error(
                    'Product not found'
                );
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
            document.getElementById('quickViewPrice').textContent = '₹' + Number(product.product_price).toLocaleString(
                'en-IN',
                {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                }
            );
            document.getElementById('quickViewDescription').textContent = product.product_description;
            document.getElementById('quickViewProductId').value = product.id;
            document.getElementById('quickViewCartTitle').value = product.product_title;
            document.getElementById('quickViewCartImage').value = product.product_image1;
            document.getElementById('quickViewFinalPrice').value = product.product_price;
            document.getElementById('quickViewWeight').value = '';
            quickViewQuantity = 1;
            document.getElementById('quickViewQuantityDisplay').textContent = '1';
            document.getElementById('quickViewQuantity').value = '1';
            if (product.status === 'active') {
                addCartButton.disabled = false;
                addCartButton.innerHTML = '<i class="fa fa-shopping-cart"></i> ADD TO CART';
            }
            else {
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
    function changeQuickQuantity(change) {
        quickViewQuantity += change;
        if (quickViewQuantity < 1) {
            quickViewQuantity = 1;
        }
        document.getElementById('quickViewQuantityDisplay').textContent = quickViewQuantity;
        document.getElementById('quickViewQuantity').value = quickViewQuantity;
        const weight = document.getElementById('quickViewWeight').value;
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
        const singleItemPrice = selectedProductPrice * multiplier;
        const totalPrice = singleItemPrice * quickViewQuantity;
        document.getElementById('quickViewPrice').textContent = '₹' + Number(totalPrice).toLocaleString(
            'en-IN',
            {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }
        );
        document.getElementById('quickViewFinalPrice').value = totalPrice;
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
                    const singleItemPrice = selectedProductPrice * multiplier;
                    const finalPrice = singleItemPrice * quickViewQuantity;
                    document.getElementById('quickViewPrice').textContent = '₹' + Number(finalPrice).toLocaleString(
                        'en-IN',
                        {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }
                    );
                    document.getElementById('quickViewFinalPrice').value = finalPrice;
                }
            );
        }
    );
    document.addEventListener('click',
        function (event) {
            const modal = document.getElementById('quickViewModal');
            if (modal && modal.classList.contains('active') && event.target === modal) 
            {
                closeQuickView();
            }
        }
    );
    // function compareClicked(element, event) {
    //     event.preventDefault();
    //     const icon = element.querySelector('i');
    //     if (!element.classList.contains('compare-added')) 
    //     {
    //         icon.classList.remove('fa-exchange');
    //         icon.classList.add('fa-check');
    //         element.setAttribute(
    //             'title',
    //             'Compare products'
    //         );
    //         element.classList.add(
    //             'compare-added'
    //         );
    //     }
    //     else {
    //         window.location.reload();
    //     }
    // }
</script>
<script>

window.wishlistIds = window.wishlistIds || [];

function wishlistClicked(element, event)
{
    event.preventDefault();

    const productId = String(element.dataset.id);
    const icon = element.querySelector('i');

    if (!icon) {
        return;
    }


    // =====================================
    // WHITE -> RED
    // ADD
    // =====================================

    if (icon.classList.contains('fa-heart-o'))
    {
        icon.classList.remove('fa-heart-o');
        icon.classList.add('fa-heart');

        icon.style.color = 'red';

        element.setAttribute(
            'title',
            'Remove from Wishlist'
        );


        if (!window.wishlistIds.includes(productId))
        {
            window.wishlistIds.push(productId);
        }


        // Send ID to UserController
        sendWishlistId(productId);


        // Popup
        alert(
            'Item added to wishlist\nProduct ID: ' + productId
        );
    }


    // =====================================
    // RED -> WHITE
    // REMOVE
    // =====================================

    else
    {
        icon.classList.remove('fa-heart');
        icon.classList.add('fa-heart-o');

        icon.style.color = 'white';

        element.setAttribute(
            'title',
            'Add to Wishlist'
        );


        window.wishlistIds =
            window.wishlistIds.filter(function(id)
            {
                return id !== productId;
            });


        alert(
            'Item removed from wishlist\nProduct ID: ' + productId
        );
    }
}



function sendWishlistId(productId)
{
    const formData = new FormData();

    formData.append(
        'product_id',
        productId
    );

    formData.append(
        '<?= csrf_token() ?>',
        '<?= csrf_hash() ?>'
    );


    fetch(
        "<?= base_url('wishlist/product') ?>",
        {
            method: 'POST',

            body: formData,

            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    )
    .then(function(response)
    {
        return response.json();
    })
    .then(function(data)
    {
        console.log(
            'UserController received:',
            data
        );
    })
    .catch(function(error)
    {
        console.error(
            'Wishlist error:',
            error
        );
    });
}

</script>