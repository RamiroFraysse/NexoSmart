<?php
    if(!isset($_GET['id']))
        echo "Debe ingresar el id a través de la url del navegador, ejemplo http://localhost:8080/entrevista/php/index.php?id=2 <br>";
    else{
        //ingresó un id
        $id = $_GET['id']; 
        if(!ctype_digit($id)){
            echo "Por favor, ingrese un número entero <br>";
        }else{
            //es entero
            $count = sizeof($_COOKIE);
            condicionar($count,$id); 
        }
    }
    function condicionar($count,$id){   
        if($id>=2 && $id%2==0 && $id<=10){
            setcookie($count,$id,time()+600);
        }  
    }
    echo"<a href='../php/resultados.php'>Resultados</a>";

?>