<div class="container row mx-auto">
    <div class="col-md-8 mx-auto">
        <h1>Edit dokter</h1>
        <?php echo form_open('dokter/edit/'.$dokter['id_dokter']); ?>
        <div class="mb-3">
          <label for="nama_dokter" class="form-label">Nama Dokter</label>
          <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?= $dokter['nama_dokter'] ?>">
          <div class="text-danger"><?php echo form_error('nama_dokter'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
</div>