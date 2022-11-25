<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="au-card">
				<div class="account2">
					<h3>
						Akun Saya
					</h3>

					<form class="modern-form" action="<?= base_url('akun/update_akun_aksi') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
						<?php foreach($detail as $dtuser): ?>
						<div class="account2 pb-5" style="border-bottom:none;">
							<div class="image img-cir" style="width:150px;">
								<img style="width:100%;"
									src="<?= base_url('assets_dashboard/images/icon/').$dtuser->gambar ?>"
									alt="<?= $dtuser->nama; ?>" />
							</div>
						</div>
						<div class="form-group form-design d-none">
							<input name="id_user" value="<?= $this->session->userdata('id_user') ?>" type="text" class="form-control">
						</div>
						<div class="form-group form-design">
							<input name="email" value="<?= $dtuser->email; ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="Masukkan email">
						</div>
						<div class="form-group form-design">
							<input name="nama" value="<?= $dtuser->nama; ?>" type="text" class="form-control" 
								placeholder="Nama Saya">
						</div>
						<div class="form-group form-design">
							<input name="identitas" value="<?= $dtuser->identitas; ?>" type="text" class="form-control" 
								placeholder="Nomor Identitas">
						</div>
						<div class="form-group form-design">
							<input name="username" value="<?= $dtuser->username; ?>" type="text" class="form-control" 
								placeholder="Username">
						</div>
						<div class="form-group form-design">
							<input name="alamat" value="<?= $dtuser->alamat; ?>" type="text" class="form-control" 
								placeholder="Alamat Lengkap">
						</div>
						<div class="form-group form-design">
                            <input value="<?= $this->session->userdata('password') ?>" type="password" class="form-input form-password" 
								name="password" id="password" placeholder="Kata Sandi"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
						<div class="form-group form-design d-none">
							<input type="text" value="<?= $dtuser->gambar; ?>" name="gambar0" style="width:200px;">
						</div>
						<div class="form-group form-design">
							<input type="file" name="gambar" style="width:200px;">
						</div>
						
						<div class="row">
							<div class="myradio custom-control custom-radio col">
								<label class="label-radio" for="customRadioInline1">
									<input type="radio" value="Laki-laki" id="customRadioInline1" name="jenis_kelamin" <?php if ($dtuser->jenis_kelamin=="Laki-laki"){echo "checked='checked'";} ?>>
									<span class="spancek"><i class="fas fa-male fa-2x"></i>&nbsp; Laki-laki</span>
								</label>
							</div>
							<div class="myradio custom-control custom-radio col">
								<label class="label-radio" for="customRadioInline2">
									<input type="radio" value="Perempuan" id="customRadioInline2" name="jenis_kelamin" <?php if($dtuser->jenis_kelamin=="Perempuan"){echo "checked='checked'";} ?>>
									<span class="spancek"><i class="fas fa-female fa-2x"></i>&nbsp;Perempuan</span>
								</label>
							</div>
						</div>

						<div class="pb-4"></div>
						<div class="form-group">
							<input type="submit" name="submit" id="submit" value="Simpan"/>
						</div>
						<?php endforeach; ?>
					</form>

                </div>
			</div>
		</div>
	</div>
</div>