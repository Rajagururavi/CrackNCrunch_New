<?= $this->include('templates/header'); ?>
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="row">
            <?php if(!empty($products)): ?>
                <?php foreach($products as $p): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="<?= base_url('uploads/products/'.$p->product_image1) ?>" class="card-img-top" style="height:200px; object-fit:contain;">
                            <div class="card-body">
                                <h5><?= $p->product_title ?></h5>
                                <p><?= $p->product_price ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h5 class="text-danger">No products found</h5>
            <?php endif; ?>
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