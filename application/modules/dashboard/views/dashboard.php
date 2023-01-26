<div class="content">

	<!-- Start Content-->
	<div class="container-fluid">
		<div class="row">

			<div class="col-xl-4 col-sm-6">
				<a href="#">
				<div class="card-box widget-box-two widget-two-custom">
					<div class="media">
						<div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
							<i class="fas fa-ambulance avatar-title font-30 text-white"></i>
						</div>

						<div class="wigdet-two-content media-body">
							<h1 class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">ลาป่วย</h1>
							<h4 class="font-weight-medium my-2"><span>เหลือ 25 วัน</span></h4>
							<p class="m-0 time_current"></p>
						</div>
					</div>
				</div>
				</a>
			</div>
			<!-- end col -->

			<div class="col-xl-4 col-sm-6">
				<div class="card-box widget-box-two widget-two-custom ">
					<div class="media">
						<div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
							<i class="fas fa-user-alt avatar-title font-30 text-white"></i>
						</div>

						<div class="wigdet-two-content media-body">
							<h1 class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">ลากิจ</h1>
							<h4 class="font-weight-medium my-2"> <span>เหลือ 5 วัน</span></h4>
							<p class="m-0 time_current"></p>
						</div>
					</div>
				</div>
			</div>
			<!-- end col -->

			<div class="col-xl-4 col-sm-6">
				<div class="card-box widget-box-two widget-two-custom ">
					<div class="media">
						<div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
							<i class="fas fa-umbrella-beach avatar-title font-30 text-white"></i>
						</div>

						<div class="wigdet-two-content media-body">
							<h1 class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">ลาพักร้อน</h1>
							<h4 class="font-weight-medium my-2"><span>เหลือ 2 วัน</span></h4>
							<p class="m-0 time_current"></p>
						</div>
					</div>
				</div>
			</div>
			<!-- end col -->

			<div class="col-xl-4 col-sm-6">
				<div class="card-box widget-box-two widget-two-custom ">
					<div class="media">
						<div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
							<i class="fas fa-baby-carriage  avatar-title font-30 text-white"></i>
						</div>

						<div class="wigdet-two-content media-body">
							<h1 class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">ลาคลอด</h1>
							<h4 class="font-weight-medium my-2"><span>เหลือ 90 วัน</span></h4>
							<p class="m-0 time_current"></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-sm-6">
				<div class="card-box widget-box-two widget-two-custom ">
					<div class="media">
						<div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
							<i class="fas fa-flag  avatar-title font-30 text-white"></i>
						</div>

						<div class="wigdet-two-content media-body">
							<h1 class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">ลาทหาร</h1>
							<h4 class="font-weight-medium my-2"><span>เหลือ 90 วัน</span></h4>
							<p class="m-0 time_current"></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-sm-6">
				<div class="card-box widget-box-two widget-two-custom ">
					<div class="media">
						<div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
							<i class="fas fa-user-circle  avatar-title font-30 text-white"></i>
						</div>

						<div class="wigdet-two-content media-body">
							<h1 class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">ลาบวช</h1>
							<h4 class="font-weight-medium my-2"><span>เหลือ 90 วัน</span></h4>
							<p class="m-0 time_current"></p>
						</div>
					</div>
				</div>
			</div>


		</div>
		<!-- end row -->

	</div> <!-- end container-fluid -->

</div> <!-- end content -->

<script>
	$(document).ready(function() {

		function current_time() {
			var today = new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0');
			var yyyy = today.getFullYear();

			today = dd + '/' + mm + '/' + yyyy;

			return today;
		}
            
		$('.time_current').html(current_time())
		//console.log(current_time())
	})
</script>