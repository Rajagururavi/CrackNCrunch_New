<?php if(!empty($brands)): ?>
    <?php foreach($brands as $b): ?>
        <p><?= $b->brand_title ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>No data</p>
<?php endif; ?>