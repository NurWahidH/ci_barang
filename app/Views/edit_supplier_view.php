<?php /**
 * edit_supplier_view.php
 */ ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-info text-white">Edit Supplier</div>
        <div class="card-body">
            <form action="<?= base_url('supplier/update'); ?>" method="post">
                <input type="hidden" name="supplierid" value="<?= $supplier['supplierid']; ?>">
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="companyname" class="form-control" value="<?= $supplier['companyname']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="address" class="form-control" required><?= $supplier['address']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="phone" class="form-control" value="<?= $supplier['phone']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('supplier'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
