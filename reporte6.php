<?php
require 'conexion.php';
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;



$traer ="SELECT pq, rp, ext, callerid, fecha FROM respuestas WHERE rp=5";
$resultado =mysqli_query($conexion,$traer);



$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("respuestas");


$hojaActiva->setCellValue('A1', 'preguntas');
$hojaActiva->setCellValue('B1', 'respuestas');
$hojaActiva->setCellValue('C1', 'ext');
$hojaActiva->setCellValue('D1', 'telefono');
$hojaActiva->setCellValue('E1', 'fecha');

$fila = 2;

while($row = $resultado->fetch_assoc()){
    $hojaActiva->setCellValue('A'.$fila, $row['pq']);
    $hojaActiva->setCellValue('B'.$fila, $row['rp']);
    $hojaActiva->setCellValue('C'.$fila, $row['ext']);
    $hojaActiva->setCellValue('D'.$fila, $row['callerid']);
    $hojaActiva->setCellValue('E'.$fila, $row['fecha']);
    $fila++;

}


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="respuestas-atencionrecibida5.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;

?>