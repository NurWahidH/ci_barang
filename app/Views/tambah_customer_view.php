<?php /**
 * tambah_customer_view.php
 */ ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-info text-white">Tambah Customer</div>
        <div class="card-body">
            <form action="<?= base_url('customer/add'); ?>" method="post">
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="companyname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="address" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('customer'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
