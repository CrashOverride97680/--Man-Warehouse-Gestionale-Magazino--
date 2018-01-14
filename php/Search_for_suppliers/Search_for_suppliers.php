<?php
/*
*
*							SEARCH FOR SUPPLIER
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<!doctype html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>RICERCA FORNITORE</title>
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
        	<center><h1><font color="#FF0000">RICERCA FORNITORE</font></h1></center>
        </div>
    <div class="media-middle">
        <div class="col-md-6">
        	<div class="jumbotron">
            	<form method="post" action="../Function_Search_For_Supplier/Function_Search_For_Supplier.php">
                	<div class="form-group" align="center">
                    	<fieldset>
                			
                        	<label for="Description">Name</label> 
                            <input type="text" class="form-control" name="Name" placeholder="Inserisci qui il nome del fornitore...">   
                            <label for="Giacenz">Cognome</label> 
                            <input type="text" class="form-control" name="Last_Name" placeholder="Inserisci qui il cognome del fornitore...">
                        	 <br>
                             <br>
                       		 <button class="btn btn-success" type="submit" style="border-radius: 10px ,10px,10px,10px; " ><span class="glyphicon glyphicon-upload"></span>  INVIA</button>	
                             <br>
                             <br>
                       		<center><button class="btn btn-success" type="submit" style="border-radius: 10px ,10px,10px,10px;" ><span class="glyphicon glyphicon-upload"></span><a href="../Pannel_Administrator/Pannel_Administrator.php">INDIETRO</a></button></center>
                    	</fieldset>
                    </div>
                <br>
                </form>
        </div>
         <?php 
			@$Camp_Error=$_POST['Camp_Error'];
				if($Camp_Error){?>
					<font color="#0015FF"><b>INSERIRE DATI CORRETTI SOLO STRINGA || INSERT CORRECT CHARAPTER DATA</b> </font>
				<?php }?>
         <div class="panel-footer">
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