<div class="container mt-5">
        <h1>Add Kunjungan</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('kunjungan/add'); ?>
            <div class="form-group">
                <label for="id_pasien">ID Pasien:</label>
                <select class="form-control" name="id_pasien" id="id_pasien" required>
                    <option value="">Select Pasien</option>
                    <?php foreach ($pasien as $row): ?>
                        <option value="<?= $row['id_pasien']; ?>"><?= $row['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_dokter">ID Dokter:</label>
                <select class="form-control" name="id_dokter" id="id_dokter" required>
                    <option value="">Select Dokter</option>
                    <?php foreach ($dokter as $row): ?>
                        <option value="<?= $row['id_dokter']; ?>"><?= $row['nama_dokter']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
                <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" required>
            </div>

            <div class="form-group">
                <label for="keluhan">Keluhan:</label>
                <input type="text" class="form-control" name="keluhan" id="keluhan" required>
            </div>

            <div class="form-group">
                <label for="id_poli">ID Poli:</label>
                <select class="form-control" name="id_poli" id="id_poli" required>
                    <option value="">Select Poli</option>
                    <?php foreach ($poli as $row): ?>
                        <option value="<?= $row['id_poli']; ?>"><?= $row['nama_poli']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_user">ID User:</label>
                <select class="form-control" name="id_user" id="id_user" required>
                    <option value="">Select User</option>
                    <?php foreach ($users as $row): ?>
                        <option value="<?= $row['id_user']; ?>"><?= $row['username']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        <?php echo form_close(); ?>
    </div>