
	<?php 

	session_start();

	if(isset($_SESSION['username'])){

	

	include('header-script.php')
	?>
	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar -->
			<?php 
			include('main-sidebar.php')
			?>
			<!-- main-sidebar -->

			<!-- main-content -->
			<?php 
			include('main-content.php')
			?>
			
			<!-- /main-content -->

			<!-- Sidebar-right-->
			<?php 
			include('sidebar-right.php')
			?>
			<!--/Sidebar-right-->

			<!-- Message Modal -->
			<?php 
			include('massage-model.php')
			?>

			<!--Video Modal -->

			<!-- modal -->
			<?php 
			include('video-model.php')
			?>

			<!-- Audio Modal -->
			<?php 
			include('audio-model.php')
			?>
			<!-- modal -->

			<!-- Footer opened -->
			<?php 
			include('footer.php')
			?>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<?php 
			include('footer-end.php');
	}else{
		$msg = 'Please login first';
    header('Location: login.php?msg='.$msg);
	}
			?>
			