<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="au-card">
				<div class="alert alert-success">
					<i class="fas fa-university"></i> Form Masuk Halaman Transkrip Nilai
				</div>

				<form action="<?= base_url('transkrip_nilai/buat_transkrip_aksi') ?>" method="post">
					<div class="form-group">
						<label for="">NIM</label>
						<input type="text" name="nim" class="form-control" placeholder="Masukkan NIM Mahasiswa">
						<?= form_error('nim', '<div class="text-danger small">', '</div>'); ?>
					</div>

					<button type="submit" class="btn btn-primary">Proses</button>
				</form>
			</div>
		</div>
	</div>
</div>