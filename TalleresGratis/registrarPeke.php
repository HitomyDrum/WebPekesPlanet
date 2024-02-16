
<?php
    #############################
    ## FECHA DEL TALLER GRATIS ##
    #############################
    $fechaTaller = '2023-12-09'; 
    #############################
    #############################

    # error_reporting(1);
    // Obtener datos del formulario
    $cell = $_POST['cell'];
    $nomApeApod = $_POST['nomApo'];
    $peke1 = $_POST['nomPeke1'];
    $peke2 = $_POST['nomPeke2'];

   /*  $host = "localhost";
    $usuario = "root";
    $clave = "";
    $db = "pekesplanet"; */

    $host = "81.25.112.76";
    $usuario = "PP058US00001";
    $clave = "yN0!a!R6:";
    $db = "pekesplanet";

    $conexion = mysqli_connect($host, $usuario, $clave, $db);

    // Verificar si ya existe un registro con el mismo valor en la columna Cell
    $consulta_existencia = "SELECT * FROM tallerGratis WHERE Cell = '$cell'";
    $resultado_existencia = mysqli_query($conexion, $consulta_existencia);

    if (mysqli_num_rows($resultado_existencia) > 0) {
        # echo "Ya existe un registro con el mismo valor en la columna Cell.";
        echo '<script>registroErroneo("Ya registraste un Peke con tu número celular, intenta con otro.");</script>';
    } else {
        // Si no existe, proceder con la inserción
        $sql = "INSERT INTO tallerGratis(Cell, Fech_Taller, NomApe_Apod, Peke1, Peke2) VALUES ('$cell', '$fechaTaller', '$nomApeApod', '$peke1', '$peke2')";

        if (mysqli_query($conexion, $sql)) {
            echo '<script>registroCorrectamente();</script>';
            header("Location: https://pekesplanet.com/");

            require_once("./whatsappAPI.php");
        } else {
            # echo "Error al insertar datos: " . mysqli_error($conexion);
            echo '<script>registroErroneo("El peke no se pudo registrar!");</script>';
        }
    }

    // Cerrar la conexión
    mysqli_close($conexion);
?>
