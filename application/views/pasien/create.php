<div class="container row mx-auto">
    <div class="col-md-8 mx-auto">
        <h1>Tambah Pasien</h1>
        <?php echo form_open('pasien/create'); ?>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>">
          <div class="text-danger"><?php echo form_error('nama'); ?></div>
        </div>
        <div class="mb-3">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo isset($tanggal_lahir) ? $tanggal_lahir : ''; ?>">
          <div class="text-danger"><?php echo form_error('tanggal_lahir'); ?></div>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>">
          <div class="text-danger"><?php echo form_error('alamat'); ?></div>
        </div>
        <div class="form-group">
            <label for="id_user">ID User:</label>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="" selected disabled>Select User</option>
                <?php foreach ($users as $row): ?>
                    <option value="<?= $row['id_user']; ?>"><?= $row['username']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>