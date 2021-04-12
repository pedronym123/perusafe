<?php 
$conexion=mysqli_connect('localhost','root','','proyecto');
$id_dept=$_POST['id_dept'];
	$sql="SELECT id_prov,
		Nombre_prov,
		id_dept 
		from tb_provincia 
		where id_dept='$id_dept'";
	$result=mysqli_query($conexion,$sql);
	$cadena="<h3>por provincia:</h3>
		<select class='tama' id='lista2' name='lista2'>";
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}
	echo  $cadena."</select>";
?>