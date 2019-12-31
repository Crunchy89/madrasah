<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= site_url('berita') ?>" class="btn btn-info">Kembali</a>
</div>
<?php echo form_open_multipart('berita/tambah'); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="form-group">
            <label for="judul">Judul Berita</label>
            <input type="text" class="form-control form-sm-control" name="judul" id="judul">
            <?= form_error('judul', '<div class="alert alert-danger" role="alert">', '</div>') ?>
        </div>
        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea id="isi" name="berita" class="ckeditor" id="ckeditor"></textarea>
            <?= form_error('berita', '<div class="alert alert-danger" role="alert">', '</div>') ?>
        </div>
    </div>
    <div class="col-lg-4">
        <?= $this->session->flashdata('message'); ?>
        <?= form_error('gambar', '<div class="alert alert-danger" role="alert">', '</div>') ?>
        <div class="form-group">
            <label for="gambar">Sampul Berita</label>
            <label for="gambar"><img src="<?= base_url('assets/img/noimage.png') ?>" width="100%" height="200px" id="output" class="img-thumbnail rounded"></label>
        </div>
        <div class="form-group">
            <input type="file" accept="image/*" onchange="loadFile(event)" id="gambar" name="gambar">
            <script>
                var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                };
            </script>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</div>
</form>