<?php
    include 'plantillareporte.php';
    
	session_start();
    require_once('controller/connect.php');
    if(!isset($_SESSION['user_id'])){ Redirect('vista/login.html'); }
    
    //PHP REPORTE DE ESTADO PACIENTES CON ESPERA DE CAMA PARA ASIGNAR

	$query = "SELECT patients.*,pat_to_bed.pat_id, pat_to_bed.bed_id FROM patients, pat_to_bed WHERE patients.pat_id=pat_to_bed.pat_id AND pat_to_bed.bed_id='none' ORDER BY patients.pat_id ASC";
	$resultado = $server->query($query);
	
    $pdf = new PDF('L','mm','A4');
    
	$pdf->AliasNbPages();
    $pdf->AddPage();
    
    
	
    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(280,10,'REPORTE DE ESTADO PACIENTES CON ESPERA DE CAMA PARA ASIGNAR',1,1,'C',1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(25,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(25,6,'APELLIDO',1,0,'C',1);
    $pdf->Cell(25,6,'CEDULA',1,0,'C',1);
    $pdf->Cell(25,6,'E.P.S',1,0,'C',1);
    $pdf->Cell(15,6,'EDAD',1,0,'C',1);
    $pdf->Cell(25,6,'GENERO',1,0,'C',1);
    $pdf->Cell(10,6,'RH',1,0,'C',1);
    $pdf->Cell(25,6,'TELEFONO',1,0,'C',1);
    $pdf->Cell(30,6,'PRIORIDAD',1,0,'C',1);
    $pdf->Cell(30,6,'F_REGISTRO',1,0,'C',1);
    $pdf->Cell(35,6,'ESTADO',1,1,'C',1);
    
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
        
		if($row['bed_id']=="none"){ $row['bed_id']="Sin Asignar"; }
        elseif($row['bed_id']>0){ $row['bed_id']="Ingresado a Cama {$row['bed_id']} "; } 
        else{ $row['bed_id']="Dado de Alta"; }
									

                        
		
        $pdf->Cell(10,12,$row['pat_id'],1,0,'C');
        $pdf->Cell(25,12,utf8_decode($row['name']),1,0,'C');
        $pdf->Cell(25,12,utf8_decode($row['lastname']),1,0,'C');
        $pdf->Cell(25,12,($row['cedula']),1,0,'C');
        $pdf->Cell(25,12,utf8_decode($row['eps']),1,0,'C');
        $pdf->Cell(15,12,($row['age']),1,0,'C');
        $pdf->Cell(25,12,utf8_decode($row['sex']),1,0,'C');
        $pdf->Cell(10,12,utf8_decode($row['blood_group']),1,0,'C');
        $pdf->Cell(25,12,utf8_decode($row['phone']),1,0,'C');
        $pdf->CellAjustar(30,12,utf8_decode($row['prioridad']),1,0,'FJ');
        $pdf->Cell(30,12,utf8_decode($row['FECHA_REGISTRO']),1,0,'C');
        $pdf->Cell(35,12,utf8_decode($row['bed_id']),1,1,'C');
        
        
	}
	$pdf->Output();
?>