<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Kunjungan</title>
</head>
<body>
    <h1>List Kunjungan</h1>
    <a href="<?= site_url('kunjungan/add'); ?>">Add Kunjungan</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID Kunjungan</th>
                <th>ID Pasien</th>
                <th>ID Dokter</th>
                <th>Tanggal Kunjungan</th>
                <th>Keluhan</th>
                <th>ID Poli</th>
                <th>ID User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kunjungan as $row): ?>
            <tr>
                <td><?= $row['id_kunjungan']; ?></td>
                <td><?= $row['id_pasien']; ?></td>
                <td><?= $row['id_dokter']; ?></td>
                <td><?= $row['tanggal_kunjungan']; ?></td>
                <td><?= $row['keluhan']; ?></td>
                <td><?= $row['id_poli']; ?></td>
                <td><?= $row['id_user']; ?></td>
                <td>
                    <a href="<?= base_url('kunjungan/edit/'.$row['id_kunjungan']); ?>">Edit</a>
                    <a href="<?= base_url('kunjungan/delete/'.$row['id_kunjungan']); ?>" onclick="return confirm('Are you sure you want to delete this kunjungan?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
