<?php
/*
*
*							INSERT DATABASES
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<?php
include("../../php/Data_Access_DB/Data_Access_DB.php");
include("../../php/Tables_DB/Tables_DB.php");
$_Name_User=$_POST['name'];
$_Name_User_Up = strtoupper($_Name_User);
$_Last_Name=$_POST['Last_Name'];
$_Last_Name_Up=strtoupper($_Last_Name);
$_Password=$_POST['Password'];
$_Re_in_Password=$_POST['Re_in_Password'];
$_Users_Code = rand(0000,9999);
//$_Password_Hash=password_hash($_Password,PASSWORD_DEFAULT);
$_Passwordmd5=md5($_Password);
$Email=$_POST['E-Mail'];
$Object_Mail='E-mail di riepilogo registrazione gestionale';
$Email_Sender="man.warehouse.sys@gmail.com";
$Message_Mail="Username: $_Users_Code \n Password: $_Password \n Grazie per aver scelto il mio gestionale, Thank you for choosing my management by Manna Fabrizio AXEL CORPORATION";
@$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
@$mail_headers = "Reply-To: " .  $mail_mittente . "\r\n";
$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
if($_Password == $_Re_in_Password){ 
	$toinsert="INSERT INTO $_Tables[0]
				(NAME,LAST_NAME,USER,PASSWORD,EMAIL,ADMINISTRATOR)
				VALUES
		('$_Name_User_Up','$_Last_Name_Up','$_Users_Code','$_Passwordmd5','$Email',1)";
	mail($Email,$Object_Mail,$Message_Mail,$mail_headers);
	$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
	if($result){
		echo("<br>Inserimento avvenuto correttamente");
        print('<a href="../../Access.php"> Pagina di accesso, Login page </a>');
	}
}
else{
	mysqli_close($db);
	print("<html>");
	print("<head>");
	print("</head>");
	print("<body>");
	print('<form  id="id" method="post" action="../Registration_Php/Registration.php">');
	print('<input name="Error_Reg" value="1">');
	print("</form>");
	print("<script>document.getElementById('id').submit()</script>");
	print("</body>");
	print("</html>"); 
}
?>
