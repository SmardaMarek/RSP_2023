<?php 

require('fpdf/fpdf.php'); 

class PDF extends FPDF { 

	// Page header 
	function Header() { 
		
		// Add logo to page 
		$this->Image('image/robot.jpg',10,8,33); 
		
		// Set font family to Arial bold 
		$this->SetFont('Arial','B',20); 
		
		// Move to the right 
		$this->Cell(80); 
		
		// Header 
		$this->Cell(50,10,'Heading',1,0,'C'); 
		
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
		$this->Cell(0,10,'Page ' . 
			$this->PageNo() . '/{nb}',0,0,'C'); 
	} 
} 

// Instantiation of FPDF class 
$pdf = new PDF(); 

// Define alias for number of pages 
$pdf->AliasNbPages(); 
$pdf->AddPage(); 
$pdf->SetFont('Times','',14); 

for($i = 1; $i <= 30; $i++) 
	$pdf->Cell(0, 10, 'line number '
			. $i, 0, 1); 
$pdf->Output(); 

?>
