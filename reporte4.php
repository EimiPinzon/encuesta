<?php
require 'conexion.php';
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;



$traer ="SELECT respuestas, ext, telefono, fecha FROM respuestas WHERE id =1 OR id =3;";
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
    $hojaActiva->setCellValue('A'.$fila, $row['respuestas']);
    $hojaActiva->setCellValue('B'.$fila, $row['ext']);
    $hojaActiva->setCellValue('C'.$fila, $row['telefono']);
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