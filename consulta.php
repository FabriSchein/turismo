<?php

include ("conexion.php");

if (isset($_POST['bb']))
{
    if ( strlen ($_POST['nombre']) >= 1 && strlen ($_POST['telefono']) >= 1 && strlen ($_POST['motivo']) >= 1 && strlen ($_POST['consulta']) >= 1)
     {  
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $motivo = trim($_POST['motivo']);
        $duda = trim($_POST['consulta']);
        $consulta = "INSERT INTO USUARIO (NOMBRE, MOTIVO_DE_CONSULTA, CONSULTA, NUMERO_DE_TELEFONO) VALUES ('$nombre', '$telefono', '$motivo', '$duda')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) 
        {
            ?>
                <h3 class="success"> Tu consulta fue registrada</h3>
                <?php
        } 
        else        
        {
            ?>
                <h3 class="error">Ocurrio un error</h3>
            <?php
        } 
        /* // else 
        // {
        //     ?> 
        //     <h3 class="error">LLena todos los campos</h3>
        //     <?php
        // } */
    }
}

?>