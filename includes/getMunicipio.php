<?php
	
	require ('../conexion.php');
	
	 $id_estado = $_POST['id_estados'];
	// $id_estado = 1;   	//para comprobar que esté ejecutando la consulta
	
	$queryM = "SELECT id_municipios, nom_mun 
				FROM tblc_municipios 
				WHERE id_estados= $id_estado";

	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Municipio</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_municipios']."'>".$rowM['nom_mun']."</option>";
	}
	
	echo $html;
?>		