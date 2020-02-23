<?php


$result = $dbConn->query("SELECT * FROM soexbd ORDER BY ID_Artículo DESC");
?>

<html>
<head>	
	<title>Crear Artículo</title>
</head>

<body>
<a href="addbd.html">Adicionar Artículo</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>ID Artículo</td>
		<td>ID Categoría</td>
        <td>ID Línea</td>
        <td>Código de Barras</td>
        <td>Descripción</td>
        <td>Estado</td>
        <td>Valor artículo</td>
        <td>IVA</td>
        <td>Saldo</td>
        <td>Update</td>
    </tr>
    
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['ID_Artículo']."</td>";
		echo "<td>".$row['ID_Categoría']."</td>";
        echo "<td>".$row['ID_Línea']."</td>";
        echo "<td>".$row['Código_de_Barras']."</td>";
        echo "<td>".$row['Descripción']."</td>";
        echo "<td>".$row['Estado']."</td>";	
        echo "<td>".$row['Valor_artículo']."</td>";
        echo "<td>".$row['IVA']."</td>";
        echo "<td>".$row['Saldo']."</td>";
		echo "<td><a href=\"editdb.php?ID_Artículo=$row[ID_Artículo]\">Edit</a> | <a href=\"deletedb.php?ID_Artículo=$row[ID_Artículo]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>

