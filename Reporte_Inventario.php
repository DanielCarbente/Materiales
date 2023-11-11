<?php
require('C:\xampp\htdocs\Proyecto_Parcial2\fpdf186\fpdf.php');
//crear conexion
           $conexion=new mysqli('localhost','root','','materiales');
           if($conexion->connect_error){
               die("Conexion Fallida: " . $conexion->connect_error);
           }
            
            $resultado=$conexion->query("SELECT * FROM INVENTARIO");
            //Inicio
            $pdf= new FPDF();
            $pdf->AddPage('L');
            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(0,10,'REPORTE DE EXISTENCIAS DE INVENTARIO', 0, 1, 'C');
            
            //Encabezados de la tabla
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(30,10,'Id',1,);
            $pdf->Cell(40,10,'Clave',1,);
            $pdf->Cell(70,10,'Descripcion',1,);
            $pdf->Cell(40,10,'Precio publico',1,);
            $pdf->Cell(40,10,'Existencias',1,);
            
            //Mas columnas 
            $pdf->SetFont('Arial','',12);
            
            while($row=$resultado->fetch_assoc()){
                $pdf->Ln();
                $i=0;
                foreach($row as $column){
                    if($i==0){
                        $pdf->Cell(30,10,$column,1);
                    }elseif ($i==1) {
                        $pdf->Cell(40,10,$column,1);            
                    }elseif ($i==2) {
                        $pdf->Cell(70,10,$column,1);
                    }elseif ($i==3) {
                        $pdf->Cell(40,10,$column,1);
                    }elseif ($i==4) {
                        $pdf->Cell(40,10,$column,1);
                    }
                $i++;
                }
            }
    $pdf->Output();
?>