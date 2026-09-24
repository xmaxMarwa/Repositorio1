
<?php
$var = 20;
function PruebaSinGlobal(){
    $var++;
    echo "Prueba sin global. \$var :". $var. "<br>";

}
function PruebaConGlobal(){
    global $var;
    $var++;
    echo "Prueba con global. \$var :". $var. "<br>";

}
function PruebaConGlobals(){
    $GLOBALS["var"]++;
    echo"Prueba Con GLOBALS.\$var :". $GLOBALS["var"]."<br>";
}
    PruebaSinGlobal();
    PruebaConGlobal();
    PruebaConGlobals();
?>
  