
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
        include('demo-data-table.php');
        ?>
        
        <!-- /main-content -->

        

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
        