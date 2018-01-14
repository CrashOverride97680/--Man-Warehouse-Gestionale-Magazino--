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
            	<form method="post" action="">
                	<div class="form-group" align="center">
                    	<fieldset>
                        	<label for="Description">CODICE PRODOTTO</label> 
                            <input type="text" class="form-control" name="Cod_Product" placeholder="Inserisci Codice articolo" value="<?php print($Id_Product); ?>">   
                			<label for="Description">Quantità</label> 
                            <input type="text" class="form-control" name="Description_Product" placeholder="Inserisci quantità(solo dati numerici interi)">   
                            <label for="Giacenz">Prezzo</label> 
                            <input type="text" class="form-control" name="Giacenz" placeholder="Inserisci prezzo">                
                          <div class="checkbox" id="Up_Dow">
  								<label><input type="Checkbox" value="C">Carico</label><br>
                                <label><input type="Checkbox" value="S">Scarico</label><br>
							</div>
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