<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexion</title>
</head>
<body>
    <?php
        $db_host="localhost";
        $db_name="trazabilidad";
        $db_user="root";
        $db_password="";

        $conexion=mysqli_connect($db_host,$db_user,$db_password,$db_name);
        IF (mysqli_connect_errno()){
            echo "Error al conectar";
        }
        $consulta="SELECT * FROM computador";
        $recordset=mysqli_query($conexion,$consulta);
        $registros=mysqli_fetch_row($recordset);
        echo $registros[0];

    ?>

    <h1>prueba</h1>
</body>
</html>