<div class="container row mx-auto">
    <div class="col-md-8 mx-auto">
        <h1>Tambah Poli</h1>
        <?php echo form_open('poli/add'); ?>
        <div class="mb-3">
          <label for="nama_poli" class="form-label">Nama Poli</label>
          <input type="text" class="form-control" id="nama_poli" name="nama_poli" value="<?php echo isset($nama_poli) ? $nama_poli : ''; ?>">
          <div class="text-danger"><?php echo form_error('nama_poli'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>