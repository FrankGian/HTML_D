<?php
require_once('sec.php');
$sql = "SELECT local, direccion, distrito, grupolocal from locales ";
$res = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TABLA</title>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="proy_2.js"></script>
</head>
<body>
<form autocomplete="off">
	
	<label for="find">BUSCAR LOCAL: </label> <input type="text" name="casilla" id="casilla" />
	 <input type="button" value="FILTRAR" id="buscar"/>
	 <label>GRUPO LOCAL   </label>
     
<?php
require_once("sec.php"); 
$opc="";
$id=mysql_query("select distinct grupolocal from locales;");
echo '<select id="grupolocal" name="grupolocal"><option value="0">-elija-</option>';
while($list=mysql_fetch_row($id)){
$opc=$opc.'<option>'.$list[0].'</option>';
}
echo $opc;
echo "</select>";
?>

</form>
</br>
<table border="1" cellspacing="0">
	
	
	
	<thead>
	<tr id="headtable">
	<th>LOCAL</th>
	
	
	<th>NOMBRE</th>
    
	 <th>DISTRITO</th>
	 
	 <th>GRUPO LOCAL</th>
	 
	 </tr>
	</thead>
	<tbody>
	
	<?php
	while ($fila = mysql_fetch_array($res, MYSQL_NUM)){
	?>
	<tr>
	<td><?php echo $fila[0] ?></td>
	<td><?php echo $fila[1] ?></td>
	<td><?php echo $fila[2] ?></td>
    <td><?php echo $fila[3] ?></td>
	 
	</tr>

	<?php } ?>
	
	</tbody>
	</table>
</body>
</html>