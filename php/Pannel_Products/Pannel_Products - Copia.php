<?php
/*
*
*							PANNEL PRODUCTS
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
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
        	<center><h1><font color="#FF0000">REGISTRAZIONE PRODOTTO</font></h1></center>
        </div>
    <div class="media-middle">
        <div class="col-md-6">
        	<div class="jumbotron" style="height:600px;">
            	<form method="post" action="../Function_Pannel_Product/Function_Pannel_Product.php">
                	<div class="form-group" align="center">
                    	<fieldset>
                			
                        	<label for="Description">Descrizione Prodotto</label> 
                            <input type="text" class="form-control" name="Description_Product" placeholder="Inserisci descrizione del prodotto">   
                            <label for="Giacenz">Giacenza</label> 
                            <input type="text" class="form-control" name="Giacenz" placeholder="Inserisci qui la giacenza (solo dati numerici interi)">
           
                            <label for="Shuffle_Point">Punto di riordino</label> 
                            <input type="text" class="form-control" name="Shuffle_Point" placeholder="Scrivi qui la quantità minima per effettuare l'ordine"> 
                            <label for="Stock_Safety">Scorta di sicurezza</label> 
                            <input type="text" class="form-control" name="Stock_Safety" placeholder="Inserisci qui la quantità di prodotti in situazione di sicurezza(solo dati numerici)"> 
                            <label for="Unit_Measure">Unità di misura</label> 
                            <input type="text" class="form-control" name="Unit_Measure" placeholder="Inserisci qui l'unità di misura che si utilizza per il prodotto(solo due caratteri)"> 
                            <label for="Position">Posizione Scaffale</label> 
                            <input type="text" class="form-control" name="Position" placeholder="Inserisci posizione nello scaffale">    
                        	 <br>
                             <br>
                       		 <button class="btn btn-success" type="submit" style="border-radius: 10px ,10px,10px,10px; width:200px;" ><span class="glyphicon glyphicon-upload"></span>  INVIA</button>
                             <br>
                             <br>
                             <center><button class="btn btn-success btn-group-sm btn-group-lg btn-lg" type="submit" style="border-radius: 10px ,10px,10px,10px; width:200px;" ><span class="glyphicon glyphicon-upload"></span><a href="../Pannel_Administrator/Pannel_Administrator.php">INDIETRO</a></button></center>
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