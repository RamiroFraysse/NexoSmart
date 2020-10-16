<?php
mostrarResultados();
function mostrarResultados(){
    for($i=0; $i<sizeof($_COOKIE); $i++){
        echo "Ingresé al array y tengo el ID: ".$_COOKIE[$i]."<br>";
    }
}
echo"<br> <br>";
echo"<a href='javascript:history.back(-1)'>Volver</a> <br>";
?>
