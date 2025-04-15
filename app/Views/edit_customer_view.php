<?php /**
 * edit_customer_view.php
 */ ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-info text-white">Edit Customer</div>
        <div class="card-body">
            <form action="<?= base_url('customer/update'); ?>" method="post">
                <input type="hidden" name="customerid" value="<?= $customer['customerid']; ?>">
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="companyname" class="form-control" value="<?= $customer['companyname']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="address" class="form-control" required><?= $customer['address']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="phone" class="form-control" value="<?= $customer['phone']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('customer'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
