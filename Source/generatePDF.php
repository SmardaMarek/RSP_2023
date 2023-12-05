<?php 

require('fpdf/fpdf.php'); 

class PDF extends FPDF { 

	// Page header 
	function Header() { 
		include 'connect.php';
		// Add logo to page 
		//$this->Image('image/robot.jpg',10,8,33); 
		
		// Set font family to Arial bold 
		$this->SetFont('Arial','B',20); 
		
		// Move to the right 
		$this->Cell(-100); 
		
		// Header
		// http://localhost/generatepdf.php/?id=2
		$row = $con->query('SELECT rok, rocnik, cislo FROM casopis WHERE id_casopisu = '. $_GET['id']);
		$hlavicka = $row->fetch_array();
		$hlavicka_string = $hlavicka['rok'] . ' | ' . 'ROCNIK ' . $hlavicka['rocnik'] . ' | ' . 'CISLO ' . $hlavicka['cislo'];
		$this->Cell(0,12,$hlavicka_string,0,0,'C'); 
		
		// Line break 
		$this->Ln(20); 
	} 

	// Page footer 
	function Footer() { 
		
		// Position at 1.5 cm from bottom 
		$this->SetY(-15); 
		
		// Arial italic 8 
		$this->SetFont('Arial','I',8); 
		
		// Page number 
		//$this->Cell(0,10,'Page ' .  $this->PageNo() . '/{nb}',0,0,'C'); 
	} 
} 

// Instantiation of FPDF class 
$pdf = new PDF(); 

// Define alias for number of pages 
$pdf->AliasNbPages(); 
$pdf->AddPage(); 
$pdf->SetFont('Times','',14); 

// Replace following with our data
/* for($i = 1; $i <= 20; $i++) 
	$pdf->Cell(0, 10, 'line number '
			. $i, 0, 1);  */
// Calculate the remaining height after adding the header
// Set left, right, and bottom margins
$leftMargin = 10; // Replace 10 with your desired left margin
$rightMargin = 10; // Replace 10 with your desired right margin
$bottomMargin = 10; // Replace 10 with your desired bottom margin

$pdf->SetLeftMargin($leftMargin);
$pdf->SetRightMargin($rightMargin);
$pdf->SetAutoPageBreak(true, $bottomMargin);

// Image dimensions and path
$imagePath = '../Grafika/casopisNahledv2.png';
list($imgWidth, $imgHeight) = getimagesize($imagePath);

// Set image size
$imageWidth = $pdf->GetPageWidth() - $leftMargin - $rightMargin;
$imageHeight = $pdf->GetPageHeight() - $bottomMargin - 20;

// Add image to the page
$pdf->Image($imagePath, $leftMargin, $pdf->GetY(), $imageWidth, $imageHeight);

// Close and output PDF document
$pdf->Output(); 

?>