<?php
/*
*
*							INSERT DATABASES PROVIDERS
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<?php
/*----------------------------INCLUDE-DATA-AND-TABLES-DB--------------------------------------------------*/
include("../../php/Tables_DB/Tables_DB.php");
include("../../php/Data_Access_DB/Data_Access_DB.php");
/*------------------------DATA-SEND-BY-POST-AND-CONVERT-STRING-UPPER--------------------------------------*/
$Name_Provider=$_POST['Name'];
$Name_Provider_Up=strtoupper($Name_Provider);
$Last_Name_Provider=$_POST['Last_Name'];
$Last_Name_Provider_Up=strtoupper($Last_Name_Provider);
$Registered_Office_Provider=$_POST['Registered_Office'];
$Registered_Office_Provider_Up=strtoupper($Registered_Office_Provider);
$Type_Of_Supply_Provider=$_POST['Type_Of_Supply'];
$Type_Of_Supply_Provider_Up=strtoupper($Type_Of_Supply_Provider);
$Goods_Provider=$_POST['Goods'];
$Goods_Provider_Up=strtoupper($Goods_Provider);
$Telephone_Number_Provider=$_POST['Telephone_Number'];
$EMail=$_POST['E-Mail'];
$EMail_Up=strtolower($EMail);
$Company_Prov=$_POST['Company'];
$Company_Prov_Up=strtoupper($Company_Prov);
$Shipping_Time=$_POST['Shipping_Time'];
$Shipping_Time_Up=strtolower($Shipping_Time);
/*-----------------------------------CONNECT-DB-AND-SELECT-DB---------------------------------------------*/
$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
/*---------------------------------------CONTROL-DATA-----------------------------------------------------*/
if(empty($Name_Provider) || empty($Last_Name_Provider) || empty($Last_Name_Provider) || empty($Registered_Office_Provider) || empty($Type_Of_Supply_Provider) || empty($Goods_Provider) || empty(is_numeric($Telephone_Number_Provider)) || empty($EMail) || empty($Shipping_Time) || empty($Company_Prov)){
/*----------------------------------------DATA-INCORRECT--------------------------------------------------*/													    print("<html>");
	print("<head>");
	print("</head>");
	print("<body>");
	print('<form  id="id" method="post" action="../Pannel_Supplier/Pannel_Supplier.php">');
	print('<input name="Data_Error" value="1">');
	print("</form>");
	print("<script>document.getElementById('id').submit()</script>");
	print("</body>");
	print("</html>"); 
	mysqli_close($db);
	
}

else{
/*----------------------------------------INSERT-DATA-----------------------------------------------------*/
$toinsert=							"INSERT INTO $_Tables[3] (NAME,LAST_NAME,REG_OFFICE,TYPE_OF_SUPPLY,GOODS,TELEPHONE_NUMBER,EMAIL,COMPANY,SHIPPING_TIME)
											VALUES ('$Name_Provider_Up','$Last_Name_Provider_Up','$Registered_Office_Provider_Up','$Type_Of_Supply_Provider_Up','$Goods_Provider_Up','$Telephone_Number_Provider','$EMail_Up','$Company_Prov_Up','$Shipping_Time_Up')";
	$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
		if($result){
/*------------------------------------------CLOSE-DB------------------------------------------------------*/
			mysqli_close($db);
/*------------------------------------------GO-TO-PAG-----------------------------------------------------*/	
			print("<html>");
			print("<head>");
			print("</head>");
			print("<body>");
			print('<p>DATI INSERITI CORRETTAMENTE</p>');
			print('<br/>');
			print('<a href="../Pannel_Administrator/Pannel_Administrator.php">Vai alla pagina principale</a>');
			print("</body>");
			print("</html>");
		}
	}
/*-------------------------------------CLOSE-DB-AND-END-PROGRAMM------------------------------------------*/
?>