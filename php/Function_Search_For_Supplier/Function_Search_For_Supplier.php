<?php
/*
*
*								SEARCH_FOR_SUPPLIER				
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<?php
					include("../../php/Data_Access_DB/Data_Access_DB.php");
					include("../../php/Tables_DB/Tables_DB.php");
					@$Name_Supplyer1=$_POST['Name'];
					@$Last_Name1=$_POST['Last_Name'];
						if((is_numeric($Name_Supplyer1)) || (is_numeric($Last_Name1))){	
								print("<html>");
								print("<head>");
								print("</head>");
								print("<body>");
								print('<form  id="id" method="post" action="../Search_for_suppliers/Search_for_suppliers.php">');
								print('<input name="Camp_Error" value="1">');
								print("</form>");
								print("<script>document.getElementById('id').submit()</script>");
								print("</body>");
								print("</html>");   
							}
					@$Name_Supplyer=strtoupper($Name_Supplyer1);
					@$Last_Name=strtoupper($Last_Name1);
					$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
					$query  = "SELECT NAME,LAST_NAME,REG_OFFICE,TYPE_OF_SUPPLY,GOODS,TELEPHONE_NUMBER,EMAIL,COMPANY,SHIPPING_TIME FROM $_Tables[3] WHERE NAME='$Name_Supplyer' or LAST_NAME='$Last_Name'";
					$result=mysqli_query($db,$query) or die ("Impossibile eseguire la query, Query execution failed");
					$numrows=mysqli_num_rows($result);
					/*if($result){
						echo "Ci sono dati";
						}*/
?>
<!doctype html>
<html lang="it">
		<head>
			<meta charset="utf-8">
			<title>RICERCA_FORNITORE</title>
			<link rel="stylesheet" type="text/css" href="../../css/css.css">
            <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
            <link rel="icon" href="../../images/icon/P_ADMIN_ICO.ico">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <script src="../../js/Pace.js"></script>
            </head>
            <body>
            <div class="container">
     			<header class="page-header" style="height:20%;">
                	<img src="../../images/header/banner.png" class="img-responsive"/>
                </header>
                	<div class="media-middle" style="height:70%;">
                    <?php 
					if($numrows == 0){?>
	<b><center><font color="#F00004"> <?php print("Non ci sono righe databases vuoto, There are rows empty databases");
    mysqli_close($db);
} ?></font></center></b><br/>
                  	<center><table border="5" class="table table-responsive">
                        	<thead>
                            	<tr>
                                	<td bordercolor="#3A00FF">
                                    	<center><h3><font color="#1200FF"><b>NOME</b></font></h3></center>
                                    </td>
                                    <td  bordercolor="#1A00FF">
                                    	<center><h3><font color="#0200FF"><b>COGNOME</b></font></h3></center>
                                    </td>
                                    <td bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>RAGIONE SOCIALE</b></font></h3></center>
                                    </td>
                                    <td  bordercolor="#0005FF">
                                    	<center><h3><font color="#0200FF"><b>TIPO DI FORNITORE</b></font></h3></center>
                                    </td>
                                    <td  bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>PRODOTTO</b></font></h3></center>
                                    <td  bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>NUMERO DI TELEFONO</b></font></h3></center>
                                    </td>
                                    <td  bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>E-MAIL</b></font></h3></center>
                                    </td>
                                    <td  bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>AZIENDA</b></font></h3></center>
                                    </td>
                                    <td  bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>TEMPO DI TRASPORTO</b></font></h3></center>
                                    </td>
                                </tr>
                            </thead>
                            	<tbody>	
									<?php
                                        while($Table_Order=mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
                                            <tr>
                                            		<td>
                                            			<font color="#0AFF00"><center><b><?php print($Table_Order['NAME']); ?></b></center></font>
                                                    </td>
                                                    <td>
                                                    	<b><font color="#0AFF00"><center><?php print($Table_Order['LAST_NAME']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                            			<b><font color="#FF0004"><center> <?php print($Table_Order['REG_OFFICE']); ?> </center></font></b>
                                                    </td>
                                                    <td>
                                                   <b><font color="#0AFF00"><center><?php print($Table_Order['TYPE_OF_SUPPLY']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                                   <b><font color="#0AFF00"><center><?php print($Table_Order['GOODS']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                                   <b><font color="#0AFF00"><center><?php print($Table_Order['TELEPHONE_NUMBER']);?></center></font></b>
                                                    </td>
                                                    <td>
                                                   <b><font color="#0AFF00"><center><?php print($Table_Order['EMAIL']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                                   <b><font color="#0AFF00"><center><?php print($Table_Order['COMPANY']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                                   <b><font color="#0AFF00"><center><?php print($Table_Order['SHIPPING_TIME']); ?></center></font></b>
                                                    </td>
                                               </tr>
                                        <?php } ?>
                                </tbody>
                      </table></center>
                      <br>
                      <center><button class="btn btn-success btn-group-sm btn-group-lg btn-lg" type="submit" style="border-radius: 10px ,10px,10px,10px; width:200px;" ><span class="glyphicon glyphicon-upload"></span><a href="../Pannel_Administrator/Pannel_Administrator.php">INDIETRO</a></button></center>
                      <br>
                      <br>
                    </div>
                    	<footer class="modal-footer" style="height:10%;">
                        	<marquee>
                                <font color="#FF0004"><b>
                                THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com) ||  QUESTO GESTIONALE E' STATO CREATO DA MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com)
                                </b></font>
                            </marquee>
                        </footer>
            </div>
            <script src="../../js/bootstrap.min.js"></script>
            <script src="../../jquery/jquery-3.1.1.min.js"></script>
            <?php 
			mysqli_close($db);?>
            </body>
</html>
