<?php
include("conexion.php");
require('fpdf/fpdf.php');
date_default_timezone_set('America/Chihuahua');

class PDF extends FPDF
{
function Header()
{

    $this->setY(12);
    $this->setX(10);
    
    $this->Image('../img/iconoUTP.png',25,5,33);
    
    $this->SetFont('Arial', 'B', 12);
    
    $this->Text(65, 13, utf8_decode('Universidad Tecnológica de Parral'));
    
    $this->Text(65, 21, utf8_decode('Av. Gral. Jesús Lozoya Solís Km 0.931'));
    $this->Text(65, 27, utf8_decode('Col. Paseos del Almanceña C.P. 33827'));
    $this->Text(65,33, utf8_decode('Tel: (627) 523-21-07 (627)118-64-00'));
    $this->Text(65,39, utf8_decode('noexisteelemail@utparral.edu.mx'));
    
    $this->Image('../img/iconoUTP.png',160,5,33);
    
    //información de # de reporte
    $this->SetFont('Arial','B',10);   
    $this->Text(150,48, utf8_decode('Reporte N°:'));
    $this->SetFont('Arial','',10);  
    $this->Text(176,48, '2002');
    
    
    
    // Agregamos la fecha
    $this->SetFont('Arial','B',10);    
    $this->Text(10,48, utf8_decode('Fecha:'));
    $this->SetFont('Arial','',10);    
    $this->Text(25,48, date('d/m/Y'));


    

    // Agregamos los datos del docente
    $this->SetFont('Arial','B',10);    
    $this->Text(10,54, utf8_decode('Docente:'));
    $this->SetFont('Arial','',10);    
    $this->Text(25,54, '$docenteNombre');
    
    $this->Ln(50);
}

function Footer()
{
     $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(95,5,date('d/m/Y | g:i:a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Sistema Integral para Seguimiento de Aulas."),0,0,"C");
        
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
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20, 7, utf8_decode('Cod'),1,0,'C',0);
    $pdf->Cell(95, 7, utf8_decode('Descripción'),1,0,'C',0);
    $pdf->Cell(20, 7, utf8_decode('Cant'),1,0,'C',0);
    $pdf->Cell(25, 7, utf8_decode('Precio'),1,0,'C',0);
    $pdf->Cell(25, 7, utf8_decode('Total'),1,1,'C',0);
   
    $pdf->SetFont('Arial','',10);

    //Aqui inicia el for con todos los productos
for ($i=0; $i < 5; $i++) { 
   
    $pdf->Cell(20, 7, $i+1,1,0,'L',0);
    $pdf->Cell(95, 7, utf8_decode('Descripción del producto'),1,0,'L',0);
    $pdf->Cell(20, 7, utf8_decode('20'),1,0,'R',0);
    $pdf->Cell(25, 7, utf8_decode('5'),1,0,'R',0);
    $pdf->Cell(25, 7, utf8_decode('100'),1,1,'R',0);
    
}


//// Apartir de aqui esta la tabla con los subtotales y totales

$pdf->Ln(10);

        $pdf->setX(95);
        $pdf->Cell(40,6,'Subtotal',1,0);
        $pdf->Cell(60,6,'4000','1',1,'R');
        $pdf->setX(95);
        $pdf->Cell(40,6,'Descuento',1,0);
        $pdf->Cell(60,6,'4000','1',1,'R');
        $pdf->setX(95);
        $pdf->Cell(40,6,'Impuesto',1,0);
        $pdf->Cell(60,6,'4000','1',1,'R');
        $pdf->setX(95);
        $pdf->Cell(40,6,'Total',1,0);
        $pdf->Cell(60,6,'4000','1',1,'R');
 



$pdf->Output();
?>