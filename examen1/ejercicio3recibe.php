<?php
$usuario ['nombre'] = "joseluis";
$usuario ['pass'] = "1234";
$usuario ['email'] = "joseluis@hotmail.com";


if($_POST['usuario']==$usuario ['nombre'] && $_POST['pass']==$usuario ['pass'] ){
 echo "el usuario ha sido validado ";
 print_r($usuario);
    
} 

else{
 echo "el usuario no ha sido validado ";   
}
 
   

?>
