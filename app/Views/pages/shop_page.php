<style>
    .no-product-msg {
        padding: 50px;
        border: 2px dashed #ddd;
        border-radius: 10px;
        background: #f9f9f9;
    }
</style>
<?= $this->include('templates/header'); ?>
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="row">
            <div class="container mt-5">
                <div class="no-product-msg text-center">
                    <?php if(isset($cat_name)): ?>
                        <h3>No stocks for this category</h3>
                        <h5 class="mt-2 text-primary">
                            Category: <?= esc($cat_name) ?>
                        </h5>
                    <?php elseif(isset($brand_name)): ?>
                        <h3>No stocks for this brand</h3>
                        <h5 class="mt-2 text-primary">
                            Brand: <?= esc($brand_name) ?>
                        </h5>
                    <?php else: ?>
                        <h3>No products available</h3>
                    <?php endif; ?>
                    <a href="<?= base_url('/') ?>" class="btn btn-primary mt-3">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="<?= base_url('/') ?>" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <?php if(!empty($brands)): ?>
                <?php foreach($brands as $b): ?>
                    <li class="nav-item">
                        <a href="<?= base_url('brand/'.$b->id.'/'.urlencode($b->brand_title)) ?>" class="nav-link text-light">
                            <?= esc($b->brand_title) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="text-light">No brands found</li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="<?= base_url('/') ?>" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
            <?php if(!empty($categories)): ?>
                <?php foreach($categories as $c): ?>
                    <li class="nav-item">
                        <a href="<?= base_url('category/'.$c->id.'/'.urlencode($c->cat_title)) ?>" class="nav-link text-light">
                            <?= esc($c->cat_title) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="text-light">No categories found</li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?= $this->include('templates/footer'); ?>