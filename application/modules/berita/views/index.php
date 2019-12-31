<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Berita</h1>
</div>
<div class="table-responsive-sm">
	<a href="<?= site_url('berita/tambah') ?>" class="btn btn-info mb-2">Tambah</a>
	<table class="table table-sm table-hover" id="dataTable">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Aksi</th>
				<th scope="col">Judul</th>
				<th scope="col">Status</th>
				<th scope="col">diposting pada</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;
			foreach ($berita as $row) : ?>
				<tr>
					<th scope="row"><?= $i++ ?></th>
					<td>
						<a href="<?= site_url('berita/edit/') . $row->id_berita ?>" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-fw fa-pen"></i></a>
						<button type="button" data-toggle="modal" data-target="#hapus<?= $row->id_berita ?>" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-fw fa-trash"></i></button>
						<?php if ($row->status == 1) : ?>
							<a href="<?= site_url('berita/deactive/') . $row->id_berita ?>" class="btn btn-sm btn-secondary" title="Deactive"><i class="fas fa-fw fa-eye-slash"></i></a>
						<?php else : ?>
							<a href="<?= site_url('berita/active/') . $row->id_berita ?><?= site_url('berita/deactive') . $row->id_berita ?>" class="btn btn-sm btn-info" title="active"><i class="fas fa-fw fa-eye"></i></a>
						<?php endif; ?>
					</td>
					<td><?= $row->judul_berita ?></td>
					<td><?php if ($row->status == 1) {
							echo "Active";
						} else {
							echo "Deactive";
						} ?></td>
					<td><?= $row->tanggal ?></td>
				</tr>

				<!-- Modal hapus-->
				<div class="modal fade" id="hapus<?= $row->id_berita ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Hapus berita</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="berita/hapus" method="post">
									<input type="hidden" name="id" value="<?= $row->id_berita ?>">
									<h3>Apakah anda yakin ?</h3>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary">Ya</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>