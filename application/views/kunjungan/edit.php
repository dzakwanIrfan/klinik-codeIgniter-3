<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kunjungan</title>
</head>
<body>
    <h1>Edit Kunjungan</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('kunjungan/edit/'.$kunjungan['id_kunjungan']); ?>
        <label for="id_pasien">ID Pasien:</label>
        <select name="id_pasien" id="id_pasien" required>
            <?php foreach ($pasien as $row): ?>
                <option value="<?= $row['id_pasien']; ?>" <?php if($row['id_pasien'] == $kunjungan['id_pasien']) echo "selected"; ?>><?= $row['nama']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="id_dokter">ID Dokter:</label>
        <select name="id_dokter" id="id_dokter" required>
            <?php foreach ($dokter as $row): ?>
                <option value="<?= $row['id_dokter']; ?>" <?php if($row['id_dokter'] == $kunjungan['id_dokter']) echo "selected"; ?>><?= $row['nama_dokter']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
        <input type="date" name="tanggal_kunjungan" id="tanggal_kunjungan" value="<?= $kunjungan['tanggal_kunjungan']; ?>" required><br>

        <label for="keluhan">Keluhan:</label>
        <input type="text" name="keluhan" id="keluhan" value="<?= $kunjungan['keluhan']; ?>" required><br>

        <label for="id_poli">ID Poli:</label>
        <select name="id_poli" id="id_poli" required>
            <?php foreach ($poli as $row): ?>
                <option value="<?= $row['id_poli']; ?>" <?php if($row['id_poli'] == $kunjungan['id
