<?php
session_start();

if(!isset($_SESSION["usuario"])){
	header("Location:login.html");
	
}
?> 
<?php
	
	require_once('../controller/connect.php');
	
	$error="";
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
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page"> 
        <div class="login-box"> 
		<div class="login-logo">       		
		<h1><span><font color="#5494af">Camas Hospitalarias</font> <font color="#c66653">Sistema de Gestion ACHEDG</font></span></h1>
		</div>
		<div class="card">
    		<div class="card-body login-card-body">
            <!-- h2 stays for breadcrumbs -->
            <div id="main">
                <form method="post" class="jNice" name="frm1">
					<h3>Formulario Login Usuario</h3>
                    <?php
						if(isset($_POST['save']))
						{
							$uname=$_POST['uname'];
							$pword=$_POST['pword'];
							
							if($uname==""){ $error="<br><span class=error>Por favor, ingrese un nombre de Usuario</span><br><br>"; }
							elseif($pword==""){ $error="<br><span class=error>Por favor, ingrese una contraseña.</span><br><br>"; }
							else
							{
								$result=mysqli_query($server,"SELECT * FROM users WHERE uname='$uname' AND pword='$pword'");
								if(mysqli_num_rows($result)==0){ $error="<br><span class=error>Invalido Nombre de Usuario/Contraseña</span><br><br>"; }
								else
								{
									$row=mysqli_fetch_array($result);
									session_start();
									$_SESSION['user_id']=$row['user_id'];
									$_SESSION['name']=$row['name'];
									Redirect('../index.php'); 
								}
							}
							if($error!=""){ echo $error; }
						}
					?>
                    <fieldset>
                        <p><input type="text" placeholder="Nombre de Usuario" name="uname" class="form-control"  /></p>
                        <p><input type="password" placeholder="Contraseña" name="pword" class="form-control" /></p>
                        <input type="submit" class="btn btn-primary btn-block" value="Ingresar" name="save" />
                    </fieldset>
                </form>
            </div>
		</div>
		</div>
			<br/>

			<p id="footer">All rights reserved | Este tema fue elaborado por Edgar Alfonso Diaz y Kevin Rojas Fajardo, apoyado en una plantilla gratuita  del sitio github del proyecto de Pranav Roy, para luego modificarla en estructura html, diseño css y gusto propio. </p>
               
    	</div>
<!-- // #main -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/adminlte.min.css">

<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>