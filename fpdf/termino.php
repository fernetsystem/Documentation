<?php
     require('libs/fpdf.php');
class PDF extends FPDF    
{
// Cabecera de página
function Header()
{
    $this->AddFont('Times-Roman','','times.php');
    $this->SetFont('Times-Roman');
    $this->SetTextColor(102,102,102);
    $this->SetFontSize(10);
    $this->SetLeftMargin(30);
    $this->SetRightMargin(30);
    $this->Cell(0,0,utf8_decode('ASUNTO: CARTA DE TERMINACIÓN'),0,0,'R');
    $this->Ln(5);
    $this->Cell(0,0,utf8_decode('DE (ESTANCIA I ó II)'),0,0,'R');
    $this->Ln(5);
    $this->Cell(0,0,utf8_decode('Fecha formato largo. Ejemplo: 12 de octubre del 2015'),0,0,'R');
    $this->Ln(5);
    $this->Cell(20,10,utf8_decode('DR. JULIO CESAR RUÍZ MARTÍNEZ'),0,0,'L');
    $this->Ln(10);
    $this->Cell(20,10,utf8_decode('DIRECTOR DE LA DIVISIÓN DE INGENIERÍA EN INFORMÁTICA'),0,0,'L');
    $this->Ln(10);
    $this->Cell(20,10,utf8_decode('UNIVERSIDAD POLITÉCNICA DEL VALLE DE MÉXICO'),0,0,'L');
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial');
    // Número de página
    $this->Cell(0,10,'205BK20100/03(F04)',0,0,'R');
}
}
#$matricula=$_POST['matricula'];
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont('Cabin-Regular','','Cabin-Regular.php');
$pdf->SetFont('Cabin-Regular','',10);
$pdf->SetTextColor(102,102,102);
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(30);
$pdf->MultiCell(0,5,utf8_decode('Por medio de la presente se informa que la C. Nombre del alumno Paterno, Materno y Nombre con Número de Matrícula Matricula alumno(a) de la Carrera de INGENIERÍA EN INFORMÁTICA de la Universidad Politécnica del Valle de México, ha concluido su (Estancia I ó II) en la empresa Nombre de la empresa, desarrollando el proyecto  Nombre del proyecto cubriendo 240 horas, durante el período comprendido entre el fecha de inicio al fecha de término.'));
$pdf->Ln();
$pdf->MultiCell(0,5,utf8_decode('Cabe mencionar que la participación del alumno(a) en esta (Estancia I ò II) es considerada: (SATISFACTORIA (DE 7 A 10) O NO SATISFACTORIA (MENOR QUE 7))______con una calificación de ___, de acuerdo a la siguiente evaluación realizada por los asesores de manera conjunta:'));
$pdf->Ln();
$htmlTable='<TABLE>
<TR>
<TD>S. No.</TD>
<TD>Name</TD>
</TR>

<TR>
<TD>1</TD>
<TD>Azeem</TD>
</TR>

<TR>
<TD>2</TD>
<TD>Atiq</TD>
</TR>
</TABLE>';
$pdf->WriteHTML("$htmlTable");
$pdf->Ln(20);
$pdf->MultiCell(0,5,'Se extiende la presente para los fines que al interesado(a) convengan. Sin otro particular por el momento quedamos a  órdenes para cualquier duda o aclaración al respecto.');
$pdf->Ln(30);
$pdf->Output('CartaTerminoEstancia.pdf','I');
    ?>