<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$ID_Artículo = $_GET['ID_Artículo'];

//deleting the row from table
$sql = "DELETE FROM soexbd WHERE ID_Artículo= :ID_Artículo";
$query = $dbConn->prepare($sql);
$query->execute(array(':ID_Artículo' => $ID_Artículo));

//redirecting to the display page (index.php in our case)
header("Location:indexbd.php");
?>