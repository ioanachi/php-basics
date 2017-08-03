<?php 




$excel = "excel.csv";
 $file = fopen($excel,"w")or die("unable to open file!");
 $result = "NUme, Prenume,Varsta\n";
$i = 0;

while ($i<= 50) {
	$varsta = rand(0,50);
$result =  $result."Turcu,Ciprian".$varsta."\n";
$i++;
};
$wrote = fwrite($file,$result);

// $read = fread($file,filesize($excel));
// $arr = ["Nume","Prenume","Varsta"];





// $completarea = "nume,prenume,varsta";

 // $completeaza = fwrite($file, $completarea,50);
 // $objPHPExcel = setActiveSheetIndex(0)
                            // ->setCellValue('A2', "No")
                            // ->setCellValue('B2', "Name")
                            // ->setCellValue('C2', "Email")
                            // ->setCellValue('D2', "Phone")
//                             ->setCellValue('E2', "Address");

// echo $wrote;

$close = fclose($file);
?>