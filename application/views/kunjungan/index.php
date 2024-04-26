    <div class="row container mx-auto">
    <div class="col-md-10 mx-auto">
        <a href="<?= site_url('/kunjungan/add') ?>" class="link">Tambah Kunjungan</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Keluhan</th>
                    <th>Poli</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($kunjungan as $row): ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $row['nama_pasien']; ?></td>
                    <td><?= $row['nama_dokter']; ?></td>
                    <td><?= $row['tanggal_kunjungan']; ?></td>
                    <td><?= $row['keluhan']; ?></td>
                    <td><?= $row['nama_poli']; ?></td>
                    <td><?= $row['nama_user']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?= site_url('kunjungan/edit/'.$row['id_kunjungan']); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?= site_url('kunjungan/delete/'.$row['id_kunjungan']); ?>" onclick="return confirm('Are you sure you want to delete this kunjungan?')">Delete</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
