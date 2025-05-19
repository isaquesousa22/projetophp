<?php  
$nomes = array("Maria", "Jose", "Pedro");
$excluido = array_shift($nomes);
foreach($nomes as $item) {
    echo "<br />". $item;
}
echo "<br /> <br /> Nome removido:". $excluido;

?>