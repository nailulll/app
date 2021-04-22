<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Invest | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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

    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>I</b>nv</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b> Inv</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only"></span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- Notifications: style can be found in dropdown.less -->
            
            <!-- Tasks: style can be found in dropdown.less -->
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url() ?>asset/dist/img/photo1.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Kelompok 3</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>asset/dist/img/photo1.png" class="img-circle" alt="User Image">

                  <p>
                    Kelompok 3 - Web Developer
                    <small>Member since Nov. 2021</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url() ?>index.php/Welcome" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url() ?>asset/dist/img/photo1.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Kelompok 3</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- data asset, user dan investor -->
        <ul class="sidebar-menu" data-widget="tree">
          <li>
            <a href="<?php echo base_url() ?>index.php/Welcome/Asset">
              <i class="fa fa-bar-chart"></i> <span>Data Asset</span>
            </a>
          </li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
          <li>
            <a href="<?php echo base_url() ?>index.php/Welcome/Investor">
              <i class="fa fa-google-wallet"></i> <span>Data Investor</span>
            </a>
          </li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
          <li>
            <a href="<?php echo base_url() ?>index.php/Welcome/User">
              <i class="fa fa-users"></i> <span>Data User</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
     <?php 
        $tampilan = $this->uri->segment(2);
        switch ($tampilan) {
          case 'Asset':
            $this->load->view('data_asset');
            break;
          case 'Investor':
            $this->load->view('data_investor');
            break;
          case 'User':
            $this->load->view('data_user');
            break;
          case 'tambahDataAsset':
            $this->load->view('tambah_data_asset');
            break;
          case 'tambahDataInvestor':
            $this->load->view('tambah_data_investor');
            break;
          case 'tambahDataUser':
            $this->load->view('tambah_data_user');
            break;
          case 'EditDataAsset':
            $this->load->view('edit_data_asset');
            break;
          case 'EditDataInvestor':
            $this->load->view('edit_data_investor');
            break;
          case 'EditDataUser':
            $this->load->view('edit_data_user');
            break;
          default:
            $this->load->view('default');
            break;
        }
      ?>
      </section>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Invest</a>.</strong> Keep Strong
    </footer>
   

 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?php echo base_url() ?>asset/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo base_url() ?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="<?php echo base_url() ?>asset/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url() ?>asset/dist/js/adminlte.min.js"></script>
 <!-- Sparkline -->
 <script src="<?php echo base_url() ?>asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
 <!-- jvectormap  -->
 <script src="<?php echo base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="<?php echo base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
 <!-- SlimScroll -->
 <script src="<?php echo base_url() ?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- ChartJS -->
 <script src="<?php echo base_url() ?>asset/bower_components/chart.js/Chart.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="<?php echo base_url() ?>asset/dist/js/pages/dashboard2.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url() ?>asset/dist/js/demo.js"></script>
</body>
</html>
