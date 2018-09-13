<head>
   
    <title>Datos recibidos</title>
    <?php
    $n=$_GET["controles"];
    
   if($n<5){ $n=5; }
   
    ?>
 <form action="ejercicio1recibe2.php" method="post"> 
 <input type="hidden" name="tabla" value="<?php echo $n; ?>" >
 
<table border=1>
    <?php 
    
        
    
        for($i=1;$i<=$n;$i++){
        echo "<div><label>Valor".$i."</label><input type='text' name='valor".$i."' ></div>";      
       
        }
    ?>    

    </table>

    <input type="submit" value="Enviar">
        </form>
</head>

