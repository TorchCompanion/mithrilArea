<?php
session_start();
require('fpdf.php');

function SetTitle($txt, $pdf)
{
    $pdf->Cell(60, 10, '', 0);
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->Cell(60, 10, '' . $txt, 0, 0, 'C');
    $pdf->Cell(20, 10, '', 0, 1);
}

function SetBold($txt, $pdf)
{
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(45, 7, '' . $txt, 0);
}

function SetLight($txt, $pdf)
{
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(40, 7, '' . $txt, 1, 1);
    $pdf->Cell(1, 2, '', 0, 1);
}

function SetInfo($carac, $info, $pdf)
{
    SetBold($carac, $pdf);
    SetLight($info, $pdf);
}

function SetBackground($x, $y, $carac, $info, $pdf)
{
    $pdf->SetXY($x, $y);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 7, '' . $carac, 0);
    $pdf->SetFont('Arial', 'I', 10);
    $pdf->MultiCell(60, 7, '' . $info, 1, 1);
}

$pdf = new FPDF();

$pdf->AddPage();
SetTitle('Character Sheet', $pdf);
$pdf->Cell(80, 10, '', 0, 1);
SetInfo('Name', $_POST['name'], $pdf);
SetInfo('Lastname', $_POST['lastname'], $pdf);
SetInfo('Age :', $_POST['age'], $pdf);
SetInfo('Gender : ', $_POST['gender'], $pdf);
SetInfo('Race : ', $_POST['race'], $pdf);
SetInfo('Alignment : ', $_POST['alignment'], $pdf);
$pdf->Cell(80, 10, '', 0, 1);
SetInfo('Height : ', $_POST['height'], $pdf);
SetInfo('Weight : ', $_POST['weight'], $pdf);
SetInfo('Hair : ', $_POST['hair'], $pdf);
SetInfo('Skin : ', $_POST['skin'], $pdf);
SetInfo('Eyes : ', $_POST['eyes'], $pdf);
SetInfo('Distinctive signs : ', $_POST['distinctivesigns'], $pdf);
$pdf->Cell(60, 10, '', 0, 1);
SetInfo('Health : ', $_POST['health'], $pdf);
SetInfo('Mana : ', $_POST['mana'], $pdf);
SetInfo('Strength : ', $_POST['strength'], $pdf);
SetInfo('Dexterity : ', $_POST['dexterity'], $pdf);
SetInfo('Intelligence : ', $_POST['intelligence'], $pdf);
SetInfo('Faith : ', $_POST['faith'], $pdf);
SetInfo('Perception : ', $_POST['perception'], $pdf);
SetInfo('Charisma : ', $_POST['charisma'], $pdf);
SetInfo('Reflex : ', $_POST['reflex'], $pdf);
SetBackground(100, 117, 'Background : ', $_POST['background'], $pdf);
$pdf->Output();
