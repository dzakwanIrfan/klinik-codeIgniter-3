
    <div class="row container mx-auto">
    <div class="col-md-8 mx-auto">
        <a href="<?= site_url('/poli/add') ?>" class="link">Tambah Poli</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Poli</th>
                    <th>Nama Poli</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($poli as $row): ?>
                <tr>
                    <td><?= $row['id_poli']; ?></td>
                    <td><?= $row['nama_poli']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?= site_url('poli/edit/'.$row['id_poli']); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?= site_url('poli/delete/'.$row['id_poli']); ?>" onclick="return confirm('Are you sure you want to delete this poli?')">Delete</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
