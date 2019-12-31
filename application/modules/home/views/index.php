<!-- Services -->
<section class="page-section" id="berita">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Berita Terkini</h2>
			</div>
		</div>
		<div class="row text-center mt-3">
			<?php foreach ($news as $beritas) : ?>
				<div class="col-md-4">
					<div class="card bg-secondary">
						<div class="transform">
							<img src="<?= base_url('assets/img/berita/') . $beritas->gambar_berita ?>" class="card-img-top " alt="..." width="100%" height="250px">
						</div>
						<div class="card-body">
							<h5 class="card-title"><?= $beritas->judul_berita ?></h5>
							<a href="#">Baca Selengkapnya</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<p class="text-center mt-2"><a href="">Lihat lebih banyak</a></p>
	</div>
</section>
<!-- Services -->
<section class="page-section bg-light" id="extrakulikuler">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Extrakulikuler</h2>
			</div>
		</div>
		<div class="row text-center mt-3">
			<div class="col-md-3 p-2">
				<div class="bg-success rounded p-1">
					<span class="fa-stack fa-3x">
						<i class="fas fa-users fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Pramuka</h4>
				</div>
			</div>
			<div class="col-md-3 p-2">
				<div class="bg-primary rounded p-1">
					<span class="fa-stack fa-3x">
						<i class="fas fa-code fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Programming</h4>
				</div>
			</div>
			<div class="col-md-3 p-2">
				<div class="bg-warning rounded p-1">
					<span class="fa-stack fa-3x">
						<i class="fas fa-image fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Desain Grafis</h4>
				</div>
			</div>
			<div class="col-md-3 p-2">
				<div class="bg-danger rounded p-1">
					<span class="fa-stack fa-3x">
						<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
					<h4>E-Commerce</h4>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<!-- Contact -->
<section class="page-section" id="kontak">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Hubungi Kami</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="container mb-3">
					Lokasi
					<hr>
					<div class="container">
						<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=116.28125220537187%2C-8.699287463253588%2C116.28424555063249%2C-8.697691345791812&amp;layer=mapnik&amp;marker=-8.69848940537304%2C116.28274887800217" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=-8.69849&amp;mlon=116.28275#map=19/-8.69849/116.28275&amp;layers=N">View Larger Map</a></small>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="container">
					Kontak
					<hr>
					<div class="form-group row">
						<div class="col-md-2">
							<i class="fas fa-envelope fa-3x"></i>
						</div>
						<div class="col-md-10">
							<div>
								<h6>Email</h6>
							</div>
							<div>
								<p>rocker.hunt@gmail.com</p>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-2">
							<i class="fas fa-phone fa-3x"></i>
						</div>
						<div class="col-md-10">
							<div>
								<h6>Telepon</h6>
							</div>
							<div>
								<p>+6281808237128</p>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-2">
							<i class="fas fa-map-marker-alt fa-3x"></i>
						</div>
						<div class="col-md-10">
							<div>
								<h6>Address</h6>
							</div>
							<div>
								<p>Jln. basdjhdjsahdfisoadh</p>
							</div>
						</div>
					</div>
					<hr>
					Social Media
					<hr>
					<a href=""><i class="fab fa-2x fa-fw fa-twitter"></i></a>
					<a href=""><i class="fab fa-2x fa-fw fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-2x fa-fw fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>