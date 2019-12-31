<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= site_url('berita') ?>" class="btn btn-info">Kembali</a>
</div>
<form action="<?= site_url('berita/edit') ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="hidden" name="id" value="<?= $berita->id_berita ?>">
                <input type="text" class="form-control form-sm-control" name="judul" id="judul" value="<?= $berita->judul_berita ?>">
                <?= form_error('judul') ?>
            </div>
            <div class="form-group">
                <label for="isi">Isi Berita</label>
                <textarea id="isi" name="berita" class="ckeditor" id="ckeditor"><?= $berita->isi_berita ?></textarea>
                <?= form_error('berita') ?>
            </div>
        </div>
        <div class="col-lg-4">
            <?= $this->session->flashdata('message'); ?>
            <div class="form-group">
                <label for="preview_gambar">Sampul Berita</label>
                <label for="preview_gambar"><img src="<?= base_url('assets/img/berita/') . $berita->gambar_berita ?>" width="100%" height="200px" id="output" class="img-thumbnail rounded"></label>
                <?= form_error('gambar') ?>
            </div>
            <div class="form-group">
                <div class="custom-file" class="col-sm-12">
                    <input type="hidden" name="gambar_lama" value="<?= $berita->gambar_berita ?>">
                    <input type="file" accept="image/*" onchange="loadFile(event)" id="preview_gambar" name="gambar">
                    <label class="custom-file-label" for="preview_gambar" id="preview">Pilih Gambar</label>
                </div>
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