<?php
require 'conexion.php';
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;



$traer ="SELECT rp, ext, callerid, fecha FROM respuestas WHERE pq=1 ORDER BY rp ASC;";
$resultado =mysqli_query($conexion,$traer);



$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("respuestas");


$hojaActiva->setCellValue('A1', 'respuestas');
$hojaActiva->setCellValue('B1', 'ext');
$hojaActiva->setCellValue('C1', 'telefono');
$hojaActiva->setCellValue('D1', 'fecha');

$fila = 2;

while($row = $resultado->fetch_assoc()){
    $hojaActiva->setCellValue('A'.$fila, $row['rp']);
    $hojaActiva->setCellValue('B'.$fila, $row['ext']);
    $hojaActiva->setCellValue('C'.$fila, $row['callerid']);
    $hojaActiva->setCellValue('D'.$fila, $row['fecha']);
    $fila++;

}


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="respuestas-atencionrecibida.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;

?>