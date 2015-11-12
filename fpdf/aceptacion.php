<?php
     require('libs/fpdf.php');
class PDF extends FPDF    
{
// Cabecera de página
function Header()
{
    $this->AddFont('Times-Roman','','times.php');
    $this->SetFont('Times-Roman','');
    $this->SetTextColor(102,102,102);
    $this->SetFontSize(10);
    $this->SetLeftMargin(20);
    $this->SetRightMargin(20);
    $this->Cell(0,0,utf8_decode(', Estado de México a 00 de xxx de 201x'),0,0,'R');
    $this->Ln(20);
    $this->SetFont('Arial','B',11);
    $this->Cell(20,10,utf8_decode('DR. JULIO CESAR RUÍZ MARTÍNEZ'),0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,utf8_decode('DIRECTOR DE LA DIVISIÓN DE INGENIERÍA EN INFORMÁTICA'),0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,utf8_decode('UNIVERSIDAD POLITÉCNICA DEL VALLE DE MÉXICO'),0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,utf8_decode('PRESENTE'),0,0,'L');
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

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->SetCreator('Carta Compromiso',true);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(102,102,102);
$pdf->SetLeftMargin(20);
$pdf->SetRightMargin(20);
$pdf->Cell(0,5,utf8_decode('Asunto: Carta de Aceptación del alumno(a)'),0,0,'R');
$pdf->Ln(10);
$pdf->MultiCell(0,5,utf8_decode(' Por medio de la presente me permito informarle que el alumno(a) (Nombre completo del alumno(a), con el siguiente orden: Apellido paterno, apellido materno y nombre(s). Este dato se anotará en Negrita) de la carrera de Ingeniería en Informática ha sido aceptado(a) para realizar su (Estancia I ó Estancia II) en esta organización, adscrito al Nombre del área de la empresa en la que participará el alumno(a)   desarrollando el proyecto Nombre completo del proyecto, con base en el Formato de definición del Proyecto de Cooperación. durante el periodo del  Anotar el rango de la fecha en las que el alumno realizará su estancia con 240 horas.'));
$pdf->Ln();
$pdf->MultiCell(0,5,utf8_decode('Así mismo le presento al (nombre del asesor externo) (correo del asesor externo) como Asesor Externo  quien tendrá como responsabilidad supervisar, asesorar y evaluar el proyecto del alumno en colaboración con el Profesor Responsable de la Universidad.'));
$pdf->Ln();
$pdf->MultiCell(0,5,utf8_decode('Para los trámites a que haya lugar y sin otro particular por el momento, aprovecho la ocasión para enviarle un cordial saludo'));
$pdf->Ln(20);
$pdf->Cell(0,0,'ATENTAMENTE',0,0,'C');
$pdf->Ln(30);
$pdf->Cell(0,0,'«nombre del responsable de la estancia»',0,0,'C');
$pdf->Ln(10);
$pdf->Cell(0,0,$numeroDeDocumento_PRB,0,0,'C');
$pdf->Ln(10);
$pdf->Output('CartaAceptacionEstancia.pdf','I');
    ?>