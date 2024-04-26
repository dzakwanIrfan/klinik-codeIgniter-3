<div class="container">
  <footer class="py-3 my-4">
  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?= site_url('/') ?>" class="nav-link px-2 <?php if ($title === 'beranda') echo 'link-secondary' ?>">Beranda</a></li>
        <li><a href="<?= site_url('/pasien/index') ?>" class="nav-link px-2 <?php if ($title === 'pasien') echo 'link-secondary' ?>">Pasien</a></li>
        <li><a href="<?= site_url('/dokter/index') ?>" class="nav-link px-2 <?php if ($title === 'dokter') echo 'link-secondary' ?>">Dokter</a></li>
        <li><a href="<?= site_url('/kunjungan/index') ?>" class="nav-link px-2 <?php if ($title === 'kunjungan') echo 'link-secondary' ?>">Kunjungan</a></li>
        <li><a href="<?= site_url('/poli/index') ?>" class="nav-link px-2 <?php if ($title === 'poli') echo 'link-secondary' ?>">Poli</a></li>
      </ul>
    <p class="text-center text-body-secondary">&copy; 2024 Library, Inc</p>
  </footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>