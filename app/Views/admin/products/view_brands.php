<!DOCTYPE html>
<html>
    <head>
        <title>View Brands</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <style>
            .container {
                width: 95%;
                margin: 30px auto;
            }
            .page-header {
                margin-bottom: 20px;
            }
            .page-header h2 {
                font-size: 26px;
                color: #333;
                margin: 0;
            }
            .table-box {
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, .08);
            }
            .brand-table {
                width: 100%;
                border-collapse: collapse;
            }
            .brand-table thead {
                background: #222;
                color: #fff;
            }
            .brand-table th, .brand-table td {
                padding: 14px;
                text-align: center;
                border-bottom: 1px solid #eee;
            }
            .brand-table tbody tr:hover {
                background: #f8f8f8;
            }
            .brand-img {
                width: 70px;
                height: 70px;
                object-fit: contain;
                border-radius: 8px;
                border: 1px solid #ddd;
                padding: 5px;
                background: #fff;
            }
            .edit-btn, .delete-btn {
                width: 38px;
                height: 38px;
                border: none;
                border-radius: 50%;
                cursor: pointer;
                color: #fff;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                margin: 0 4px;
                transition: .3s;
            }
            .edit-btn {
                background: #007bff;
            }
            .edit-btn:hover {
                background: #0056b3;
            }
            .delete-btn {
                background: #dc3545;
            }
            .delete-btn:hover {
                background: #b52a37;
            }
            .modal {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, .65);
                justify-content: center;
                align-items: center;
            }
            .modal-content {
                width: 500px;
                max-width: 90%;
                background: #fff;
                border-radius: 12px;
                padding: 25px;
                position: relative;
                box-shadow: 0 10px 30px rgba(0, 0, 0, .3);
                animation: popup .3s ease;
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
                text-align: center;
                color: #333;
            }
            .close {
                position: absolute;
                right: 18px;
                top: 10px;
                font-size: 28px;
                cursor: pointer;
                color: #666;
            }
            .close:hover {
                color: red;
            }
            .form-group {
                margin-bottom: 18px;
            }
            .form-group label {
                display: block;
                font-weight: 600;
                margin-bottom: 8px;
                color: #333;
            }
            .form-group input[type="text"] {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 6px;
                font-size: 15px;
                box-sizing: border-box;
            }
            .form-group input[type="file"] {
                margin-top: 5px;
            }
            #brandPreview {
                width: 120px;
                height: 120px;
                object-fit: contain;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 5px;
                background: #f5f5f5;
                display: block;
                margin-bottom: 10px;
            }
            .update-btn {
                width: 100%;
                padding: 13px;
                border: none;
                border-radius: 6px;
                background: #28a745;
                color: #fff;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
            }
            .update-btn:hover {
                background: #218838;
            }
            .delete-modal-content {
                width: 400px;
                max-width: 90%;
                background: #fff;
                border-radius: 12px;
                padding: 30px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0, 0, 0, .3);
                animation: popup .3s ease;
            }
            .delete-icon {
                font-size: 45px;
                color: #dc3545;
                margin-bottom: 15px;
            }
            .delete-modal-content h3 {
                margin-bottom: 10px;
                color: #333;
            }
            .delete-modal-content p {
                color: #666;
                margin-bottom: 25px;
            }
            .confirm-delete-btn, .cancel-delete-btn {
                padding: 10px 25px;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 15px;
                margin: 0 5px;
            }
            .confirm-delete-btn {
                background: #dc3545;
                color: #fff;
            }
            .confirm-delete-btn:hover {
                background: #b52a37;
            }
            .cancel-delete-btn {
                background: #6c757d;
                color: #fff;
            }
            .cancel-delete-btn:hover {
                background: #545b62;
            }
            @media(max-width: 768px) {
                .container {
                    width: 95%;
                }
                .brand-table th, .brand-table td {
                    padding: 10px 5px;
                }
                .brand-img {
                    width: 55px;
                    height: 55px;
                }
            }
        </style>
    </head>
    <body>
        <?= view('admin/templates/header') ?>
        <div class="container">
            <div class="page-header">
                <h2>Brand List</h2>
            </div>
            <div class="table-box">
                <table class="brand-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Brand Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($brands)): ?>
                            <?php foreach ($brands as $row): ?>
                                <tr>
                                    <td>
                                        <?= esc($row['id']); ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($row['brand_image'])): ?>
                                            <img src="<?= base_url('uploads/brands/' . $row['brand_image']); ?>" class="brand-img" alt="Brand">
                                        <?php else: ?>
                                            No Image
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?= esc($row['brand_title']); ?>
                                    </td>
                                    <td>
                                        <button type="button" class="edit-btn" data-id="<?= esc($row['id']); ?>" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="delete-btn" data-id="<?= esc($row['id']); ?>" title="Delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">No Brands Found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal" id="editModal">
            <div class="modal-content">
                <span class="close" id="closeEdit">&times;</span>
                <h3>Edit Brand</h3>
                <form id="updateBrandForm" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="brandId">
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" name="brand_title" id="brandName" required>
                    </div>
                    <div class="form-group">
                        <label>Current Image</label>
                        <img id="brandPreview" src="" alt="Brand Image">
                    </div>
                    <div class="form-group">
                        <label>Change Image</label>
                        <input type="file" name="brand_image" accept="image/*">
                    </div>
                    <button type="submit" class="update-btn">Update Brand</button>
                </form>
            </div>
        </div>
        <div class="modal" id="deleteModal">
            <div class="delete-modal-content">
                <div class="delete-icon">
                    <i class="fa fa-trash"></i>
                </div>
                <h3>Are you sure?</h3>
                <p>Do you really want to delete this brand?</p>
                <button type="button" class="confirm-delete-btn" id="confirmDelete">Yes</button>
                <button type="button" class="cancel-delete-btn" id="cancelDelete">No</button>
            </div>
        </div>
        <script>
            const editModal = document.getElementById("editModal");
            const closeEdit = document.getElementById("closeEdit");
            document.querySelectorAll(".edit-btn").forEach(function (button) {
                button.addEventListener("click", function () {
                    const brandId = this.getAttribute("data-id");
                    editModal.style.display = "flex";
                    fetch("<?= base_url('admin/products/get_brand'); ?>/" + brandId).then(response => response.json()).then(data => {
                        document.getElementById("brandId").value = data.id;
                        document.getElementById("brandName").value = data.brand_title;
                        if (data.brand_image) {
                            document.getElementById("brandPreview").src = "<?= base_url('uploads/brands/'); ?>" + data.brand_image;
                        } else {
                            document.getElementById("brandPreview").src = "";
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
                });
            });
            closeEdit.onclick = function () {
                editModal.style.display = "none";
            };
            document.getElementById("updateBrandForm").addEventListener("submit", function (e) {
                e.preventDefault();
                const formData = new FormData(this);
                fetch("<?= base_url('admin/products/update_brand'); ?>",
                    {
                        method: "POST",
                        body: formData
                    }
                )
                .then(response => response.json())
                .then(result => {
                    if (result.status === "success") {
                        alert("Brand Updated Successfully");
                        editModal.style.display = "none";
                        location.reload();
                    } else {
                        alert(
                            result.message ||
                            "Brand Update Failed"
                        );
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert("Something went wrong");
                });
            });
            const deleteModal = document.getElementById("deleteModal");
            const confirmDelete = document.getElementById("confirmDelete");
            const cancelDelete = document.getElementById("cancelDelete");
            let deleteBrandId = null;
            document.querySelectorAll(".delete-btn").forEach(function (button) {
                button.addEventListener("click", function () {
                    deleteBrandId = this.getAttribute("data-id");
                    deleteModal.style.display = "flex";
                });
            });
            confirmDelete.onclick = function () {
                if (!deleteBrandId) {
                    return;
                }
                fetch("<?= base_url('admin/products/delete_brand'); ?>/" + deleteBrandId,
                    {
                        method: "DELETE"
                    }
                )
                .then(response => response.json())
                .then(result => {
                    if (result.status === "success") {
                        alert("Brand Deleted Successfully");
                        deleteModal.style.display = "none";
                        location.reload();
                    } else {
                        alert(result.message || "Brand Delete Failed");
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert("Something went wrong");
                });
            };
            cancelDelete.onclick = function () {
                deleteModal.style.display = "none";
                deleteBrandId = null;
            };
            window.onclick = function (e) {
                if (e.target === editModal) {
                    editModal.style.display = "none";
                }
                if (e.target === deleteModal) {
                    deleteModal.style.display = "none";
                    deleteBrandId = null;
                }
            };
        </script>
    </body>
</html>