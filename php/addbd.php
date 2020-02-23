<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

if(isset($_POST['Submit'])) {	
	$ID_Artículo = $_POST['ID_Artículo'];
	$ID_Categoría = $_POST['ID_Categoría'];
	$ID_Línea = $_POST['ID_Línea'];		
	$Código_de_Barras = $_POST['Código_de_Barras'];		
	$Descripción = $_POST['Descripción'];		
	$Estado = $_POST['Estado'];		
	$Valor_artículo = $_POST['Valor_artículo'];		
	$IVA = $_POST['IVA'];		
	$Saldo = $_POST['Saldo'];		

    if(empty($ID_Artículo) || empty($ID_Categoría) || empty($ID_Línea) || empty($Código_de_Barras) || empty($Descripción) 
    || empty($Estado) || empty($Valor_artículo) || empty($IVA) || empty($Saldo)) {
				
		if(empty($ID_Artículo)) {
			echo "<font color='red'>Campo: ID Artículo esta vacio.</font><br/>";
		}
		
		if(empty($ID_Categoría)) {
			echo "<font color='red'>Campo: ID Categoría esta vacio.</font><br/>";
		}
		
		if(empty($ID_Línea)) {
			echo "<font color='red'>Campo: ID Línea esta vacio.</font><br/>";
		}
		
		if(empty($Código_de_Barras)) {
			echo "<font color='red'>Campo: Código de barras esta vacio.</font><br/>";
		}
		if(empty($Descripción)) {
			echo "<font color='red'>Campo: Descripción esta vacio.</font><br/>";
		}
		if(empty($Estado)) {
			echo "<font color='red'>Campo: Estado esta vacio.</font><br/>";
		}
		if(empty($Valor_artículo)) {
			echo "<font color='red'>Campo: Valor artículo esta vacio.</font><br/>";
		}
		if(empty($IVA)) {
			echo "<font color='red'>Campo: IVA esta vacio.</font><br/>";
		}
		if(empty($Saldo)) {
			echo "<font color='red'>Campo: Saldo esta vacio.</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 

		$sql = "INSERT INTO soexbd (ID_Artículo, ID_Categoría, ID_Línea, Código_de_Barras, Descripción, 
        Estado, Valor_artículo, IVA, Saldo) VALUES(:ID_Artículo, :ID_Categoría, :ID_Línea, :Código_de_Barras, :Descripción, 
        :Estado, :Valor_artículo, :IVA, :Saldo)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':ID_Artículo', $ID_Artículo);
		$query->bindparam(':ID_Categoría', $ID_Categoría);
        $query->bindparam(':ID_Línea', $ID_Línea);
        $query->bindparam(':Código_de_Barras', $Código_de_Barras);
        $query->bindparam(':Descripción', $Descripción);
        $query->bindparam(':Estado', $Estado);
        $query->bindparam(':IValor_artículo', $Valor_artículo);
        $query->bindparam(':IVA', $IVA);
        $query->bindparam(':Saldo', $Saldo);
		$query->execute();
		

		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='indexbd.php'>View Result</a>";
	}
}
?>
</body>
</html>
