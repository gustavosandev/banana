<?php
$arquivo = "contador.txt";

$handle = fopen($arquivo, 'r+');

$data = fread($handle, 512);

$contador = $data+1;

fseek($handle, 0);

fwrite($handle, $contador);

fclose($handle);

?>