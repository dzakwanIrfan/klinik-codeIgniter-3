<div class="container row mx-auto">
    <div class="col-md-8 mx-auto">
        <h1>Tambah Dokter</h1>
        <?php echo form_open('dokter/create'); ?>
        <div class="mb-3">
          <label for="nama_dokter" class="form-label">Nama Dokter</label>
          <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?php echo isset($nama_dokter) ? $nama_dokter : ''; ?>">
          <div class="text-danger"><?php echo form_error('nama_dokter'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>