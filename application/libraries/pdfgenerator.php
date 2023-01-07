<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// panggil autoload dompdf nya
require_once 'application/config/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;
class Pdfgenerator {
    public function generate($html, $filename='', $paper = '', $orientation = '', $stream=TRUE)
    {   
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename.".pdf", array("Attachment" => 1));
        } else {
            return $dompdf->output();
        }
    }

	public function generate_view($html, $filename='', $paper = '', $orientation = '', $stream=TRUE)
    {   
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
		$options = new Options();
		$options->set('isRemoteEnabled',true);      
        if ($stream) {
            $dompdf->stream($filename.".pdf", array("Attachment" => 0));
        } else {
            return $dompdf->output();
        }
    }


	// // $file_pdf = 'Raport SMP YPII Bungur Bekasi';
	// $paper = 'A4';
	// $orientation = 'potrait';
	// //  $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	//  $dompdf = new Dompdf();
	//  $dompdf->set_option('isRemoteEnabled', TRUE);
	//  $dompdf->loadHtml($html);
	//  $dompdf->setPaper($paper, $orientation);
	//  $dompdf->render();
	//  $dompdf->stream('my.pdf',array('Attachment'=>0));
}
