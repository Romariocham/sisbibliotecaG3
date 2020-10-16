<?php  
	include (APPPATH."libraries/fpdf/fpdf.php");

	class PDF extends FPDF{

		// Cabecera de página
		function Header(){
			$this->SetTextColor(77, 119, 197);
		    // Logo
	    	$this->Image(FCPATH.'assets\images\logo3.jpg',10,5,45,35);
	    	$this->Image(FCPATH.'assets\images\logo2.jpg',160,5,45,30);
		    // Arial bold 15
		    $this->SetFont('Arial','B',20);
		    // Movernos a la derecha
		    $this->Cell(80);
		    // Título
		    $this->Cell(30,20,'Sistema de Biblioteca',0,0,'C');
		    // Salto de línea
		    $this->Ln(50);
		}

		// Pie de página
		function Footer(){
			// Posición: a 1,5 cm del final
			$this->SetY(-15);
			// Arial italic 8
			$this->SetFont('Arial','I',8);
			// Número de página
			$this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
		}
		

	}

?>