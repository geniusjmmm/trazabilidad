<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        function ejecuta_consulta($labusqueda){
            $db_host="localhost";
            $db_name="trazabilidad";
            $db_user="root";
            $db_password="";
            echo "dentro" . $labusqueda ." <br>";

            $conexion=mysqli_connect($db_host,$db_user,$db_password,$db_name);
        
            IF (mysqli_connect_errno()){
                echo "Error al conectar";
            }
            mysqli_set_charset($conexion,"utf8");
            $consulta="SELECT * FROM productos where NOMBREARTÍCULO LIKE '%$labusqueda%'";
            $recordset=mysqli_query($conexion,$consulta);
            while ($registros=mysqli_fetch_row($recordset)){
                echo $registros[0] ." ";
                echo $registros[1] ." ";
                echo $registros[2] ." <br>";
            }
        mysqli_close($conexion);    
        }
    ?>
</head>
<body>
   <?php
       $mibusqueda=$_GET["buscar"];
       echo "afuera" . $mibusqueda ." <br>";
       $mipag=$_SERVER["PHP_SELF"];
       if ($mibusqueda!=NULL){
           ejecuta_consulta($mibusqueda);
       }else{
           echo("<form action='" . $mipag . " ' method='get'>
           <label> Buscar: <input type='text' name='buscar'></label>
           <input type='submit' name='enviando' value='Buscar'>
           </form>");
            }
         
    ?> 
</body>
</html>