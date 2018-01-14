<?php
/*
*
*									MOVEMENT		
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<?php
include("../Data_Access_DB/Data_Access_DB.php");
include("../Tables_DB/Tables_DB.php");
$db=mysqli_connect(HOST,USER,PASSWORD) or die ('Impossibile connettere al server, Unable to connect to the server ');
mysqli_select_db($db,DB) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
$toinsert="SELECT * FROM $_Tables[1] ORDER BY DATE_MOVEMENT";
$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
$numrows=mysqli_num_rows($result);
@$COD_PRODUCT=$_GET['COD_PRODUCT'];
@$Date_Movement=$_GET['Date'];
@$_Up_Dow=$_GET['Up_Dow'];
@$_Up_Dow1=$_GET['Up_Dow1'];
if($Date_Movement && $COD_PRODUCT && $_Up_Dow){
		$toinsert="SELECT * FROM $_Tables[1] WHERE ID_PRODUCT='$COD_PRODUCT' and TYPE='$_Up_Dow' and DATE_MOVEMENT >='$Date_Movement'  ORDER BY DATE_MOVEMENT";
		$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
		$numrows=mysqli_num_rows($result);
	}
elseif($Date_Movement && $COD_PRODUCT && $_Up_Dow1){
		$toinsert="SELECT * FROM $_Tables[1] WHERE ID_PRODUCT='$COD_PRODUCT' and TYPE='$_Up_Dow1' and DATE_MOVEMENT >='$Date_Movement'  ORDER BY DATE_MOVEMENT";
		$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
		$numrows=mysqli_num_rows($result);
	}	
elseif($Date_Movement && $COD_PRODUCT){
		$toinsert="SELECT * FROM $_Tables[1] WHERE ID_PRODUCT='$COD_PRODUCT' and DATE_MOVEMENT >='$Date_Movement'  ORDER BY DATE_MOVEMENT";
		$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
		$numrows=mysqli_num_rows($result);
	}
elseif($COD_PRODUCT){
		$toinsert="SELECT * FROM $_Tables[1] WHERE ID_PRODUCT='$COD_PRODUCT' ORDER BY DATE_MOVEMENT";
		$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
		$numrows=mysqli_num_rows($result);
	}
?>
<!doctype html>
<html lang="it">
		<head>
			<meta charset="utf-8">
			<title>ELENCO MOVIMENTI IN UN PERIODO</title>
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
                	<img src="../../images/header/banner.png" style="width:100%;"/>
                </header>
                	<div class="media-middle" style="height:70%;">
                    <center><h1><font color="#FF0004">ELENCO MOVIMENTI IN UN PERIODO</font></h1></center>
                    <br/>
                    <div class="col-md-6">
        	<div class="jumbotron">
            	<form method="get" action="Movement_List_At_A_Time.php?COD_PRODUCT&Date&Up_Dow">
                	<div class="form-group" align="center">
                    	<fieldset>
                			
                        	<label for="COD_PRODUCT"></label> 
                            <input type="text" class="form-control" name="COD_PRODUCT" placeholder="Inserisci qui il codice del prodotto...">   
                            <br>
                            <br>
                            <label for="Type">Scegli il tipo di movimento</label><br><br>
                            <center><div class="checkbox" id="Up_Dow">
  								<label>Carico</label><br>
                                <input type="Checkbox" name="Up_Dow" value="C"><br><br>
                                <label>Scarico</label><br>
                                <input type="Checkbox" name="Up_Dow" value="S">
						  </div></center><br><br>
                        	 <label for="Date">Scegli la data:  <input type="date" name="Date"> </label>
                             <br>
                             <br>
                       		 <button class="btn btn-success" type="submit" style="border-radius: 10px ,10px,10px,10px; " ><span class="glyphicon glyphicon-upload"></span>  INVIA</button>	
                             <br>
                    	</fieldset>
                    </div>
                <br>
                </form>
        </div>
                    <?php 
					if($numrows == 0){?>
	<b><center><font color="#F00004"> <?php print("Non ci sono righe databases vuoto, There are rows empty databases");
    mysqli_close($db);
} ?></font></center></b><br/>
                  	<center><table width="90" border="5" class="table table-responsive">
                        	<thead>
                            	<tr>
                                	<td width="28%" bordercolor="#3A00FF">
                                    	<center><h3><font color="#1200FF"><b>CODICE MOVIVENTO</b></font></h3></center>
                                    </td>
                                    <td width="28%" bordercolor="#3A00FF">
                                    	<center><h3><font color="#1200FF"><b>TIPO</b></font></h3></center>
                                    </td>
                                	<td width="28%" bordercolor="#3A00FF">
                                    	<center><h3><font color="#1200FF"><b>DATA MOVIMENTO</b></font></h3></center>
                                    </td>
                                    <td width="24%" bordercolor="#1A00FF">
                                    	<center><h3><font color="#0200FF"><b>QUANTITA'</b></font></h3></center>
                                    </td>
                                    <td width="27%" bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>PREZZO</b></font></h3></center>
                                    </td>
                                    <td width="27%" bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>CODICE PRODOTTO</b></font></h3></center>
                                    </td>
                                    
                                </tr>
                            </thead>
                            	<tbody>	
									<?php
                                        while($Table_Order=mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
                                            <tr>
                                            		<td>
                                            			<b><font color="#0AFF00"><center><?php print($Table_Order['ID_MOVEMENT']); ?></center></font></b>
                                                    </td>
                                            		<td>
                                            			<b><font color="#0AFF00"><center><?php print($Table_Order['TYPE']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                                    	<b><font color="#0AFF00"><center><?php print($Table_Order['DATE_MOVEMENT']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                            			<b><font color="#FF0004"><center> <?php print($Table_Order['AMOUNT']); ?> </center></font></b>
                                                    </td>
                                                    <td>
                                            			<b><font color="#FF0004"><center> <?php print($Table_Order['PRICE']); ?> </center></font></b>
                                                    </td>
                                                    <td>
                                            			<b><font color="#FF0004"><center> <?php print($Table_Order['ID_PRODUCT']); ?> </center></font></b>
                                                    </td>
                                               </tr>
                                        <?php } ?>
                                </tbody>
                      </table></center>
                      <br>
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
            </body>
</html>