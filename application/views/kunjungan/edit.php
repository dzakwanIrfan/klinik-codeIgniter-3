<div class="container mt-5">
        <h1>Add Kunjungan</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('kunjungan/edit/'.$kunjungan['id_kunjungan']); ?>
            <div class="form-group">
                <label for="id_pasien">ID Pasien:</label>
                <select class="form-control" name="id_pasien" id="id_pasien" required>
                    <option value="">Select Pasien</option>
                    <?php foreach ($pasien as $row): ?>
                        <option value="<?= $row['id_pasien']; ?>" <?php if($row['id_pasien'] == $kunjungan['id_pasien']) echo 'selected' ?>><?= $row['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_dokter">ID Dokter:</label>
                <select class="form-control" name="id_dokter" id="id_dokter" required>
                    <option value="">Select Dokter</option>
                    <?php foreach ($dokter as $row): ?>
                        <option value="<?= $row['id_dokter']; ?>" <?php if($row['id_dokter'] == $kunjungan['id_dokter']) echo 'selected' ?>><?= $row['nama_dokter']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
                <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" required value="<?= $kunjungan['tanggal_kunjungan'] ?>">
            </div>

            <div class="form-group">
                <label for="keluhan">Keluhan:</label>
                <input type="text" class="form-control" name="keluhan" id="keluhan" required value="<?= $kunjungan['keluhan'] ?>">
            </div>

            <div class="form-group">
                <label for="id_poli">ID Poli:</label>
                <select class="form-control" name="id_poli" id="id_poli" required>
                    <option value="">Select Poli</option>
                    <?php foreach ($poli as $row): ?>
                        <option value="<?= $row['id_poli']; ?>" <?php if($row['id_poli'] == $kunjungan['id_poli']) echo 'selected' ?>><?= $row['nama_poli']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_user">ID User:</label>
                <select class="form-control" name="id_user" id="id_user" required>
                    <option value="">Select User</option>
                    <?php foreach ($users as $row): ?>
                        <option value="<?= $row['id_user']; ?>" <?php if($row['id_user'] == $kunjungan['id_user']) echo 'selected' ?>><?= $row['username']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        <?php echo form_close(); ?>
    </div>