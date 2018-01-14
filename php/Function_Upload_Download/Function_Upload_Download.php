<?php
/*
*
*						FUNCTION UPLOAD E DOWNLOAD
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<?php
include("../../php/Data_Access_DB/Data_Access_DB.php");
include("../../php/Tables_DB/Tables_DB.php");
$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
$_Cod_Product=$_POST['Cod_Product'];
$_Amount=$_POST['Amount'];
@$_Up_Dow=$_POST['Up_Dow'];
@$_Up_Dow1=$_POST['Up_Dow1'];
$Price=$_POST['Price'];
$Date=date("Y-m-d");
if($_Up_Dow=="C" && $_Up_Dow1=="S"){
	header("location: ../../php/Upload_Download/Upload_Download.php?COD_ERROR=502");
}
if($_Up_Dow1=="S"){
	$_Up_Dow=$_Up_Dow1;
	}
$Letter=array('A','B','C','D','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z');
$C1=rand(0,19);
$C2=rand(0,19);
$C3=rand(00,99);
$_ID_MOVEMENT = $Letter[$C1].$Letter[$C2].$C3;
if(is_numeric($_Amount) && is_string($_Cod_Product) && is_numeric($Price) && is_string($_Up_Dow)){	
		if ($_Up_Dow=="C"){
			$Query = "INSERT INTO $_Tables[1] (ID_MOVEMENT,TYPE,DATE_MOVEMENT,AMOUNT,PRICE,ID_PRODUCT) VALUES('$_ID_MOVEMENT','$_Up_Dow','$Date','$_Amount','$Price','$_Cod_Product') ";
			$Query_DB = mysqli_query($db,$Query);
			$Query="SELECT ID_PRODUCT,GIACENZ FROM $_Tables[2] WHERE ID_PRODUCT='$_Cod_Product'";
			$Query_DB = mysqli_query($db,$Query);
			$numrows=mysqli_num_rows($Query_DB);
				if($numrows == 0){
					header("location: ../../php/Upload_Download/Upload_Download.php?COD_ERROR=459");
					mysqli_close($db);
				}
			$AGG_PRODUCT=mysqli_fetch_array($Query_DB,MYSQLI_ASSOC);
			$Update_Data=$AGG_PRODUCT['GIACENZ']+$_Amount;
			$Query="UPDATE $_Tables[2] SET GIACENZ='$Update_Data' WHERE ID_PRODUCT='$_Cod_Product'";
			$Query_DB = mysqli_query($db,$Query);
			/*	if($Query_DB){
					print("Aggiornamento eseguito");
				}*/
			mysqli_close($db);
			//print("INSERIMENTO AVVENUTO CORRETTAMENTE || INSERT WORTHED CORRECTLY");
			header("location: ../../php/Upload_Download/Upload_Download.php?COD_RESULT=458");
		}
		elseif($_Up_Dow=="S"){
			$Query="SELECT ID_PRODUCT,GIACENZ FROM $_Tables[2] WHERE ID_PRODUCT='$_Cod_Product'";
			$Query_DB = mysqli_query($db,$Query);
			$numrows=mysqli_num_rows($Query_DB);
				if($numrows == 0){
					header("location: ../../php/Upload_Download/Upload_Download.php?COD_ERROR=459");
					mysqli_close($db);
				}
			$AGG_PRODUCT=mysqli_fetch_array($Query_DB,MYSQLI_ASSOC);
			$Update_Data=$AGG_PRODUCT['GIACENZ']-$_Amount;
				if($Update_Data>0){		
					$Query = "INSERT INTO $_Tables[1] (ID_MOVEMENT,TYPE,DATE_MOVEMENT,AMOUNT,PRICE,ID_PRODUCT) VALUES('$_ID_MOVEMENT','$_Up_Dow','$Date','$_Amount','$Price','$_Cod_Product') ";
					$Query_DB = mysqli_query($db,$Query);
					$Query="UPDATE $_Tables[2] SET GIACENZ='$Update_Data' WHERE ID_PRODUCT='$_Cod_Product'";
					$Query_DB = mysqli_query($db,$Query);
					/*	if($Query_DB){
							print("Aggiornamento eseguito");
						}*/
					mysqli_close($db);
					//print("INSERIMENTO AVVENUTO CORRETTAMENTE || INSERT WORTHED CORRECTLY");
					header("location: ../../php/Upload_Download/Upload_Download.php?COD_RESULT=458");
			}
			header("location: ../../php/Upload_Download/Upload_Download.php?COD_ERROR=501&COD_PRODUCT=$_Cod_Product");
			mysqli_close($db);
		}
}
else{
	header("location: ../../php/Upload_Download/Upload_Download.php?COD_ERROR=500");
}
?>