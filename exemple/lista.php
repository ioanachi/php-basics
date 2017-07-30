<?php
$lista = ["mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe","mara","are","mere","multe"];

function baba($lista,$i){
  if($i<count($lista)){
    echo "<li>".$lista[$i]."</li>";
    $i++;
    return baba($lista,$i);
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>lista</title>
    <style media="screen">
      ul{
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <!-- <ul>
      <?php
      $i = 0;
      while($i<count($lista)){
        echo "<li>".$lista[$i]."</li>";
        $i++;
      }
      ?>
    </ul>
    <ul>
      <?php
      $i = 0;
      foreach ($lista as $key => $value) {
        echo "<li>".$lista[$key]."</li>";
      }

      ?>
    </ul> -->
<ul>
  <?php baba($lista,0); ?>
</ul>
  </body>
</html>
