        </div>
      </div>
    </div>
  </div>

  <section>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="copyright">
  					<p>Copyright © <?= date("Y"); ?> Akademi Teknik Deli Serdang. All rights reserved.</p>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  
  
  <!-- JS untuk template baru-->
  <!-- Jquery JS-->
	<script src="<?= base_url() ?>assets_dashboard/vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="<?= base_url() ?>assets_dashboard/vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="<?= base_url() ?>assets_dashboard/vendor/slick/slick.min.js">
	</script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/wow/wow.min.js"></script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/animsition/animsition.min.js"></script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/circle-progress/circle-progress.min.js"></script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets_dashboard/vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="<?= base_url() ?>assets_dashboard/js/main.js"></script>
  	<script src="<?= base_url() ?>assets_dashboard/js/scripts.js"></script>
  	<script src="<?= base_url() ?>assets_dashboard/js/form.js"></script>
	
	<!-- Data Table-->
	<script type="text/javascript" charset="utf8" src="<?= base_url() ?>assets_dashboard/DataTables-1.11.3/datatables.js"></script>
	
	<!-- Untuk Select Search -->
	<script src="<?= base_url() ?>assets_dashboard/select2/dist/js/select2.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.js-example-basic-single').select2({
				theme: 'bootstrap4',
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			$('#datatableku').DataTable({
				responsive: true
			});
		});

		$(document).ready(function () {
			$('#datatablep').DataTable();
		});
	</script>
	<script>
		var mahasiswaJenjang = document.getElementById("mahasiswa_jenjang");
		var mahasiswaProdi = document.getElementById("mahasiswa_prodi");

		function getJenjangtoProdi() {
			var jenjangnm = mahasiswaJenjang.value;
			var request = new XMLHttpRequest();
			request.open("GET", "<?= base_url() ?>mahasiswa/jenjangStd/" + jenjangnm, true);
			request.send();

			request.onreadystatechange = function () {
				if (request.readyState == 4 && request.status == 200) {
					mahasiswaProdi.innerHTML = request.responseText;
				}
			};
			
		}
		getJenjangtoProdi();
		mahasiswaJenjang.addEventListener("change",getJenjangtoProdi);
	</script>

	<script>
		var mahasiswaJenjangU = document.getElementById("mahasiswa_jenjang_up");
		var mahasiswaProdiU = document.getElementById("mahasiswa_prodi_up");
		var idmhs = document.getElementById("idmhs");

		function getJenjangtoProdiUpdate() {
			var jenjangnmU = mahasiswaJenjangU.value;
			var request = new XMLHttpRequest();
			request.open("GET", "<?= base_url() ?>mahasiswa/jenjangStdUpdate/" + jenjangnmU + "/" + idmhs.value, true);
			request.send();

			request.onreadystatechange = function () {
				if (request.readyState == 4 && request.status == 200) {
					mahasiswaProdiU.innerHTML = request.responseText;
				}
			};
			
		}
		getJenjangtoProdiUpdate();
		mahasiswaJenjangU.addEventListener("change",getJenjangtoProdiUpdate);
	</script>
</body>

</html>