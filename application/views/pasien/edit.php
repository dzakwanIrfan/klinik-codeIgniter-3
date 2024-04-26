<div class="container row mx-auto">
    <div class="col-md-8 mx-auto">
        <h1>Edit Buku</h1>
        <?php echo form_open('buku/edit/'.$buku['id']); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Buku</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>">
          <div class="text-danger"><?php echo form_error('judul'); ?></div>
        </div>
        <div class="mb-3">
          <label for="pengarang" class="form-label">Pengarang Buku</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku['pengarang'] ?>">
          <div class="text-danger"><?php echo form_error('pengarang'); ?></div>
        </div>
        <div class="mb-3">
          <label for="isbn" class="form-label">ISBN Buku</label>
          <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku['isbn'] ?>">
          <div class="text-danger"><?php echo form_error('isbn'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
</div>