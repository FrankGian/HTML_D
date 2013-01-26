<?php

require_once("sec.php");

extract ($_POST, EXTR_PREFIX_ALL, "pst");

if ($pst_cat=="0"){

$sql = "SELECT local, direccion, distrito, grupolocal  from locales WHERE ((local like '%$pst_key%') or (distrito like '%$pst_key%') or (direccion like '%$pst_key%'))";

}

else {

$sql = "SELECT local, direccion, distrito, grupolocal  from locales WHERE ((local like '%$pst_key%') or (distrito like '%$pst_key%') or (direccion like '%$pst_key%')) and grupolocal='$pst_cat' ";

}

$res= mysql_query($sql)or die(mysql_error());

$col= mysql_num_rows($res);

while ($fila = mysql_fetch_array($res, MYSQL_NUM)){

?>

	<tr>
	
	
	
	<td><?php echo $fila[0] ?></td>
	<td><?php echo $fila[1] ?></td>
	<td><?php echo $fila[2] ?></td>
    <td><?php echo $fila[3] ?></td>
	
	
	</tr>

<?php } ?>
	