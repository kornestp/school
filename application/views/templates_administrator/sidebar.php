<body class="animsition">

  <div div class="page-wrapper">

  <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
        	<div class="logo" style="background-color:rgb(139 61 0);">
        		<a href="<?= base_url() ?>dashboard">
        			<img src="<?= base_url() ?>assets_dashboard/images/icon/logoitbi.png" alt="Cool Admin" />
        		</a>
        	</div>
        	<div class="menu-sidebar2__content js-scrollbar1">
        		<nav class="navbar-sidebar2">
        			<ul class="list-unstyled navbar__list">
        				<li class="has-sub">
        					<a class="js-arrow" href="<?= base_url('dashboard'); ?>">
        						<i class="fas fa-tachometer-alt"></i>Dashboard</a>
        				</li>
        				<li class="has-sub">
        					<a class="js-arrow" href="#">
        						<i class="fas fa-university"></i>Akademik</a>
        					<ul class="submenu list-unstyled navbar__sub-list js-sub-list">
        						<li>
        							<a href="<?= base_url('prodi') ?>">Program Studi</a>
        						</li>
        						<li>
        							<a href="<?= base_url('kelas') ?>">Kelas</a>
        						</li>
        						<li>
        							<a href="<?= base_url('matakuliah') ?>">Mata Kuliah</a>
        						</li>
        						<li>
        							<a href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
        						</li>
        						<li>
        							<a href="<?= base_url('krs') ?>">KRS</a>
        						</li>
        						<li>
        							<a href="<?= base_url('nilai/input_nilai') ?>">Input Nilai</a>
        						</li>
        						<li>
        							<a href="<?= base_url('nilai') ?>">KHS</a>
        						</li>
        						<li>
        							<a href="<?= base_url('dosen') ?>">Dosen</a>
        						</li>
        					</ul>
        				</li>
        				<li class="has-sub">
        					<a class="js-arrow" href="#">
        						<i class="fas fa-cog"></i>Pengaturan
        					</a>
        					<ul class="submenu list-unstyled navbar__sub-list js-sub-list">
								<li>
        							<a class="collapse-item" href="<?= base_url('pengampu') ?>">Dosen Pengampu</a>
        						</li>
        						<li>
        							<a class="collapse-item" href="<?= base_url('users') ?>">User</a>
        						</li>
        					</ul>
        				</li>
        				<li class="has-sub">
        					<a href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Yakin akan logout?')">
        						<i class="fas fa-sign-out-alt"></i>Logout
        					</a>
        				</li>
        			</ul>
        		</nav>
        	</div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
        	<!-- HEADER DESKTOP-->
        	<header class="header-desktop2" style="background-color:rgb(187 82 0);">
        		<div class="section__content section__content--p30">
        			<div class="container-fluid">
        				<div class="header-wrap2">
        					<div class="logo d-block d-lg-none">
        						<a href="<?= base_url() ?>dashboard">
        							<img src="<?= base_url() ?>assets_dashboard/images/icon/logoitbi.png"
        								alt="CoolAdmin" />
        						</a>
        					</div>
        					<div class="header-button2">
        						<div class="account-wrap">
        							<div class="account-item clearfix account-item--style2 js-item-menu">
        								<div class="account-item clearfix d-none d-lg-block">
        									<div class="image">
        										<img src="<?= base_url() ?>assets_dashboard/images/icon/<?php echo $this->session->userdata('gambar'); ?>"
        											alt="<?php echo ucfirst($this->session->userdata('username')); ?>" />
        									</div>
        									<div class="content">
        										<a class="js-acc-btn" href="#"> <?php echo ucfirst($this->session->userdata('username')); ?> </a>
        									</div>
        								</div>
        								<div class="account-dropdown js-dropdown">
        									<div class="info clearfix">
        										<div class="image">
        											<a href="<?= base_url() ?>akun">
														<img src="<?= base_url() ?>assets_dashboard/images/icon/<?php echo ucfirst($this->session->userdata('gambar')); ?>"
        													alt="<?php echo ucfirst($this->session->userdata('username')); ?>" />
        											</a>
        										</div>
        										<div class="content">
        											<h5 class="name">
        												<a href="<?= base_url() ?>akun"><?php echo ucfirst($this->session->userdata('nama')); ?></a>
        											</h5>
        											<span class="email"><?php echo ucfirst($this->session->userdata('email')); ?></span>
        										</div>
        									</div>
        									<div class="account-dropdown__body">
        										<div class="account-dropdown__item">
        											<a href="<?= base_url('akun') ?>">
        												<i class="zmdi zmdi-account"></i>Account</a>
        										</div>
        									</div>
        									<div class="account-dropdown__footer">
        										<a href="<?= base_url('auth/logout'); ?>">
        											<i class="zmdi zmdi-power"></i>Logout</a>
        									</div>
        								</div>
        							</div>
        						</div>
        						<div class="header-mobile d-lg-none header-button-item mr-0 js-sidebar-btn">
        							<i class="zmdi zmdi-menu"></i>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</header>
        	<aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
        		<div class="logo" style="background-color:rgb(187 82 0);">
        			<a href="<?= base_url() ?>dashboard">
						<img src="<?= base_url() ?>assets_dashboard/images/icon/logoitbi.png"
        					alt="CoolAdmin" />
        			</a>
        		</div>
        		<div class="menu-sidebar2__content js-scrollbar2">
        			<div class="account2">
        				<div class="image img-cir img-120">
        					<img src="<?= base_url() ?>assets_dashboard/images/icon/<?php echo $this->session->userdata('gambar'); ?>"
        						alt="John Doe" />
        				</div>
        				<h4 class="name"><?php echo ucfirst($this->session->userdata('username')); ?></h4>
        				<a href="<?= base_url('akun') ?>">Akun</a>
        			</div>
        			<nav class="navbar-sidebar2">
        				<ul class="list-unstyled navbar__list">
        					<li class="has-sub">
        						<a class="" href="<?= base_url('dashboard'); ?>">
        							<i class="fas fa-tachometer-alt"></i>Dashboard</a>
        					</li>
        					<li class="has-sub">
        						<a class="js-arrow" href="#">
        							<i class="fas fa-university"></i>Akademik</a>
        						<ul class="submenu list-unstyled navbar__sub-list js-sub-list">
        							<li>
        								<a href="<?= base_url('prodi') ?>">Program Studi</a>
        							</li>
									<li>
        								<a href="<?= base_url('kelas') ?>">Kelas</a>
        							</li>
        							<li>
        								<a href="<?= base_url('matakuliah') ?>">Mata Kuliah</a>
        							</li>
        							<li>
        								<a href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
        							</li>
        							<li>
        								<a href="<?= base_url('krs') ?>">KRS</a>
        							</li>
        							<li>
        								<a href="<?= base_url('nilai/input_nilai') ?>">Input Nilai</a>
        							</li>
        							<li>
        								<a href="<?= base_url('nilai') ?>">KHS</a>
        							</li>
        							<li>
        								<a href="<?= base_url('dosen') ?>">Dosen</a>
        							</li>
        						</ul>
        					</li>
        					<li class="has-sub">
        						<a class="js-arrow" href="#">
        							<i class="fas fa-cog"></i>Pengaturan
        						</a>
        						<ul class="submenu list-unstyled navbar__sub-list js-sub-list">
									<li>
										<a class="collapse-item" href="<?= base_url('pengampu') ?>">Dosen Pengampu</a>
									</li>
        							<li>
        								<a class="collapse-item" href="<?= base_url('users') ?>">User</a>
        							</li>
        						</ul>
        					</li>
        					<li class="has-sub">
        						<a href="<?= base_url('auth/logout'); ?>"
        							onclick="return confirm('Yakin akan logout?')">
        							<i class="fas fa-sign-out-alt"></i>Logout
        						</a>
        					</li>
        				</ul>
        			</nav>
        		</div>
        	</aside>
        	<!-- END HEADER DESKTOP-->
        	<!-- END PAGE CONTAINER-->
			
			<!-- Modal -->

			<?php include "modal.php"; ?>
            <!-- Konten-->
            <div class="main-content">
                <div class="section__content section__content--p30">

    