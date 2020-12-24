<?php
// aqui tengo disponible las clases dentro de vendor
require_once '../vendor/autoload.php';

// The main class of this library is
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

// Recoger la vista a imprimir

// funcion nativa php
ob_start();
require_once 'pdf_para_generar.php';
// todo lo que hay entre las dos llamadas se va a guradar en una variable  
$html = ob_get_clean();

// escribe en el objeto
$html2pdf->writeHTML($html);

$html2pdf->output('generated.pdf');