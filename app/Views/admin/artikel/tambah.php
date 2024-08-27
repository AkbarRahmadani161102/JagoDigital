<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan Artikel</h1>
        <hr class="mb-4">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin/artikel/store') ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>

                            <div class="mb-3">
                                <label class="form-label">Judul Artikel</label>
                                <input type="text" class="form-control" name="judul_artikel" value="<?= old('judul_artikel') ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-control" name="kategori" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    <?php foreach ($kategori as $id => $nama): ?>
                                        <option value="<?= $id; ?>"><?= $nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto Artikel</label>
                                <input type="file" class="form-control" name="foto_artikel" accept="image/*" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deskripsi Artikel</label>
                                <textarea class="form-control" name="deskripsi_artikel" rows="4" required><?= old('deskripsi_artikel') ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <input type="text" class="form-control" name="tags" value="<?= old('tags') ?>" placeholder="Pisahkan dengan koma" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="<?= old('slug') ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url('admin/artikel/index') ?>" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content'); ?>