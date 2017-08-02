<?php 
$numar = 1;
echo "<h2>Exemplu $numar</h2>";
$numar = 2;
echo "<h2>Exemplu $numar</h2>";
$numar = 3;
echo '<h2>Exemplu '.$numar.'</h2>';
$numar = 4;
printf("<h2>Exemplu %d %s</h2>",$numar,"dinamic");
$numar = 5;?>

<h2>Exemplu <?php echo $numar;?></h2>