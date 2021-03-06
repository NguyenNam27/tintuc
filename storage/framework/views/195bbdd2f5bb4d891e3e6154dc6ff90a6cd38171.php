<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <base href="<?php echo e(asset('')); ?>">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="backend/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="backend/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="backend/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="backend/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php echo $__env->make('BE.layout.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('BE.layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('BE.layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('BE.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<!-- jQuery 3 -->
    <script src="backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="backend/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
    <script src="backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="backend/bower_components/raphael/raphael.min.js"></script>
    <script src="backend/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- Slimscroll -->
    <script src="backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="backend/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="backend/dist/js/adminlte.min.js"></script>

    <script src="backend/dist/js/demo.js"></script>

    
    <script type="text/javascript">

        // $.validate({
        //
        // });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php echo $__env->yieldContent('my_js'); ?>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
