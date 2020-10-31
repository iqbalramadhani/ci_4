<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>Daftar Orang</h1>
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Data" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1 + (6 * ($currentPage - 1));
          foreach ($orang as $o) {
          ?>
            <tr>
              <th><?= $i++; ?></th>
              <td><?= $o['nama']; ?></td>
              <td><?= $o['alamat']; ?></td>
              <td>
                <a href="" class="btn btn-success">Detail</a>
              </td>
            <?php
          }
            ?>
            </tr>
        </tbody>
      </table>
      <?= $pager->links('orang', 'orang_pagination'); ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>