<?php 



$excel = "excel.csv";
$file = fopen($excel,"r+")or die("unable to open file!");

$read = fread($file, filesize($excel));

// $completarea = "nume,prenume,varsta";

// $completeaza = fwrite($file, $completarea);
 $objPHPExcel = setActiveSheetIndex(0)
                            ->setCellValue('A2', "No")
                            ->setCellValue('B2', "Name")
                            ->setCellValue('C2', "Email")
                            ->setCellValue('D2', "Phone")
                            ->setCellValue('E2', "Address");

echo $objPHPExcel;

$close = fclose($file);
?>