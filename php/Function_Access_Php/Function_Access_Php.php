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
        
$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
$query="SELECT USER,PASSWORD FROM $_Tables[0]";
$result=mysqli_query($db,$query) or die ("Impossibile eseguire la query, Query execution failed");
$numrows=mysqli_num_rows($result);
$_Date_Access=date('d-m-Y');
$Hour_Access=date('H:i');
$Remoute_Address=$_SERVER['REMOTE_ADDR'];
if($numrows == 0){
	print("Non ci sono righe databases vuoto, There are rows empty databases");
    mysqli_close($db);
}

?>
        
<?php

$User=$_POST['User'];
$Password=$_POST['Password'];
$Passwordmd5=md5($Password);
if (empty($User) || empty($Password)){
	
	print("<html>");
	print("<head>");
	print("</head>");
	print("<body>");
	print('<form  id="id" method="post" action="../../Access.php">');
	print('<input name="Camp_Error" value="1">');
	print("</form>");
	print("<script>document.getElementById('id').submit()</script>");
	print("</body>");
	print("</html>");   
	
} 


while($Access=mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
	if($User == $Access['USER'] && $Passwordmd5 == $Access['PASSWORD']){
		$toinsert="INSERT INTO $_Tables[4]
				(USER_ACCESS,IP_ACCESS,DATE_ACCESS,HOURS_ACCESS)
				VALUES
		('$User','$Remoute_Address','$_Date_Access','$Hour_Access')";
        mysqli_query($db,$toinsert);
		mysqli_close($db);
		sleep(2);
		print("Accesso");
		header("location:../Pannel_Administrator/Pannel_Administrator.php");
		}
}


print("Username o password errati, Incorrect username or password");
mysqli_close($db);
		
print("<html>");
print("<head>");
print("</head>");
print("<body>");
print('<form  id="id" method="post" action="../../Access.php">');
print('<input name="Acc_Error" value="1">');
print("</form>");
print("<script>document.getElementById('id').submit()</script>");
print("</body>");
print("</html>");   


?>