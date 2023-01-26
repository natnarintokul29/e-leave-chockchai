<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> <?php echo $template['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('asset/images/favicon.ico') ?>">

    <!-- third party css -->
    <link href="<?= base_url('') ?>asset/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url('') ?>asset/plugins/datatablebutton/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('') ?>asset/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url('asset/libs/c3/c3.min.css') ?>" rel="stylesheet" type="text/css" />

    <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?= base_url('asset/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('asset/css/app.min.css') ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />

    <!-- <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
     -->
    <!-- <?php rand(1, 1000) ?> ล้างแคช ให้จำค่าใหม่-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


</head>

<?php
// path
$path_navbar = 'application/views/partials/e_navbar.php';
$path_topbar = 'application/views/partials/e_topbar.php';
$path_sidebar = 'application/views/partials/e_sidebar_menu.php';
$path_footer = 'application/views/partials/e_footer.php';
?>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <?php include($path_navbar); ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include($path_sidebar); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <?php include($path_topbar); ?>
            <?php echo $template['body']; ?>

            <!-- Footer Start -->
            <?php include($path_footer); ?>
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <script src="<?= base_url('asset/js/vendor.min.js') ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Required datatable js -->
    <script src="<?= base_url('') ?>asset/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('') ?>asset/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url('') ?>asset/plugins/datatablebutton/datatables.min.js"></script>

    <!-- Responsive examples -->
    <script src="<?= base_url('') ?>asset/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('') ?>asset/libs/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatables init -->
    <script src="<?= base_url('') ?>asset/js/pages/datatables.init.js"></script>


    <script src="<?= base_url('asset/libs/d3/d3.min.js') ?>"></script>
    <script src="<?= base_url('asset/libs/c3/c3.min.js') ?>"></script>

    <script src="<?= base_url('asset/libs/echarts/echarts.min.js') ?>"></script>

    <script src="<?= base_url('asset/js/pages/dashboard.init.js') ?>"></script>

    <script src="<?= base_url('asset/js/app.min.js') ?>"></script>

</body>

</html>