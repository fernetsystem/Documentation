<?php
     require('php/fpdf.php');
class PDF extends FPDF    
{
// Cabecera de página
function Header()
{
    $this->AddFont('Times-Roman','','times.php');
    $this->SetFont('Times-Roman');
    $this->SetFontSize(12);
    $this->SetLeftMargin(30);
    $this->SetRightMargin(30);
    $this->Image('gobierno.jpg',30,20,40);
    $this->Image('upvm.jpg',150,20,30);
    $this->Ln(30);
    $this->SetFillColor(200,200,200);
    $this->Cell(0,5,utf8_decode('INFORME QUINCENAL DEL DESARROLLO DEL PROYECTO'),0,0,'C',true);
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial');
    // Número de página
    $this->Cell(0,10,'205BK20100/03(F05)',0,0,'R');
}
}
$matricula=$_POST['matricula'];
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->SetCreator('Carta Compromiso',true);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times-Roman','',10);
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(30);
$pdf->Cell(0,5,utf8_decode('DIVISIÓN DE INGENIERÍA INFORMÁTICA'),0,0,'C');
$pdf->Ln(10);
$pdf->SetLeftMargin(100);
$pdf->Cell(0,0,'FECHA:',0,0,'R');
$pdf->Ln(10);
$pdf->Cell(0,0,'No. DE REPORTE:',0,0,'R');
$pdf->Ln(10);
$pdf->Cell(0,0,'PERIODO REPORTADO:',0,0,'R');
$pdf->Ln(10);
$pdf->Cell(0,0,'HORAS ACUMULADAS:',0,0,'R');
$pdf->Ln(10);
$pdf->Cell(0,0,'% DE AVANCE:',0,0,'R');
$pdf->SetLeftMargin(30);
$pdf->Ln(10);
$pdf->Cell(0,0,'ALUMNO:',0,0);
$pdf->Ln(10);
$pdf->Cell(0,0,'MATRICULA:',0,0);
$pdf->Ln(10);
$pdf->Cell(0,0,'PROYECTO:',0,0);
$pdf->Ln(10);
$pdf->Cell(0,0,'EMPRESA:',0,0);
$pdf->Ln(10);
$pdf->SetFontSize(12);
//$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(30);
$pdf->Cell(0,0,utf8_decode('BREVE DESCRIPCIÓN DE LAS ACTIVIDADES DESARROLLADAS EN EL PROYECTO:'),0,0);
$pdf->Ln(10);
$pdf->Output('Reporte quincenal.pdf','I');
    ?>