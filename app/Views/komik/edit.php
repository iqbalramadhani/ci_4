<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Form Ubah Data Komik</h1>
      <?php
      // dd($validation->listErrors());
      ?>
      <form action="/komik/update/<?= $komik['id'] ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" name="judul" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul']; ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" name="penulis" class="form-control" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" name="penerbit" class="form-control" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-2">
            <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul" id="sampul" onchange="priviewImg()">
              <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>
              <label class="custom-file-label" for="Sampul"><?= $komik['sampul']; ?></label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>