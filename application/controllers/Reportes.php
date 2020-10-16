<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reportes extends CI_Controller {

     function __construct(){
        parent::__construct();
    }

	function index(){

		//imprime ejemplares
		$this->load->Library('pdf');
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial','',12);
		$header= array('id','titulo','editorial','anio','pagina','categorias');

		$rows = $this->db->query("SELECT * FROM ejemplar")->result();
			// Cabecera
		    foreach($header as $col)
		        $pdf->Cell(40,7,$col,1);
		    $pdf->Ln();
		    // Datos
		    foreach($rows as $row)
		    {
		        foreach($row as $col)
		            $pdf->Cell(50,6,$col,1);
		        $pdf->Ln();
		    }

			 
		$pdf->Output();
	}
	function imprimeusuarios(){
		$this->load->Library('pdf');
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial','',12);
		$header= array('id','usuarios',utf8_decode('contraseña'),'nombres','apellidos','direccion','email','telefono');

		$rows = $this->db->query("SELECT * FROM usuario")->result();
		
		
		// Cabecera
		    foreach($header as $col)
		        $pdf->Cell(40,7,$col,1);
		    $pdf->Ln();
		    // Datos
		    foreach($rows as $row)
		    {
		        foreach($row as $col)
		            $pdf->Cell(40,6,$col,1);
		        $pdf->Ln();
		    }

		$pdf->Output();
	}
}

?>