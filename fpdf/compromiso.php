<?php
require('libs/fpdf.php');
class PDF extends FPDF    
{
// Cabecera de página
function Header()
{
    $ciclo='PRIMER';
    $numero='CUARTO';
    $this->AddFont('GillSansMT-Bold','','gillB.php');
    $this->SetFont('GillSansMT-Bold','',15);
    $this->SetTextColor(128);
    $this->Cell(20,10,'ESTANCIA I',0,0,'L');
    $this->Ln(10);
    $this->Cell(20,10,''.$numero.' CUATRIMESTRE',0,0,'L');
    $this->Ln(10);
    $this->Cell(20,10,''.$ciclo.utf8_decode(' CICLO DE FORMACIÓN'),0,0,'L');
    $this->Ln(10);
    $this->Cell(20,10,'CARTA COMPROMISO',0,0,'L');
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    $this->AddFont('GillSansMT','','gill.php');
    // Arial italic 8
    $this->SetFont('GillSansMT');
    // Número de página
    $this->Cell(0,10,'205BK20100/03(F03)',0,0,'R');
}
}
#$matricula=$_POST['matricula'];
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->SetCreator('Carta Compromiso',true);
$pdf->AddFont('GillSansMT','','gill.php');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('GillSansMT','',12);
$pdf->MultiCell(0,5,utf8_decode('Por medio de la presente y de conformidad con los artículos 28, Fracción VIII y 29 Fracciones II, III, V y VI del Reglamento de alumnos; el suscrito(a) «4>> PATERNO, MATERNO Y NOMBRE EN MAYÚSCULAS NEGRITA alumno de esta Universidad, con matrícula «5», de la Carrera de «6», quien realiza su Estancia en «7>> NOMBRE DE LA EMPRESA, durante el período comprendido del «8», con horario de 240 horas, me comprometo a: '));
$pdf->Ln();
$column_width = $pdf->w-30;
$regla1= utf8_decode('1. Cumplir con las actividades asignadas y presentar los informes correspondientes.');
$regla2= utf8_decode('2. Atender las disposiciones establecidas por la organización receptora.');
$regla3= utf8_decode('3. Acatar las políticas institucionales que legitiman a la Universidad, mismas que se encuentran plasmadas en su Decreto de Creación, Reglamento de alumnos y Reglamento de Estudios.');
$regla4= utf8_decode('4. Cumplir con el procedimiento establecido para la realización de las Estancias.');
$regla5= utf8_decode('5. Durante las Estancias el alumno deberá observar una conducta ética y profesional, así como abstenerse de divulgar información relacionada con el proyecto realizado en la organización receptora.');
$firma= utf8_decode('Se firma la presente el día «9».');
//Test 3
$test3 = array();
$test3['bullet'] = '';
$test3['margin'] = '';
$test3['indent'] = 5;
$test3['spacer'] = 5;
$test3['text'] = array();
    $test3['text'][0] = $regla1;
    $test3['text'][1] = $regla2;
    $test3['text'][2] = $regla3;
    $test3['text'][3] = $regla4;
    $test3['text'][4] = $regla5;
    $test3['text'][5] = $firma;
$pdf->SetX(15);
$pdf->MultiCellBltArray($column_width-$pdf->x,6,$test3);
$pdf->Ln();
$pdf->Cell(0,0,'ATENTAMENTE',0,0,'C');
$pdf->Ln(10);
$pdf->Cell(0,0,'NOMBRE COMPLETO',0,0,'C');
$pdf->Ln(10);
$pdf->Cell(0,0,'FIRMA DEL ALUMNO(A)',0,0,'C');
$pdf->Ln(20);
$pdf->Cell(80,0,utf8_decode('<<11>> ASESOR INTERNO'),0,0,'C'); 
$pdf->Cell(80,0,utf8_decode('<<12>> ASESOR EXTERNO'),0,1,'C');
$pdf->Output('CartaCompromisoEstancia.pdf','I');
    ?>
