<div class="container row mx-auto">
    <div class="col-md-8 mx-auto">
        <h1>Tambah Transaksi</h1>
        <?php echo form_open('transaksi/create'); ?>
        <div class="mb-3">
          <label for="id_peminjam" class="form-label">Nama Peminjam</label>
          <select name="id_peminjam" id="id_peminjam" class="form-select">
            <option selected disabled>Pilih nama peminjam</option>
            <?php foreach ($peminjam_peminjam as $peminjam): ?>
              <option value="<?= $peminjam['id'] ?>"><?= $peminjam['nama'] ?></option>
            <?php endforeach ?>
          </select>
          <div class="text-danger"><?php echo form_error('id_peminjam'); ?></div>
        </div>
        <div class="mb-3">
          <label for="id_buku" class="form-label">Nama Peminjam</label>
          <select name="id_buku" id="id_buku" class="form-select">
            <option selected disabled>Pilih nama buku</option>
            <?php foreach ($buku_buku as $buku): ?>
              <option value="<?= $buku['id'] ?>"><?= $buku['judul'] ?></option>
            <?php endforeach ?>
          </select>
          <div class="text-danger"><?php echo form_error('id_buku'); ?></div>
        </div>
        <div class="mb-3">
          <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
          <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?php echo isset($tanggal_pinjam) ? $tanggal_pinjam : ''; ?>">
          <div class="text-danger"><?php echo form_error('tanggal_pinjam'); ?></div>
        </div>
        <div class="mb-3">
          <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
          <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?php echo isset($tanggal_kembali) ? $tanggal_kembali : ''; ?>">
          <div class="text-danger"><?php echo form_error('tanggal_kembali'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>