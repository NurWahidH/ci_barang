<?php /**
 * supplier_view.php
 */ ?>
<div class="container mt-4">
    <a href="<?= base_url('supplier/tambah'); ?>" class="btn btn-success mb-3">Tambah Supplier</a>
    <div class="card">
        <div class="card-header bg-info text-white">Data Supplier</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($suppliers as $row): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['companyname']; ?></td>
                        <td><?= $row['address']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td>
                            <a href="<?= base_url('supplier/edit/'.$row['supplierid']); ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('supplier/hapus/'.$row['supplierid']); ?>" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>