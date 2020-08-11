<?php 
session_start();
require_once('controller/connect.php');
if(!isset($_SESSION['user_id'])){ Redirect('vista/login.html'); }
else
	{
		$error="";
		$error2="";
		$msg="<br><span class=msg>Asignacion Paciente-Cama, Satisfactoria.</span><br><br>";
		$msg2="<br><span class=msg>Proceso Alta Paciente, liberacion de Cama, Satisfactorio.</span><br><br>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ACHEDKR</title>
  <link href="dist/img/archivo.png" rel="icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="contacto.php" class="nav-link">Contacto</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Buscar">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-power-off"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            
            <span class="float-right text-muted text-sm"></span>
          </a>

        	<i class="logout"><a href="controller/logout.php"><a href="controller/logoutweb.php">CERRAR SESION</a></l>
               
        </div>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ACHEDKR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tablero Principal
                <span class="right badge badge-danger">Hello!!</span>
              </p>
            </a>
          </li>




          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pacientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vista Pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Nuevo Paciente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index4.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asignar/Desasignar Cama </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index13.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index10.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editar pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index11.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Borrar pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index12.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historial P/Eliminados</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Camas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index5.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vista de Camas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index6.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Añadir Nueva Cama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index14.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Camas Libres</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index15.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Camas Ocupadas</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Citas Pos-Hospitalarias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index7.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vista citas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index8.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agendar nueva cita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index9.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar citas </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index16.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index17.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte camas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index18.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte camas ocupadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index19.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte paciente sin asignar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index20.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte citas P/H</p>
                </a>
              </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


   




    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Vista pacientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Vista pacientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


      <!-- h2 stays for breadcrumbs -->
      
    <!-- Main content -->
    <section class="content">


      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->


<!-- Zona para editar -->

           <!-- h2 stays for breadcrumbs -->
           <h2>Asignar Paciente-Cama/Dar de Alta al Paciente en Cama</h2>
         
           <div class="card-body">
      <form method="post" class="form-group">
					<h3>Asignar Paciente-Cama</h3>

          <div class="alert alert-info">
                    <?php
						if(isset($_POST['assign']))
						{
							$patient=$_POST['patient'];
							$bed=$_POST['bed'];
							
							if($patient=="none"){ $error="<br><span class=error>Por favor, Seleccione un Paciente</span><br><br>"; }
							elseif($bed=="none"){ $error="<br><span class=error>Por favor, Seleccione una Cama</span><br><br>"; }
							else
							{
								$result4=mysqli_query($server,"SELECT * FROM pat_to_bed WHERE bed_id='$bed'");
								if($row4=mysqli_num_rows($result4)>0){ $error="<br><span class=error>La Cama: $bed ,ya ha sido asignado a un Paciente</span><br><br>"; }
								else
								{
									mysqli_query($server,"UPDATE pat_to_bed SET bed_id='$bed' WHERE pat_id='$patient'");
									echo $msg;
								}
							}
							
							if($error!=""){ echo $error; }
						}
					?>
          </div>
          <fieldset>
            <p><label>Paciente(s):</label>
            <select name="patient"class="form-control">
              <option value="none">[Seleccione, Por favor un Paciente]
              </option>
                <?php
                  // ESTO VA EN LA CONSULTA DESPUES DEL WHERE AND pat_to_bed.bed_id = 'none'
									$result=mysqli_query($server,"SELECT patients.pat_id, patients.name, patients.lastname, patients.cedula, pat_to_bed.pat_id, pat_to_bed.bed_id FROM patients, pat_to_bed WHERE patients.pat_id = pat_to_bed.pat_id  ORDER BY patients.pat_id DESC");
									while($row=mysqli_fetch_row($result))
									{
										$rn=$row['0'];
					 					if(strlen($rn)==1)
					 					$rn="000".$rn;
					 					elseif(strlen($rn)==2)
					 					$rn="00".$rn;
					 					elseif(strlen($rn)==3)
					 					$rn="0".$rn;
					 					elseif(strlen($rn)>3)
					 					$rn=$rn;
										echo"<option value=$row[0]>$rn - $row[1]-$row[2]-$row[3]</option>";
									}
								?>
            </select>
                            </p>
                            <p><label>Cama(s):</label>
                            <select name="bed"class="form-control">
                            	<option value="none">[Seleccione, Por favor una Cama]</option>
                              
                            	<?php
									$result2=mysqli_query($server,"SELECT * FROM beds ORDER BY bed_id DESC");
									while($row2=mysqli_fetch_assoc($result2))
									{
										echo"<option value=$row2[bed_id]>Cama $row2[bed_id] - $row2[type]</option>";
									}
								?>
                
                            </select>
                            </p>
                            <input class="btn btn-block btn-success" type="submit" value="Asignar Cama al Paciente" name="assign" />
        </fieldset>
                    </form>
                        <br /><br />
                    <form method="post" class="jNice" name="frm2">
					<h3>Dar de Alta al Paciente en Cama</h3>
          <div class="alert alert-info">
                    <?php
						if(isset($_POST['unassign']))
						{
							$ptb=trim($_POST['ptb']);
							
							if($ptb=="none"){ $error2="<br><span class=error>Por Favor Seleccione una relacion Paciente-Cama</span><br><br>"; }
							else
							{
								mysqli_query($server,"UPDATE pat_to_bed SET bed_id=0 WHERE pat_id='$ptb'");
								echo $msg2;
							}
							
							if($error2!=""){ echo $error2; }
						}
					?>
          </div>
                    	<fieldset>
                            <p><label>Relacion Paciente-Cama</label>
                            <select name="ptb"class="form-control">
                            	<option value="none">[Seleccione una opcion para dar Alta]</option>
                                <?php
                                $result3=mysqli_query($server,"SELECT patients.pat_id, patients.name, patients.lastname, pat_to_bed.pat_id, pat_to_bed.bed_id FROM patients, pat_to_bed WHERE patients.pat_id = pat_to_bed.pat_id AND pat_to_bed.bed_id>0 ORDER BY patients.pat_id DESC");
									while($row3=mysqli_fetch_row($result3))
									{
										$rn=$row3['0'];
					 					if(strlen($rn)==1)
					 					$rn="000".$rn;
					 					elseif(strlen($rn)==2)
					 					$rn="00".$rn;
					 					elseif(strlen($rn)==3)
					 					$rn="0".$rn;
					 					elseif(strlen($rn)>3)
					 					$rn=$rn;
										echo"<option value=$row3[0]>Cama, $row3[3] Ocupada actualmente por ID: $rn Paciente $row3[1]</option>";
									}
									?>
                            </select>
                            </p>
                            <input class="btn btn-block btn-success" type="submit" value="Dar de Alta" name="unassign" />
                        </fieldset>
                    </form>
                </div>
                <!-- // #main -->



<!-- Zona final para editar -->
       


        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
