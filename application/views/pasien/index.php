<div class="row container mx-auto">
    <div class="col-md-8 mx-auto">
        <a href="<?= site_url('/pasien/create') ?>" class="link">Tambah Pasien</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Id User</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($pasien_pasien as $pasien): ?>
                <tr>
                    <th scope="row"><?= $nomor; ?></th>
                    <td><?= $pasien['nama']; ?></td>
                    <td><?= $pasien['tanggal_lahir']; ?></td>
                    <td><?= $pasien['alamat']; ?></td>
                    <td><?= $pasien['id_user']; ?></td>
                    <td>
                        <a href="<?= site_url('/pasien/edit/'.$pasien['id_pasien']) ?>"><button class="btn btn-warning">Edit</button></a>
                        <a href="<?= site_url('/pasien/delete/'.$pasien['id_pasien']) ?>"><button class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data buku ini?')">Hapus</button></a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>