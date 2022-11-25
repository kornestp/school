<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="au-card">
				<div class="alert alert-success" role="alert">
					<i class="fas fa-university"></i> Program Studi
				</div>

				<?= $this->session->flashdata('pesan'); ?>

				<?= anchor('prodi/tambah_prodi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Prodi</button>') ?>

				<table class="table table-striped table-bordered table-hover">
					<tr>
						<th>NO</th>
						<th>KODE PRODI</th>
						<th>NAMA PRODI</th>
						<th colspan="2">AKSI</th>
					</tr>

					<?php 
            $no = 1;
            foreach($prodi as $prd): ?>
					<tr>
						<td width="20px;"><?= $no++; ?></td>
						<td><?= $prd->kode_prodi; ?></td>
						<td><?= $prd->nama_prodi; ?></td>
						<td width="20px">
							<?= anchor('prodi/update/'.$prd->id_prodi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
						</td>
						<td width="20px">
							<?= anchor('prodi/delete/'.$prd->id_prodi, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>