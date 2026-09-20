<h3>Add Product</h3>
<form method="post" action="<?= base_url('admin/products/store') ?>">
    <input type="text" name="name" class="form-control mb-2" placeholder="Product Name">
    <input type="text" name="price" class="form-control mb-2" placeholder="Price">
    <button class="btn btn-primary">Save</button>
</form>