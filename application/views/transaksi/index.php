<div class="row container mx-auto">
    <div class="col-md-8 mx-auto">
        <a href="<?= site_url('/transaksi/create') ?>" class="link">Tambah Transaksi</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($transaksi_transaksi as $transaksi): ?>
                <tr>
                    <th scope="row"><?= $nomor; ?></th>
                    <td><?= $transaksi['nama_peminjam']; ?></td>
                    <td><?= $transaksi['nama_buku']; ?></td>
                    <td><?= $transaksi['tanggal_pinjam']; ?></td>
                    <td><?= $transaksi['tanggal_kembali']; ?></td>
                    <td>
                        <a href="<?= site_url('/transaksi/edit/'.$transaksi['id']) ?>"><button class="btn btn-warning">Edit</button></a>
                        <a href="<?= site_url('/transaksi/delete/'.$transaksi['id']) ?>"><button class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data transaksi ini?')">Hapus</button></a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>