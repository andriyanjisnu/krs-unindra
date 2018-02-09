<?php
	require('koneksi.php');
	session_start();
	if (isset($_GET['npm'])) {
		
	$npm = ($_GET['npm']);
		
	$sql = "SELECT * FROM mahasiswa WHERE npm='$_GET[npm]'";
	$query = mysqli_query($con, $sql);
	
	if(!$query){
      die ("Query Error: ".mysqli_errno($con).
         " - ".mysqli_error($con));
    }
	
	$row = mysqli_fetch_assoc($query);
	
    $nama = $row['nama'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $tempat_lahir = $row['tempat_lahir'];
    $tanggal_lahir= $row['tanggal_lahir'];
    $alamat= $row['alamat'];
    $fakultas= $row['fakultas'];
    $kelas= $row['kelas'];
    $password= $row['password'];
    $tahun_angkatan= $row['tahun_angkatan'];
	
	} else {
	 header("location:index.php");
		
	}	
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
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- jquery-ui -->
    <link href="css/jquery-ui.min.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
	
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
			<div class="clearfix"></div>
				<div class="row">
				  <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_title">
						<h2>Input Mahasiswa</h2>
						<div class="clearfix"></div>
					  </div>
            
			<div class="x_content"><br />
            <form id="frmUser" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_update.php" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="npm">NPM</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="npm" name="npm" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row["npm"]?>" readonly="readonly"/>
					</div>
				</div>
                <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row["nama"]?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="jenis_kelamin" name="jenis_kelamin" required="required" class="form-control col-md-7 col-xs-12">
                            <option value="Laki-laki" <?php echo $row["jenis_kelamin"] == "Laki-laki" ? 'selected="selected"': ''?> >Laki-laki</option>
                            <option value="Perempuan" <?php echo $row["jenis_kelamin"] == "Perempuan" ? 'selected="selected"': ''?> >Perempuan</option>
                        </select>
					</div>
				</div>
                <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row["tempat_lahir"]?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_lahir">Tanggal Lahir</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="tanggal_lahir" name="tanggal_lahir" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row["tanggal_lahir"]?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <textarea rows="3" type="text" id="alamat" name="alamat" required="required" class="form-control col-md-7 col-xs-12" ><?php echo $row["alamat"]?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fakultas">Fakultas</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="fakultas" name="fakultas" required="required" class="form-control col-md-7 col-xs-12">
                            <option></option>
                            <option value="FIIPS" <?php echo $row["fakultas"] == "FIIPS" ? 'selected="selected"': ''?> >FIIPS</option>
                            <option value="FTMIPA" <?php echo $row["fakultas"] == "FTMIPA" ? 'selected="selected"': ''?> >FTMIPA</option>
                            <option value="FBS" <?php echo $row["fakultas"] == "FBS" ? 'selected="selected"': ''?> >FBS</option>
                            <option value="FPs" <?php echo $row["fakultas"] == "FPs" ? 'selected="selected"': ''?> >FPs</option>
                        </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kelas">Kelas</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="kelas" name="kelas" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row["kelas"]?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="password" required="required" class="form-control col-md-7 col-xs-12" id="password" name="password" value="<?php echo $row["password"]?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tahun_angkatan">Tahun Angkatan</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" id="tahun_angkatan" name="tahun_angkatan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row["tahun_angkatan"]?>"/>
					</div>
				</div>
				<div class="form-group" style="display: none;">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="mahasiswa">Status</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="mahasiswa" name="mahasiswa" required="required" value="mahasiswa" class="form-control col-md-7 col-xs-12" readonly="readonly"/>
					</div>
				</div>
				
                <div class="ln_solid"></div>
				  <div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <a href="m_all.php"><button class="btn btn-primary" type="button">Cancel</button></a>
					  <button class="btn btn-primary" type="reset">Reset</button>
					  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
					</div>
				  </div>
				</div>
                    </form>
                  </div>
                </div>
              </div>
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
	<!-- bootstrap-datetimepicker -->   
    <script src="vendors/moment/min/moment.min.js"></script>
	<script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
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
	<script>
	$(function () {
		$('#tanggal_lahir').datetimepicker({
			format: 'YYYY-MM-DD'
		});
	});
	</script>
	
  </body>
</html>