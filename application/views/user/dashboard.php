<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="au-card">
		
				<div class="au-breadcrumb-content">
					<div class="au-breadcrumb-left">
						<span class="au-breadcrumb-span">Anda berada di:</span>
						<ul class="list-unstyled list-inline au-breadcrumb__list">
							<li class="list-inline-item active">
								<a href="#">Home</a>
							</li>
							<li class="list-inline-item seprate">
								<span>/</span>
							</li>
							<li class="list-inline-item">Dashboard</li>
						</ul>
					</div>
				</div>

				<div class="alert alert-light pt-5 pl-0" role="alert">
					<h4 class="alert-heading">Selamat Datang!</h4>
					<p>Selamat datang <strong><?= $username; ?></strong> di Sistem Informasi Akademik Nama Kampus, anda
						login
						sebagai
						<strong><?= $level; ?></strong></p>
					<hr>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fas fa-cogs"></i> Control Panel
					</button>
				</div>

				<!-- Modal -->
			</div>
		</div>
	</div>
</div>