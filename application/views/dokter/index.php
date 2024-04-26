<div class="row container mx-auto">
    <div class="col-md-8 mx-auto">
        <a href="<?= site_url('/dokter/create') ?>" class="link">Tambah Dokter</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($dokter_dokter as $dokter): ?>
                <tr>
                    <th scope="row"><?= $nomor; ?></th>
                    <td><?= $dokter['nama_dokter']; ?></td>
                    <td>
                        <a href="<?= site_url('/dokter/edit/'.$dokter['id_dokter']) ?>"><button class="btn btn-warning">Edit</button></a>
                        <a href="<?= site_url('/dokter/delete/'.$dokter['id_dokter']) ?>"><button class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data dokter ini?')">Hapus</button></a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>