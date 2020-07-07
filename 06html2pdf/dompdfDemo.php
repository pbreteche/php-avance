<?php

use Dompdf\Dompdf;
use Dompdf\Options;

require __DIR__.'/../vendor/autoload.php';

$documentHtml = file_get_contents(__DIR__.'/../doc/page1.html');

$dompdf = new Dompdf();
$dompdf->setBasePath(__DIR__.'/../doc')
        ->setPaper('A4', 'portrait')
        ->loadHtml($documentHtml);
$dompdf->render();
file_put_contents(__DIR__.'/../pdf/dompdf.pdf', $dompdf->output());

$options = new Options();
$options->set('isRemoteEnabled', true);

$documentHtmlWeb = file_get_contents('https://www.dawan.fr/formations/php/php-avance/php-avance--modelisation,-webservices,-librairies-courantes-deploiement,-tests,-frameworks');

$dompdf = new Dompdf($options);
$dompdf->setBaseHost('www.dawan.fr')
        ->setProtocol('https://')
        ->setPaper('A4', 'portrait')
        ->loadHtml($documentHtmlWeb);
$dompdf->render();
file_put_contents(__DIR__.'/../pdf/dompdf-web.pdf', $dompdf->output());
