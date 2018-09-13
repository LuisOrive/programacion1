<html>
<body>
    <form action="ejercicio2recibe.php" method="post">
        
        <div>
        <label for="radios">Formato</label><br><input type="radio" name="formato" value="corto" > corto<br>
                                              <input type="radio" name="formato" value="largo" > largo<br>
                                            
        </div>
        
        Fecha
        <div><label for="dia">Dia</label>
            <select name="dia">
            <?php
                for ($i=1; $i<=31; $i++) {
                    if ($i == date('j'))
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
                    if ($i == date('m'))
                        echo '<option value="'.$i.'" selected>'.$mes[$i].'</option>';
                    else
                        echo '<option value="'.$i.'">'.$mes[$i].'</option>';
                    }
            ?>
            </select>
        </div>
        
        <div><label for="dia">A&ntilde;o</label>
            <select name="ano">
            <?php
                for($i=1900; $i<=2100; $i++){
                    if ($i == date('o'))
                        echo '<option value="'.$i.'" selected>'.$i.'</option>';
                    else
                        echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?>
            </select>
        
        <input type="submit" name="Enviar" id="Enviar" value="Enviar">
    </form>
</body>

</html>
