<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexion</title>
</head>
<body>
    <?php
        $parametro=$_GET["texto"];
                $db_host="localhost";
        $db_name="trazabilidad";
        $db_user="root";
        $db_password="";

        $conexion=mysqli_connect($db_host,$db_user,$db_password,$db_name);
        
        IF (mysqli_connect_errno()){
            echo "Error al conectar";
        }
        mysqli_set_charset($conexion,"utf8");
        $consulta="SELECT * FROM productos where NOMBREARTÍCULO LIKE '%$parametro%'";
        $recordset=mysqli_query($conexion,$consulta);
        while ($registros=mysqli_fetch_row($recordset)){
            echo $registros[0] ." ";
            echo $registros[1] ." ";
            echo $registros[2] ." <br>";
        }
    ?>

    

</body>
</html>