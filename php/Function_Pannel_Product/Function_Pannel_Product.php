<?php
/*
*
*						PROCESS PANNEL PRODUCTS
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>

<?php

include("../../php/Data_Access_DB/Data_Access_DB.php");
include("../../php/Tables_DB/Tables_DB.php");

$Letter=array('A','B','C','D','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z');
$C1=rand(0,19);
$C2=rand(0,19);
$C3=rand(00,99);

$_ID_PROD = $Letter[$C1].$Letter[$C2].$C3;
$_Description_Product = $_POST['Description_Product'];
//$_Giacenz = $_POST['Giacenz'];
$_Shuffle_Point = $_POST['Shuffle_Point'];
$_Stock_Safety = $_POST['Stock_Safety'];
$_Unit_Measure = $_POST['Unit_Measure'];
$_Position = $_POST['Position'];



$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');

$toinsert = "INSERT INTO $_Tables[2] (ID_PRODUCT,DESCRIPTION,SHUFFLE_POINT,STOCK_SAFETY,UNIT_MEASURE,POSITION) VALUES ('$_ID_PROD','$_Description_Product','$_Shuffle_Point','$_Stock_Safety','$_Unit_Measure','$_Position')";

$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
	
	
	if ($result){
			print("Inserimento avvenuto correttamente");
			header('location:../Pannel_Administrator/Pannel_Administrator.php');
			mysqli_close($db);
			
		}
	else{
			print("Inserimento non eseguito");
		}



?>