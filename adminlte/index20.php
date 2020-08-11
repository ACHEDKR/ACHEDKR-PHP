<?php
    include 'plantillareporte.php';
    
	session_start();
    require_once('controller/connect.php');
    if(!isset($_SESSION['user_id'])){ Redirect('vista/login.html'); }
    
    //PHP REPORTE DE TODAS LAS CITAS POSHOSPITALARIAS

	$query = "SELECT citaph.*, patients.* FROM citaph, patients WHERE patients.pat_id=citaph.pat_id_citaph ORDER BY id_citaph DESC";
	$resultado = $server->query($query);
	
    $pdf = new PDF('L','mm','A4');
    
	$pdf->AliasNbPages();
    $pdf->AddPage();
    
    
	
    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(280,10,'REPORTE DE TODAS LAS CITAS POSHOSPITALARIAS',1,1,'C',1);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(15,6,'ID_C',1,0,'C',1);
	$pdf->Cell(15,6,'ID_P',1,0,'C',1);
    $pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(50,6,'APELLIDO',1,0,'C',1);
    $pdf->Cell(50,6,'CEDULA',1,0,'C',1);
    $pdf->Cell(50,6,'FECHA CITA PROGRAMADA',1,0,'C',1);
    $pdf->Cell(50,6,'FECHA CREACION DE REGISTRO',1,1,'C',1);
    
    
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
        
		

                        
		
        $pdf->Cell(15,12,$row['id_citaph'],1,0,'C');
        $pdf->Cell(15,12,($row['pat_id_citaph']),1,0,'C');
        $pdf->Cell(50,12,utf8_decode($row['name']),1,0,'C');
        $pdf->Cell(50,12,utf8_decode($row['lastname']),1,0,'C');
        $pdf->Cell(50,12,($row['cedula']),1,0,'C');
        $pdf->Cell(50,12,($row['fechaCita_citaph']),1,0,'C');
        $pdf->Cell(50,12,($row['fechaRegistro_citaph']),1,1,'C');
        
        
        
	}
	$pdf->Output();
?>