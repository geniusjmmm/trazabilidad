<html>
<head>
<meta charset="utf-8">
<title> Sistema Control de equipos"</title>
</head>
<body>
<?php
Class Pc{
  var $cpu;
  var $ram;
  var $dvd;
  var $usb;
function Pc(){
  $this->cpu=2600;
  $this->ram=4;
  $this->dvd=0;
  $this->usb=4;
 }
function iralab(){
  echo "Fue al laboratorio<br>";

 }
 function irusuario($numpc){
echo "Fue donde el usuario<br>";
 }
function irbodega($numpc){
echo "Fue a bodega<br>";
 }
}
$computador=new Pc();
$computador->iralab();
echo "$computador->cpu"


?>
</body>
</html>
