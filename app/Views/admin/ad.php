<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <?= $this->include('template/backend/layout/css'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?= $this->include('template/backend/layout/header'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('template/backend/layout/sidebar'); ?>
    <!-- /Main Sidebar Container -->

    <!-- Content -->
    <div class="content-wrapper">
      <?= $this->renderSection('content'); ?>
    </div>
    <!-- /content -->

    <!-- footer -->
    <?= $this->include('template/backend/layout/footer'); ?>
    <!-- /footer -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?= $this->include('template/backend/layout/js'); ?>
</body>

</html>