<?php
include('conexion.php');
require('fpdf/fpdf.php');
date_default_timezone_set('America/Chihuahua');


class PDF extends FPDF
{
function Header()
{

    $this->setY(12);
    $this->setX(10);
    
    $this->Image('img/iconoUTP.jpeg',25,5,33);
    
    $this->SetFont('Arial', 'B', 14);
    
    $this->Text(70, 15, utf8_decode('Universidad Tecnologica de Parral'));
    
    $this->Text(65, 21, utf8_decode('Av. Gral. Jesús Lozoya Solís Km 0.931 '));
    $this->Text(65, 26, utf8_decode('Col. Paseos del Almanceña C.P. 33827'));
    $this->Text(70,32, utf8_decode('Tel: (627) 523-21-07 (627)118-64-00'));
    $this->Text(78,37, utf8_decode('email@utparral.edu.mx'));
    
    $this->Image('img/iconoUTP.jpeg',160,5,33);
    
    
    //Numero de reporte
    $this->SetFont('Arial','B',10);   
    $this->Text(150,48, utf8_decode('Reporte N°:'));
    $this->SetFont('Arial','',10);  
    $this->Text(176,48, '$reporte_id');
    
    
    
    //Fecha del reporte
    $this->SetFont('Arial','B',10);    
    $this->Text(10,48, utf8_decode('Fecha:'));
    $this->SetFont('Arial','',10);    
    $this->Text(25,48, date('d/m/Y'));
    
    
    
    
    //Datos del docente
    $this->SetFont('Arial','B',10);    
    $this->Text(10,54, utf8_decode('Docente:'));
    $this->SetFont('Arial','',10);    
    $this->Text(25,54, '$docente');
    
    $this->Ln(50);
}

function Footer()
{
     $this->SetFont('Arial', 'B', 8);
        $this->SetY(-15);
        $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(95,5,date('d/m/Y | g:i:a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("© SISTEMA INTEGRAL PARA SEGUIMIENTO DE AULAS."),0,0,"C");
        
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);


$pdf->setY(60);$pdf->setX(135);
    $pdf->Ln();
// En esta parte estan los encabezados
    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Text(10, 80, utf8_decode('Edificio:'));
    $pdf->SetFont('Arial', '', 10);
    $pdf->Text(30, 80, $edificio);

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Text(10, 100, utf8_decode('Aula:'));
    $pdf->SetFont('Arial', '', 10);
    $pdf->Text(25, 86, $aula);

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Text(10, 120, utf8_decode('Incidencia:'));
    $pdf->SetFont('Arial', '', 10);
    $pdf->Text(35, 92, $incidencia);

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Text(10, 140, utf8_decode('Observación:'));
    $pdf->SetFont('Arial', '', 10);
    $pdf->Text(42, 98, $observacion);

$pdf->Output();
?>
