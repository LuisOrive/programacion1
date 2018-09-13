<head>
   
    <title>Datos recibidos</title>
    <?php
    $n=$_POST["tabla"];
   
    ?>
    
<table border=1>
    <?php 
        for($i=1;$i<=$n;$i++){
            
        echo "<tr><td>";    
        echo $_POST["valor$i"];      
       
        }
        
        
    ?>    

    </table>
    
    <?php 
          for($i=0;$i<$n;$i++){
          $var[$i]=$_POST["valor$i"];
            }
    echo "valor maxino:".max($var);
    echo "<br>";
    echo "valor minimo:".min($var);        
    echo "<br>";
    echo "promedio:".(array_sum($var)/$n);
    ?>
    
</head>
