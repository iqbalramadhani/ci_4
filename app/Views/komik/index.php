<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/komik/create" class="btn btn-primary mb-3 mt-3">Tambah Data Komik</a>
      <h1>Halaman Komik</h1>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Sampul</th>
            <th>Judul</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($komik as $k) {
          ?>
            <tr>
              <th><?= $i++; ?></th>
              <td><img src="/img/<?= $k['sampul']; ?>" class="sampul" alt=""></td>
              <td><?= $k['judul']; ?></td>
              <td>
                <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
              </td>
            <?php
          }
            ?>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>