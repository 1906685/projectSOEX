<?php

include_once("configbd.php");

if(isset($_POST['update']))
{	
	$ID_Artículo = $_POST['ID_Artículo'];
	
    $ID_Categoría = $_POST['ID_Categoría'];
	$ID_Línea = $_POST['ID_Línea'];
	$Código_de_Barras = $_POST['Código_de_Barras'];
    $Descripción = $_POST['Descripción'];
    $Estado = $_POST['Estado'];
    $Valor_artículo = $_POST['Valor_artículo'];
    $IVA = $_POST['IVA'];
    $Saldo = $_POST['Saldo'];

    if(empty($ID_Categoría) || empty($ID_Línea) || empty($Código_de_Barras) || empty($Descripción) 
    || empty($Valor_artículo) || empty($IVA) || empty($Saldo)) {
				
		if(empty($ID_Categoría)) {
			echo "<font color='red'>ID_Categoría field is empty.</font><br/>";
		}
		
		if(empty($ID_Línea)) {
			echo "<font color='red'>ID_Línea field is empty.</font><br/>";
		}
		
		if(empty($Código_de_Barras)) {
			echo "<font color='red'>Código_de_Barras field is empty.</font><br/>";
        }
        
		if(empty($Descripción)) {
			echo "<font color='red'>Descripción field is empty.</font><br/>";
        }
        
		if(empty($Valor_artículo)) {
			echo "<font color='red'>Valor_artículo field is empty.</font><br/>";
        }
        
		if(empty($IVA)) {
			echo "<font color='red'>IVA field is empty.</font><br/>";
        }
        
		if(empty($Saldo)) {
			echo "<font color='red'>Saldo field is empty.</font><br/>";
        }
        
	} else {	

		$sql = "UPDATE soexbd SET ID_Categoría=:ID_Categoría, ID_Línea=:ID_Línea, Código_de_Barras=:Código_de_Barras, Descripción=:Descripción, 
        Valor_artículo=:Valor_artículo, IVA=:IVA, Saldo=:Saldo WHERE ID_Artículo=:ID_Artículo";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':ID_Artículo', $ID_Artículo);
		$query->bindparam(':ID_Categoría', $ID_Categoría);
		$query->bindparam(':ID_Línea', $ID_Línea);
        $query->bindparam(':Código_de_Barras', $Código_de_Barras);
        $query->bindparam(':Descripción', $Descripción);
        $query->bindparam(':Valor_artículo', $Valor_artículo);
        $query->bindparam(':IVA', $IVA);
        $query->bindparam(':Saldo', $Saldo);
		$query->execute();
		
		
		header("Location: indexbd.php");
	}
}
?>
<?php

$ID_Artículo = $_GET['ID_Artículo'];


$sql = "SELECT * FROM soexbd WHERE ID_Artículo=:ID_Artículo";
$query = $dbConn->prepare($sql);
$query->execute(array(':ID_Artículo' => $ID_Artículo));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $ID_Categoría = $row['ID_Categoría'];
	$ID_Línea = $row['ID_Línea'];
    $Código_de_Barras = $row['Código_de_Barras'];
    $Descripción = $row['Descripción'];
    $Valor_artículo = $row['Valor_artículo'];
    $IVA = $row['IVA'];
    $Saldo = $row['Saldo'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="indexbd.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editbd.php">
		<table border="0">
			<tr> 
				<td>ID Categoría</td>
				<td><input type="text" name="ID_Categoría" value="<?php echo $ID_Categoría;?>"></td>
			</tr>
			<tr> 
				<td>ID Línea</td>
				<td><input type="text" name="ID_Línea" value="<?php echo $ID_Línea;?>"></td>
			</tr>
			<tr> 
				<td>Código de Barras</td>
				<td><input type="text" name="Código_de_Barras" value="<?php echo $Código_de_Barras;?>"></td>
            </tr>
            <tr> 
				<td>Descripción</td>
				<td><input type="text" name="Descripción" value="<?php echo $Descripción;?>"></td>
            </tr>
            <tr> 
				<td>Valor artículo</td>
				<td><input type="text" name="Valor_artículo" value="<?php echo $Valor_artículo;?>"></td>
            </tr>
            <tr> 
				<td>IVA</td>
				<td><input type="text" name="IVA" value="<?php echo $IVA;?>"></td>
            </tr>
            <tr> 
				<td>Saldo</td>
				<td><input type="text" name="Saldo" value="<?php echo $Saldo;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="ID_Artículo" value=<?php echo $_GET['ID_Artículo'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

