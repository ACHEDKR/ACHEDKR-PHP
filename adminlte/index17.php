<?php
    include 'plantillareporte.php';
    
	session_start();
    require_once('controller/connect.php');
    if(!isset($_SESSION['user_id'])){ Redirect('vista/login.html'); }


    //PHP Reporte de tods las camas creadas
    
	$query = "SELECT * FROM beds ORDER BY bed_id ASC";
	$resultado = $server->query($query);
	
    $pdf = new PDF('L','mm','A4');
    
	$pdf->AliasNbPages();
    $pdf->AddPage();
    
    
	
    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(260,10,'REPORTE DE CAMAS CREADAS',1,1,'C',1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(50,6,'BED_ID',1,0,'C',1);
    $pdf->Cell(50,6,'SERVICIO',1,0,'C',1);
    $pdf->Cell(50,6,'ACOMODACION',1,0,'C',1);
    $pdf->Cell(50,6,'TIPO',1,0,'C',1);
    $pdf->Cell(50,6,'PISO',1,1,'C',1);
    
    
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
        
		              
		
        $pdf->Cell(10,12,$row['id'],1,0,'C');
        $pdf->Cell(50,12,utf8_decode($row['bed_id']),1,0,'C');
        $pdf->Cell(50,12,utf8_decode($row['servicio_cam']),1,0,'C');
        $pdf->Cell(50,12,($row['acomodacion_cam']),1,0,'C');
        $pdf->Cell(50,12,utf8_decode($row['type']),1,0,'C');
        $pdf->Cell(50,12,($row['ward']),1,1,'C');
        
        
        
	}
	$pdf->Output();
?>