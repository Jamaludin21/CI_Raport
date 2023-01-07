<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'third_party/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options; 
use Dompdf\FontMetrics; 

class Dompdf_septi {
	public function generate($html, $filename='', $stream=TRUE, $paper = 'A4', $orientation = "portrait", $attachment = array()) {
		$dompdf = new DOMPDF();
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		$dompdf->set_option("isPhpEnabled", true);
		$dompdf->render(); 
		$font = $dompdf->getFontMetrics()->getFont("times", "bold");
    $canvas = $dompdf->get_canvas();
    $canvas->page_script('
      if ($PAGE_NUM >= 0) {
        $current_page = $PAGE_NUM-1;
        $total_pages = $PAGE_COUNT-1;
        $font = $fontMetrics->getFont("times", "normal");
        $pdf->set_opacity(1,"Multiply");
        $pdf->text(45, 800, "* Dokumen ini hanya bersifat informasi dan tidak dapat menggantikan rapor asli dari sekolah.", $font, 10, array(0,0,0));
        $pdf->set_opacity(0.2,"Multiply");
      }
    ');
    $canvas->set_opacity(.1,'Multiply');//Multiply means apply to all pages.
    $canvas->page_text(185, 450, "SALINAN", $font, 80, array(0, 0, 0), 0, 0, -45);
/*
		$canvas = $dompdf->getCanvas(); 
		$fontMetrics = new FontMetrics($canvas, $options); 
		$w = $canvas->get_width(); 
		$h = $canvas->get_height(); 
		$font = $fontMetrics->getFont('times', 'bold'); 
		$text = "SALINAN"; 
		$txtHeight = $fontMetrics->getFontHeight($font, 75); 
		$textWidth = $fontMetrics->getTextWidth($text, $font, 75); 
		$x = (($w-$textWidth)/2); 
		$y = (($h-$txtHeight)/2); 
	    //$dompdf->getCanvas()->set_opacity(.1, 'Multiply');
		$canvas->page_text(185, $y, $text, $font, 85, array(255, 0, 0), $word_space = 0.0, $char_space = 0.0, $angle = -45.0); 
		$canvas->page_text(45, 800, "* Dokumen ini hanya bersifat informasi dan tidak dapat menggantikan rapor asli dari sekolah.", $font, 9, array(0,0,0));*/
		//$canvas->page_text(45, 800, "* Dokumen ini hanya bersifat informasi dan tidak dapat menggantikan rapor asli dari sekolah. {PAGE_NUM} of {PAGE_COUNT}", $font, 8, array(255,0,0));

/*$watermark = $canvas->open_object();
   $w = $canvas->get_width();
   $h = $canvas->get_height();
   $canvas->set_opacity(.1);
   $canvas->page_text(110, $h - 240, "DELETED", $font,110, array(255, 0, 0, 35), 0, -52);
   $canvas->close_object();
   $canvas->add_object($watermark, 'all');*/

		//$canvas = $dompdf->getCanvas(); 
		/*$w = $canvas->get_width(); 
		$h = $canvas->get_height(); 
		$imageURL = './assets/img/watermark_salinan.png'; 
		$imgWidth = 400; 
		$imgHeight = 400; 

		$x = (($w-$imgWidth)/2); 
		$y = (($h-$imgHeight)/2); 

		$canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight);*/

		/*$font = $dompdf->getFontMetrics()->getFont("Arial", "bold");
	    $dompdf->getCanvas()->page_text(185, 450, "SALINAN", $font, 70, array(10, 0, 0), 0, 0, -45);
	    $dompdf->getCanvas()->set_opacity(.1, 'Multiply');*/
/*$canvas = $dompdf->getCanvas(); 
	    $canvas->page_script('
if ($PAGE_NUM > 1) {
 $current_page = $PAGE_NUM-1;
 $total_pages = $PAGE_COUNT-1;
 $font = $fontMetrics->getFont("times", "normal");
 $pdf->set_opacity(1,"Multiply");
 $pdf->text(185, 450, "aaa", $font, 75, array(0,0,0));

 $pdf->set_opacity(0.2,"Multiply");
}
');*/


if ($stream) {
	//$dompdf->stream($filename.".pdf", $attachment);
			$output = $dompdf->output();
			file_put_contents("./assets/uploads/pdf/".$filename.".pdf", $output);
} else {
	return $dompdf->output();
}
}
}