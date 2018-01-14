<?php
/*
*
*								PANNEL PRODUCT ORDER				
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
$toinsert="SELECT DESCRIPTION,GIACENZ,STOCK_SAFETY,POSITION FROM $_Tables[2] WHERE GIACENZ < SHUFFLE_POINT";
$result=mysqli_query($db,$toinsert) or die ("Impossibile eseguire la query, Query execution failed");
$numrows=mysqli_num_rows($result);
?>
<!doctype html>
<html lang="it">
		<head>
			<meta charset="utf-8">
			<title>PANNEL_ORDER</title>
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
                    <?php 
					if($numrows == 0){?>
	<b><center><font color="#F00004"> <?php print("Non ci sono righe databases vuoto, There are rows empty databases");
    mysqli_close($db);
} ?></font></center></b><br/>
                  	<center><table width="90" border="5" class="table table-responsive">
                        	<thead>
                            	<tr>
                                	<td width="28%" bordercolor="#3A00FF">
                                    	<center><h3><font color="#1200FF"><b>DESCRIZIONE PRODOTTO</b></font></h3></center>
                                    </td>
                                    <td width="24%" bordercolor="#1A00FF">
                                    	<center><h3><font color="#0200FF"><b>GIACENZA</b></font></h3></center>
                                    </td>
                                    <td width="27%" bordercolor="#0200FF">
                                    	<center><h3><font color="#0200FF"><b>SCORTA DI SICUREZZA</b></font></h3></center>
                                    </td>
                                    <td width="21%" bordercolor="#0005FF">
                                    	<center><h3><font color="#0200FF"><b>POSIZIONE</b></font></h3></center>
                                    </td>
                                </tr>
                            </thead>
                            	<tbody>	
									<?php
                                        while($Table_Order=mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
                                            <tr>
                                            		<td>
                                            			<font color="#0AFF00"><center><?php print($Table_Order['DESCRIPTION']); ?></center></font>
                                                    </td>
                                                    <td>
                                                    	<b><font color="#0AFF00"><center><?php print($Table_Order['GIACENZ']); ?></center></font></b>
                                                    </td>
                                                    <td>
                                            			<b><font color="#FF0004"><center> <?php print($Table_Order['STOCK_SAFETY']); ?> </center></font></b>
                                                    </td>
                                                    <td>
                                                   <b><font color="#0AFF00"><center><?php print($Table_Order['POSITION']); ?></center></font></b>
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