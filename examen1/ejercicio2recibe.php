<?php

$mes = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

      
if (isset($_POST['Enviar'])) {
    if($_POST['formato']=="largo"){
        echo 'hoy es el '.$_POST['dia'].' de '.$mes[$_POST['mes']].' de '.$_POST['ano'];
    }
     if($_POST['formato']=="corto"){
        echo 'hoy es el '.$_POST['dia'].'/'.$_POST['mes'].'/'.$_POST['ano'];
        
    }
        
}

?>
<br>
        Fecha
        <div><label for="dia">Dia</label>
            <select name="dia">
            <?php
                for ($i=1; $i<=31; $i++) {
                    if ($i == $_POST['dia'])
                        echo '<option value="'.$i.'" selected>'.$i.'</option>';
                    else
                        echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>
            
        </div>
        
        <?php 
        $mes = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        ?>
        <div><label for="dia">Mes</label>
            <select name="mes">
            <?php
                for ($i=1; $i<=12; $i++) {
                    if ($i == $_POST['mes']){
                        echo '<option value="'.$i.'" selected>'; if($_POST['formato']=="corto"){ echo $i;} else { echo $mes[$i];} echo '</option>';
                    }
                    else{
                        echo '<option value="'.$i.'">'; if($_POST['formato']=="corto"){ echo $i;} else { echo $mes[$i];} echo '</option>';
                    }
                        
                    }
            ?>
            </select>
        </div>
        
        <div><label for="dia">A&ntilde;o</label>
            <select name="ano">
            <?php
                for($i=1900; $i<=2100; $i++){
                    if ($i == $_POST['ano']){
                        echo '<option value="'.$i.'" selected>'; if($_POST['formato']=="corto"){ echo substr($i,-2);} else { echo $i;} echo '</option>';
                    }
                    else{
                        echo '<option value="'.$i.'">'; if($_POST['formato']=="corto"){ echo substr($i,-2);} else { echo $i;} echo '</option>';
                    }    
                }
            ?>
            </select>