<div class="container row mx-auto">
    <div class="col-md-8 mx-auto">
        <h1>Tambah Buku</h1>
        <?php echo form_open('buku/create'); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Buku</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?php echo isset($judul) ? $judul : ''; ?>">
          <div class="text-danger"><?php echo form_error('judul'); ?></div>
        </div>
        <div class="mb-3">
          <label for="pengarang" class="form-label">Pengarang Buku</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo isset($pengarang) ? $pengarang : ''; ?>">
          <div class="text-danger"><?php echo form_error('pengarang'); ?></div>
        </div>
        <div class="mb-3">
          <label for="isbn" class="form-label">ISBN Buku</label>
          <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo isset($isbn) ? $isbn : ''; ?>">
          <div class="text-danger"><?php echo form_error('isbn'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>