<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- tampilan belum login -->
<?php if (session()->get('level') == '') { ?>
  <?= $this->include('halaman/home/home'); ?>
  <!-- tampilan login mahasiswa -->
<?php } elseif (session()->get('level') == '2') { ?>
  <?= $this->include('halaman/mahasiswa/mhs'); ?>
<?php } ?>
<?= $this->endSection(); ?>