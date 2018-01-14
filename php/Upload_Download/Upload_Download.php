<?php
/*
*
*							UPLOAD E DOWNLOAD
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
$Query = "SELECT ID_PRODUCT,DESCRIPTION FROM $_Tables[2] ORDER BY DESCRIPTION";
$Query_DB = mysqli_query($db,$Query);
@$Id_Product=$_GET['ID_PRODUCT'];
@$Cod_Product=$_GET['Cod_Product'];
@$_COD_ERROR=$_GET['COD_ERROR'];
@$_Cod_Result=$_GET['COD_RESULT'];
@$Discount=$_GET['Discount'];
@$Price=$_GET['Price'];
@$Amount=$_GET['Amount'];
@$Disc=($Price*$Amount*$Discount)/100;
@$Op=$Price*$Amount;
@$Op2=$Op-$Disc;
?>
<!doctype html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>PANNEL_PROD</title>
		<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../../css/css.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="../../images/icon/P_ADMIN_ICO.ico">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="../../js/Pace.js"></script>
	</head>
	<body>
    <div class="container">
    	<div class="page-header">
        	<center><h1><font color="#FF0000">CARICO E SCARICO DI MERCE</font></h1></center>
        </div>
    <div class="media-middle">
        <div class="col-md-6">
        	<div class="jumbotron">
            	<form method="post" action="../Function_Upload_Download/Function_Upload_Download.php" autocomplete="on">
                	<div class="form-group" align="center">
                    	<fieldset>
                        	<label for="Description">CODICE PRODOTTO</label>
                            <input type="text" class="form-control" name="Cod_Product" placeholder="Inserisci Codice articolo" value="<?php @print("$Cod_Product"); ?>">
                			<label for="Description">Quantità</label>
                            <input type="text" class="form-control" name="Amount" placeholder="Inserisci quantità(solo dati numerici interi)" value="<?php @print("$Amount");?>">
                            <label for="Giacenz">Prezzo</label>
                            <input type="text" class="form-control" name="Price" placeholder="Inserisci prezzo" value="<?php if($Op){@print("$Op");}?>">
                          <center><div class="checkbox" id="Up_Dow">
  								<label>Carico</label><br>
                                <input type="Checkbox" name="Up_Dow" value="C"><br><br>
                                <label>Scarico</label><br>
                                <input type="Checkbox" name="Up_Dow1" value="S">
						  </div></center>
                            <br>
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Prodotto
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                              <?php
							  		while($Assoc = mysqli_fetch_array($Query_DB,MYSQLI_ASSOC)){
							  ?>
                                <li id="Product"><a href="Upload_Download.php?ID_PRODUCT=<?php print($Assoc['ID_PRODUCT']); ?>"><?php print($Assoc['DESCRIPTION']); ?></a></li>
                                <?php } mysqli_close($db); ?>
                              </ul>
                            </div>
                            <br>
                            <br>
                            <button class="btn btn-success" type="submit" style="border-radius: 10px ,10px,10px,10px; width:200px;" ><span class="glyphicon glyphicon-upload"></span>  INVIA</button>
                            <br>
                            <br>
                            <center><button class="btn btn-success btn-group-sm btn-group-lg btn-lg" type="submit" style="border-radius: 10px ,10px,10px,10px; width:200px;" ><span class="glyphicon glyphicon-upload"></span><a href="../Pannel_Administrator/Pannel_Administrator.php">INDIETRO</a></button></center>
                            <br>
                            <br>
                            <p><b><?php
								if($_COD_ERROR=="500"){?>
									<font color="#FF0004"><?php print("INSERISCI IL TIPO DI DATI CORRETTI O COMPLETA TUTTI I CAMPI || INSERT THE TYPE OF DATA CORRECT OR COMPLETE ALL THE FIELDS");
								}?></font>
								<?php
                                if($_Cod_Result=="458"){?>
									<font color="#61FF00"><?php print("INSERIMENTO AVVENUTO CORRETTAMENTE || INSERT WORTHED CORRECTLY");
									}
								?></font></b></p>
                                <?php
                                if($_COD_ERROR=="459"){?>
									<p><b><font color="#FF0004"><?php print("INSERISCI IL CODICE DEL PRODOTTO CORRETTO || INSERT THE CORRECT PRODUCT CODE");
									}
								?></font></b></p>
                                <?php
                                if($_COD_ERROR=="501"){?>
									<p><b><font color="#FF0004"><?php print("LA QUANTITA' E' MAGGIORE RISPETTO ALLA DISPONIBILITA 'DI MAGAZZINO || QUANTITY IS LARGEST IN RESPECT OF AVAILABILITY OF WAREHOUSE");?>
									<br>
                                    <a href="../Warehouse_Sheet/Warehouse_Sheet.php?COD_PRODUCT=<?php print($Cod_Product);?>"><b>Controlla la scheda del prodotto</b></a>
									<?php }
								?></font></b></p>
                                <?php
                                if($_COD_ERROR=="502"){?>
									<p><b><font color="#FF0004"><?php print("SELEZIONARE SOLO UN TIPO DI OPERAZIONE || SELECT ONLY ONE TYPE OF OPERATION");
									}
								?></font></b></p>
                        </fieldset>
                    </div>
                <br>
                </form>
        </div>
         <div class="panel-footer" style="height:100px>;">
        	<marquee>
            	<font color="#FF0004">
                            THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com) ||  QUESTO GESTIONALE E' STATO CREATO DA MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com)
                            </font>

            </marquee>
       	</div>
        	</div>
        </div>

    </div>
		<script src="../../jquery/jquery-3.1.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
	</body>
</html>
