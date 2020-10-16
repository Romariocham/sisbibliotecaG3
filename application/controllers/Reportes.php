<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reportes extends CI_Controller {

     function __construct(){
        parent::__construct();
    }

	function index(){
		//imprime ejemplar
		$this->load->Library('pdf');
		require('conexion.php');
		$consulta = "SELECT *FROM ejemplar,categoria WHERE ejem_cate_id=cate_id";
		$resultado = $mysqli->query($consulta);
		
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetTextColor(77, 119, 197);

		$pdf->Cell(0,6,'Reporte de Ejemplares',0,'C');
		$pdf->Ln(12);
		
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(8,10,'id',1,0,'C',1);
		$pdf->Cell(55,10,'titulo',1,0,'C',1);
		$pdf->Cell(40,10,'editorial',1,'C',1);
		$pdf->Cell(20,10,utf8_decode('año'),1,0,'C',1);
		$pdf->Cell(20,10,'paginas',1,0,'C',1);
		$pdf->Cell(40,10,'categoria',1,1,'C',1);
		
		$pdf->SetFont('Arial','',9);
		while($row = $resultado->fetch_assoc()){


			$pdf->Cell(8,10,$row['ejem_id'],1,0,'C');
			$pdf->Cell(55,10,$row['ejem_titulo'],1,0,'C');
			$pdf->Cell(40,10,$row['ejem_editorial'],1,0,'C');
			$pdf->Cell(20,10,$row['ejem_anio'],1,0,'C');
			$pdf->Cell(20,10,$row['ejem_paginas'],1,0,'C');
			$pdf->Cell(40,10,$row['cate_nombre'],1,1,'C');
		}
		$pdf->Output();
	}

	function imprimeusuarios(){
	$this->load->Library('pdf');
		require('conexion.php');

		$consulta = "SELECT *FROM usuario";
		$resultado = $mysqli->query($consulta);
		
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetTextColor(77, 119, 197);
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(0,6,'Reporte de Usuarios',0,'C');
		$pdf->Ln(12);
		
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(8,10,'id',1,0,'C',1);
		$pdf->Cell(20,10,'usuarios',1,0,'C',1);
		$pdf->Cell(25,10,utf8_decode('contraseña'),1,'C',1);
		$pdf->Cell(20,10,'nombre',1,0,'C',1);
		$pdf->Cell(20,10,'apellido',1,0,'C',1);
		$pdf->Cell(35,10,'direccion',1,0,'C',1);
		$pdf->Cell(40,10,'correo',1,0,'C',1);
		$pdf->Cell(35,10,'telefono',1,1,'C',1);
		
		$pdf->SetFont('Arial','',9);
		while($row = $resultado->fetch_assoc()){


			$pdf->Cell(8,10,$row['usua_id'],1,0,'C');
			$pdf->Cell(20,10,$row['usua_login'],1,0,'C');
			$pdf->Cell(25,10,$row['usua_password'],1,0,'C');
			$pdf->Cell(20,10,$row['usua_nombres'],1,0,'C');
			$pdf->Cell(20,10,$row['usua_apellidos'],1,0,'C');
			$pdf->Cell(35,10,$row['usua_direccion'],1,0,'C');
			$pdf->Cell(40,10,$row['usua_email'],1,0,'C');
			$pdf->Cell(35,10,$row['usua_telefono'],1,1,'C');
		}
		$pdf->Output();
	}
}
?>