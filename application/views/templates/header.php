<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none fs-4">
          Klinik
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?= site_url('/') ?>" class="nav-link px-2 <?php if ($title === 'beranda') echo 'link-secondary' ?>">Beranda</a></li>
        <li><a href="<?= site_url('/pasien/index') ?>" class="nav-link px-2 <?php if ($title === 'pasien') echo 'link-secondary' ?>">Pasien</a></li>
        <li><a href="<?= site_url('/dokter/index') ?>" class="nav-link px-2 <?php if ($title === 'dokter') echo 'link-secondary' ?>">Dokter</a></li>
        <li><a href="<?= site_url('/kunjungan/index') ?>" class="nav-link px-2 <?php if ($title === 'kunjungan') echo 'link-secondary' ?>">Kunjungan</a></li>
        <li><a href="<?= site_url('/poli/index') ?>" class="nav-link px-2 <?php if ($title === 'poli') echo 'link-secondary' ?>">Poli</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2"><a href="<?= site_url('auth/index') ?>">Login</a></button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>