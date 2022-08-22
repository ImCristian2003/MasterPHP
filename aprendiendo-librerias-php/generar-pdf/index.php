<?php

    require "../vendor/autoload.php";

    use Spipu\Html2Pdf\Html2Pdf;

    //Recoger la vista a imprimir
    ob_start();
    require_once 'pfd_para_generar.php';
    $html = ob_get_clean();

    $html2pdf->writeHTML($html);
    $html2pdf->output('pdf_generado.pdf');