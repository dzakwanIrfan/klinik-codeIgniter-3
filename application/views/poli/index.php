
    <h1>List Poli</h1>
    <a href="<?= site_url('poli/add'); ?>">Add Poli</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID Poli</th>
                <th>Nama Poli</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($poli as $row): ?>
            <tr>
                <td><?= $row['id_poli']; ?></td>
                <td><?= $row['nama_poli']; ?></td>
                <td>
                    <a href="<?= base_url('poli/edit/'.$row['id_poli']); ?>">Edit</a>
                    <a href="<?= base_url('poli/delete/'.$row['id_poli']); ?>" onclick="return confirm('Are you sure you want to delete this poli?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

