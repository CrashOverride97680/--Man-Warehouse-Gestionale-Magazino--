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
include("../../php/My_Functions_Php/My_Functions_Php.php");
$_Name_User=$_POST['name'];
$_Name_User_Up = strtoupper($_Name_User);
$_Last_Name=$_POST['Last_Name'];
$_Last_Name_Up=strtoupper($_Last_Name);
//@$_Password="";
//$_Password=$_POST['Password'];
//$_Re_in_Password=$_POST['Re_in_Password'];
$_Users_Code = rand(0000,9999);
@$_Password="";
$_Password2=Create_Password($_Password);
//$_Password_Hash=password_hash($_Password,PASSWORD_DEFAULT);
$_Passwordmd5=md5($_Password2);
$Email=$_POST['E-Mail'];
$Email1=strtolower($Email);
$mail_destinatario=strtolower($Email);
/*$Object_Mail='E-mail di riepilogo registrazione gestionale';
$Email_Sender="man.warehouse.sys@gmail.com";
$Message_Mail="Username: $_Users_Code \n Password: $_Password2 \n Grazie per aver scelto il mio gestionale, Thank you for choosing my management by Manna Fabrizio AXEL CORPORATION";
@$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
@$mail_headers = "Reply-To: " .  $mail_mittente . "\r\n";*/
$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
$toinsert="INSERT INTO $_Tables[0]
		(NAME,LAST_NAME,USER,PASSWORD,EMAIL,ADMINISTRATOR)
			VALUES
		('$_Name_User_Up','$_Last_Name_Up','$_Users_Code','$_Passwordmd5','$Email',1)";
// definisco mittente e destinatario della mail
$nome_mittente = "AXELL CORPORATION";
$mail_mittente = "man.warehouse.sys@gmail.com";
//$mail_destinatario = "mannafabrizio83@gmail.com";

// definisco il subject ed il body della mail
$mail_oggetto = "REGISTRAZIONE GESTIONALE";
$mail_corpo = "Username: $_Users_Code \n Password: $_Password2 \n Grazie per aver scelto il mio gestionale, Thank you for choosing my management by Manna Fabrizio AXEL CORPORATION";
// aggiusto un po' le intestazioni della mail
// E' in questa sezione che deve essere definito il mittente (From)
// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";

if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
  echo "Messaggio inviato con successo a " . $mail_destinatario."\n";
else
  echo "Errore. Nessun messaggio inviato.";
//mail($Email1,$Object_Mail,$Message_Mail,$mail_headers);
$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
if($result){
	echo("<br>Inserimento avvenuto correttamente");
    print('<a href="../../Access.php"> Pagina di accesso, Login page </a>');
}
?>
