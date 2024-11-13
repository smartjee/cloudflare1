<?php
  $fh = fopen("Hostname") or die("Se produjo un error al crear el archivo");
  
  fwrite($fh) or die("No se pudo escribir en el archivo");
  
  fclose($fh);
  
  echo "Se ha escrito sin problemas";
?>
