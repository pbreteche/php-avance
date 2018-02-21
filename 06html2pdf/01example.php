<?php

namespace pdf;

use Spipu\Html2Pdf\Html2Pdf;

require __DIR__ . '/../vendor/autoload.php';

ob_start();
include __DIR__ . '/demo.php';
$docWeb = ob_get_clean();


$html2pdf = new Html2Pdf('P', 'A4', 'fr', true);
//$font = $html2pdf->pdf->??( __DIR__ . '/Rubik/Rubik-Regular.ttf', 'TrueTypeUnicode' );
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML('<h1>Mon super PDF</h1><p>Avec une belle police (de caractères)</p>');
$html2pdf->output(__DIR__ . '/exemple1.pdf', 'F');

$html3pdf = new Html2Pdf('P', 'A4', 'fr', true);
$html3pdf->setDefaultFont('Arial');
$html3pdf->writeHTML($docWeb);
$html3pdf->output(__DIR__ . '/exemple2.pdf', 'F');
