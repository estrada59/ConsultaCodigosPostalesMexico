<?php
	require ('../conexion.php');
	
	$id_municipio = $_POST['id_municipio'];
	// $id_municipio = 1;   	//para comprobar que este ejecutando la consulta
	
	$query = "SELECT 	id_asentamiento,
						nom_asen 
					FROM tblc_asentamientos
					WHERE id_municipios = $id_municipio";
	
	$resultado=$mysqli->query($query);
	
	while($row = $resultado->fetch_assoc())
	{
		$html.= "<option value='".$row['id_asentamiento']."'>".$row['nom_asen']."</option>";
	}
	echo $html;
?>