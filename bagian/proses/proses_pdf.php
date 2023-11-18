<?php
require '../../vendor/autoload.php';// Sesuaikan dengan path Composer Anda

use Dompdf\Dompdf;

$dompdf = new Dompdf();

// Load HTML kartu disposisi
$html = file_get_contents('../cetak_disposisi.php');

// Konversi HTML menjadi PDF
$dompdf->loadHtml($html);

// Set opsi PDF (opsional)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (output langsung ke browser)
$dompdf->render();

// Keluarkan PDF ke browser
$dompdf->stream('kartu_disposisi.pdf');