<?php
/*
*
*							SUPPLIER PHP
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<?php 
@$Data_Error=$_POST['Data_Error'];
?>
<!doctype html>
<html>
    
    <head>
    
    	<meta charset="utf-8">
		<title>PANNEL_SUPPL</title>
	
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
        	
            <h1><center><font color="#FF0004">INSERISCI FORNITORE</font></center></h1>
        
        </div>
        <div class="media-middle">
        <div class="col-md-6">
        	<div class="jumbotron">
            <form method="post" action="../Function_Providers_Php/Function_Provider_Php.php">
            
            	<fieldset>
              
                    <label for="Name">NOME: </label>
                    <input type="text" name="Name" placeholder="Inserisci nome fornitore" class="form-control">
                    <br>
                    <br>
                    <label for="Last_Name">COGNOME: </label>
                    <input type="text" name="Last_Name" placeholder="Inserisci cognome fornitore" class="form-control">
                    <br>
                    <br>
                    <label for="Registered_Office">SEDE SOCIALE: </label>
                    <input type="text" name="Registered_Office" placeholder="Inserisci il nome della sede sociale" class="form-control">
                    <br>
                    <br>
                    <label for="Type_Of_Supply">TIPO VENDITORE: </label>
                    <input class="form-control" type="text" name="Type_Of_Supply" placeholder="Inserisci il tipo venditore">
                    <br>
                    <br>
                    <label for="Goods">BENI/E: </label>
                    <input class="form-control" type="text" name="Goods" placeholder="Inserisci il nome del bene/i che vende">
                    <br>
                    <br>
                    <label for="Telephone_Number">NUMERO DI TELEFONO: </label>
                    <input class="form-control" type="text" name="Telephone_Number" placeholder="Inserisci numero di telefono venditore">
                    <br>
                    <br>
                    <label for="E-Mail">E-MAIL: </label>
                    <input class="form-control" type="text" name="E-Mail" placeholder="Inserisci E-mail venditore">
                	 <br>
                     <br>
                    <label for="Company">COMPAGNIA: </label>
                    <input class="form-control" type="text" name="Company" placeholder="Inserisci nome compagnia">
                    <br>
                     <br>
                    <label for="Shipping_Time">TEMPO ARRIVO MERCE: </label>
                    <input class="form-control" type="text" name="Shipping_Time" placeholder="Inserisci tempo arrivo merce">
                    <br>
                    <br>
                <center><button class="btn btn-lg" type="submit">INVIA</button>  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-lg"><a href="../Pannel_Administrator/Pannel_Administrator.php">INDIETRO</a></button></center>
                <?php
					if($Data_Error){
						?>
                        	<br/>
                            <br/>
                            <font color="#FF0004"><center><b>INSERISCI CORRETTAMENTE TUTTI I CAMPI , 
INSERT CORRECTLY ALL FIELDS.</b></center></font>
					<?php
                    }
				?>
           	  </fieldset>
            </form>
        	</div>
        </div> 
        </div>
        
    </div>
        
    
    </body>

</html>