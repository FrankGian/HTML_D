<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TABLA DE CLIENTES</title>
</head>
<body>
<?php
require_once("sec.php");
$tab="";
$list=mysql_query("select nombre from clientes where nombre!='' order by nombre limit 100;");
echo "<table border='1'>";
echo "<tr><th>CLIENTE</th><th>NOMBRE</th></tr>";
$i=1;

while($nom=mysql_fetch_row($list))
{$tab .="<tr><td>Cliente ".$i."</td><td>".$nom[0]."</td></tr>";
$i++;
}
echo $tab;
echo "</table>";
?>
</body>

</html>