
<!DOCTYPE html>
<html lang="es-ES"> 
<head>
<meta charset="UTF-8">
<title>LISTA DE CLIENTES</title>
</head>
<body>
<p>LISTA DE CLIENTES</p><br>

<?php
require_once("sec.php");
$opc="";
$nom=mysql_query("select nombre from clientes where nombre!='' order by nombre limit 190;");
echo "<select>";
while($list=mysql_fetch_row($nom)){
$opc=$opc."<option>".$list[0]."</option>";
}
echo $opc;
echo "</select>";
?>
</body>
</html>