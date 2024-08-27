<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Artikel</h1>
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

        <div class="row g-4">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin/artikel/update/' . $artikel['id_artikel']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>

                            <div class="mb-3">
                                <label for="judul_artikel" class="form-label">Judul Artikel</label>
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" value="<?= old('judul_artikel', $artikel['judul_artikel']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="id_kategori" class="form-label">Kategori</label>
                                <select class="form-control" id="id_kategori" name="id_kategori" required>
                                    <option value="" disabled>Pilih Kategori</option>
                                    <?php foreach ($kategori as $id => $nama): ?>
                                        <option value="<?= $id; ?>" <?= ($id == $artikel['id_kategori']) ? 'selected' : '' ?>><?= $nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="foto_artikel" class="form-label">Foto Artikel</label>
                                <input type="file" class="form-control" id="foto_artikel" name="foto_artikel" accept="image/*" onchange="previewImage(event)">
                                <div class="mt-2">
                                    <?php if (!empty($artikel['foto_artikel'])) : ?>
                                        <img id="preview" src="<?= base_url('uploads/upload_artikel/' . $artikel['foto_artikel']) ?>" class="img-fluid" alt="Foto Artikel" style="max-width: 200px;">
                                    <?php else : ?>
                                        <p>Belum ada foto yang diunggah.</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi_artikel" class="form-label">Deskripsi Artikel</label>
                                <textarea class="form-control" id="deskripsi_artikel" name="deskripsi_artikel" rows="4" required><?= old('deskripsi_artikel', $artikel['deskripsi_artikel']) ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                <input type="text" class="form-control" id="tags" name="tags" value="<?= old('tags', $artikel['tags']) ?>" placeholder="Pisahkan dengan koma" required>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="<?= old('slug', $artikel['slug']) ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="<?= base_url('admin/artikel/index') ?>" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
    </div><!--//container-xl-->
</div><!--//app-content-->

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<?= $this->endSection('content') ?>