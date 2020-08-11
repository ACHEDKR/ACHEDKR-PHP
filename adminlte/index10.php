<?php 
session_start();
require_once('controller/connect.php');
if(!isset($_SESSION['user_id'])){ Redirect('vista/login.html'); }
{
  $error="";
  $msgc="<span>Resultado De La Busqueda Para: </span>";
  
  $msg="<br><span>Paciente Actualizado Satisfactoriamente</span><br><br>";
 
  
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
                <a href="index4.php" class="nav-link">
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
                <a href="index10.php" class="nav-link active">
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

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
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
<div class="card-body">
<form method="post">
        <p><label>Cedula paciente:</label></p>
<div class="input-group input-group-sm">

        
        <input class="form-control" type="search" id="bpac" name="bpac"  placeholder="Buscar" aria-label="Buscar">
       
        <div class="input-group-append">
          <input class="btn btn-info" type="submit" name="buscar_pac" value="Buscar" >
        </div>
  
</div>


<br>

<div>
    <table class="table table-bordered table-striped">
							                <tr>
                                <td><b>ID</b></td>
                                <td><b>Nombres</b></td>
								                <td><b>Apellidos</b></td>
                                <td><b>Cedula</b></td>
								                <td><b>E.P.S</b></td>
                                <td><b>Edad</b></td>
                                <td><b>Genero</b></td>
                                <td><b>ABO/RH</b></td>
                                <td><b>Telefono</b></td>
                                <td><b>Prioridad</b></td>
                                <td><b>Observacion</b></td>
                                
                                
                              </tr> 
              <?php

              if(isset($_POST['buscar_pac']))
              {

                $bpac = trim($_POST['bpac']);
                
								$result=mysqli_query($server,"SELECT * FROM patients WHERE cedula = '$bpac'");
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
									
									echo"<tr class=odd>
                  <td>$rn</td>
                  <td>$row[1]</td>
                  <td>$row[2]</td>
                  <td>$row[3]</td>
									<td>$row[4]</td>
									<td>$row[5]</td>
                  <td>$row[6]</td>
                  <td>$row[7]</td>
									<td>$row[8]</td>
                  <td>$row[9]</td>
                  <td>$row[10]</td>
									
									
                  </tr>";
                  echo $msgc;
                  echo $bpac;
                }
              }
							?>                       
    </table>
  <br /><br />

</div>
</form>
<label>Datos del paciente a editar</label>
<form method="post">
<div>
          <?php
          
						if(isset($_POST['actualizar']))
						{
              $idpat=trim($_POST['idpat']);
              $bname=trim($_POST['bname']);
              $blastname=trim($_POST['blastname']);
							$beps=trim($_POST['beps']);
							$bage=trim($_POST['bage']);
							$bsex=$_POST['bsex'];
							$bbg=trim($_POST['bbg']);
              $bphone=trim($_POST['bphone']);
              $bprioridad=trim($_POST['bprioridad']);
              $bobservacion=trim($_POST['bobservacion']);
							
              if($bname==""){ $error="<br><span class=error>Por favor Ingrese un Nombre del Paciente</span><br><br>"; }
              elseif($idpat==""){ $error="<br><span class=error>Por favor Ingrese un ID del paciente a modificar</span><br><br>"; }
              elseif($blastname==""){ $error="<br><span class=error>Por favor Ingrese un Apellido del Paciente</span><br><br>"; }
							elseif($beps==""){ $error="<br><span class=error>Por favor Ingrese una E.P.S del Paciente</span><br><br>"; }
							elseif($bage==""){ $error="<br><span class=error>Por favor Ingrese una Edad</span><br><br>"; }
							elseif($bage<1){ $error="<br><span class=error>Por favor, Ingrese un valor mayor que cero para la edad</span><br><br>"; }
							elseif(!is_numeric($bage)){ $error="<br><span class=error>El dato ingresado en el campo edad no es un numero, Inserta por favor un dato numerico</span><br><br>"; }
							elseif($bsex=="none"){ $error="<br><span class=error>Por favor Seleccione el Genero</span><br><br>"; }
							elseif($bbg==""){ $error="<br><span class=error>Por favor Ingrese el Grupo Sanguineo</span><br><br>"; }
              elseif($bphone==""){ $error="<br><span class=error>Por favor Ingrese el numero telefonico</span><br><br>"; }
              elseif($bprioridad=="none"){ $error="<br><span class=error>Por favor Seleccione una prioridad de la lista desplegable</span><br><br>"; }
              elseif($bobservacion==""){ $error="<br><span class=error>Por favor Ingrese una Observacion del Paciente</span><br><br>"; }
							else
							{
								$result=mysqli_query($server,"UPDATE patients SET name = '$bname', lastname = '$blastname', eps = '$beps', age = '$bage', sex = '$bsex', blood_group = '$bbg', phone = '$bphone', prioridad = '$bprioridad', observacion = '$bobservacion' WHERE patients.pat_id = '$idpat';");
								
                
                echo $msg;
                
							}
							
              if($error!=""){ echo $error; }
              
						}
					?>

                        <form method="post">
                          <p><label>Id paciente (obligatorio):</label><input type="text" id="idpat" name="idpat" class="form-control" maxlength="50" autofocus value=" " maxlength="50" required/></p>
                        	<p><label>Nombres del Paciente:</label><input type="text" id="bname" name="bname" class="form-control" maxlength="50" autofocus value=" " maxlength="50" required/></p>
							            <p><label>Apellidos del Paciente:</label><input type="text" id="blastname" name="blastname" class="form-control" maxlength="50" autofocus value="  " required /></p>
							            <p><label>E.P.S del Paciente:</label><input type="text" id="beps" name="beps" class="form-control" maxlength="100" autofocus value="  " required /></p>
                          <p><label>Edad:</label><input type="number" id="bage" name="bage" class="form-control" maxlength="3" value="<?php echo $bage; ?>"  required/></p>
                          <p><label>Genero:</label>
                            <select id="bsex" name="bsex" class="form-control">
                            	<option value="no seleccionado">[Porfavor Seleccione una opcion]</option>
                            	<option value="Masculino">Masculino</option>
                            	<option value="Femenino">Femenino</option>
                            	<option value="TransGenero">TransGenero</option>
                            	<option value="Otro">Otro</option>
                            </select>
                          </p>
                          <p><label>Grupo Sanguineo y RH:</label>
                            <select id="bbg" name="bbg" class="form-control">
                            	<option value="no seleccionado">[Porfavor Seleccione una opcion]</option>
                            	<option value="O+">O+</option>
                            	<option value="O-">O-</option>
                            	<option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                            	<option value="B-">B-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                            </select>
                          </p>
                          <p><label>Numero Telefonico:</label><input type="text" id="bphone" name="bphone" class="form-control" maxlength="12" value="  "  required /></p>
                          <p><label>Prioridad:</label>
                            <select id="bprioridad" name="bprioridad" class="form-control">
                            	<option value="no seleccionado">[Porfavor Seleccione una opcion]</option>
                            	<option value="Primera Prioridad-Pacientes con riesgo vital.">Primera Prioridad-Pacientes con riesgo vital.</option>
                            	<option value="Segunda Prioridad-Pacientes con enfermedades agudas.">Segunda Prioridad-Pacientes con enfermedades agudas.</option>
                            	<option value="Tercera Prioridad-Pacientes con enfermedades cronicas descompensadas.">Tercera Prioridad-Pacientes con enfermedades cronicas descompensadas.</option>
                              <option value="Cuarta Prioridad-Pacientes que necesitan una intervencion medica y de enfermeria.">Cuarta Prioridad-Pacientes que necesitan una intervencion medica y de enfermeria.</option>
                            	<option value="Quinta Prioridad-Pacientes que deseen una consulta medica.">Quinta Prioridad-Pacientes que deseen una consulta medica.</option>
                            </select>

                          <p><label>Observacion:</label><input type="text" id="bobservacion" name="bobservacion" class="form-control" autofocus value="  " /></p>
                          <input class="btn btn-block btn-success" type="submit" value="Actualizar" name="actualizar" />
                        </form>





</div>            
</form>
</div>
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
