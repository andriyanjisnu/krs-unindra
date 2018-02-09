<?php
	require_once("koneksi.php");
	$sql = "SELECT * FROM mahasiswa WHERE fakultas='FPs'";
	$result = $con->query($sql);
	$con->close();
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Selamat Malam</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Andri Yan Jisnu</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.html"><i class="fa fa-home"></i> Dashboard </a></li>
                  <li><a><i class="fa fa-edit"></i> Dosen <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
                      <li><a href="general_elements.html">Semua Fakultas</a></li>
                      <li><a href="media_gallery.html">FIIPS</a></li>
                      <li><a href="typography.html">FTMIPA</a></li>
                      <li><a href="icons.html">FBS</a></li>
                      <li><a href="glyphicons.html">FPs</a></li>
                    </ul>
				  </li>
                  <li><a><i class="fa fa-desktop"></i> Mahasiswa <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
                      <li><a href="m_all.php">Semua Fakultas</a></li>
                      <li><a href="m_fiips.php">FIIPS</a></li>
                      <li><a href="m_ftmipa.php">FTMIPA</a></li>
                      <li><a href="m_fbs.php">FBS</a></li>
                      <li><a href="m_fps.php">FPs</a></li>
                    </ul>
				  </li>
                
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>FAKULTAS PASCASARJANA</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
			  
			   <a href="input_mhs_fps.php" id="mahasiswa" name="mahasiswa" value="mahasiswa" method="POST"><div class="btn btn-primary">Input Data</div></a>
				<table class="table table-bordered"> 
					<thead>
						<tr>
							<th class="table-header" wnimmhsth="20%">NO</th>
							<th class="table-header" wnimmhsth="20%">NPM</th>
							<th class="table-header" wnimmhsth="20%">NAMA</th>
							<th class="table-header" wnimmhsth="20%">JENIS KELAMIN</th>
							<th class="table-header" wnimmhsth="20%">TEMPAT LAHIR</th>
							<th class="table-header" wnimmhsth="20%">TANGGAL LAHIR</th>
							<th class="table-header" wnimmhsth="20%">ALAMAT</th>
							<th class="table-header" wnimmhsth="20%">KELAS</th>
							<th class="table-header" wnimmhsth="20%">FAKULTAS</th>
							<th class="table-header" wnimmhsth="20%">ANGKATAN</th>
							<th class="table-header" wnimmhsth="20%" colspan="2">AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php	
							$nomor = 1;
							if ($result->num_rows > 0){
								while($row = $result->fetch_assoc()){
						?>
							<tr class="table-row" id="row">
								<td class="table-row"><?php echo $nomor++; ?></td>
								<td class="table-row"><?php echo $row["npm"]; ?></td>
								<td class="table-row"><?php echo $row["nama"]; ?></td>
								<td class="table-row"><?php echo $row["jenis_kelamin"]; ?></td>
								<td class="table-row"><?php echo $row["tempat_lahir"]; ?></td>
								<td class="table-row"><?php echo $row["tanggal_lahir"]; ?></td>
								<td class="table-row"><?php echo $row["alamat"]; ?></td>
								<td class="table-row"><?php echo $row["kelas"]; ?></td>
								<td class="table-row"><?php echo $row["fakultas"]; ?></td>
								<td class="table-row"><?php echo $row["tahun_angkatan"]; ?></td>
								<td class="table-row" colspan="2"><a href="update_mhs.php?npm=<?php echo $row["npm"]; ?>" class="fa fa-edit"></a> <a href="delete_mhs.php?npm=<?php echo $row["npm"]; ?>" class="fa fa-trash" onclick="return confirm('Yakin akan di Hapus?')"></a></td>
							</tr>
						<?php
							}
						}
						?>
					</tbody>
				</table>
           </div>
        </div>
        <!-- /page content -->

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
	
  </body>
</html>