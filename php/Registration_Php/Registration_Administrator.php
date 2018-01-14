

<?php
/*
*
*							REGISTRATION PHP
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>

<?php

@$Error_Reg = $_POST['Error_Reg'];

?>



<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		
        <title>REGITRATION_PAG</title>
	
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../../css/css.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="../../images/icon/Access_ico.ico"/>
   		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="../../js/Pace.js"></script>
    </head>

	<body>
    	<div class="container">
        		<h1 align="center"><font color="#F50000">GESTIONALE MAGAZZINO</font></h1>
                <h1 align="center"><font color="#F50000">PANNELLO REGISTRAZIONE UTENTE</font></h1>
                <br>
                <br>
                <div class="jumbotron">
                <form autocomplete="on" method="post" action="../Insert_DB/Insert_DB_Administrator.php">
        			<div class="form-group">
                		<fieldset>
                        	<div class="col-sm-5 col-lg-5">
                        	<label for="Name">Nome</label>
                            <input type="text"  class="form-control" name="name" placeholder="Inserisci il nome...">							
                            <label for="Last_Name">Cognome</label>
                            <input type="text"  class="form-control" name="Last_Name" placeholder="Inserisci il Cognome...">							
                            <label for="Password">PASSWORD</label>
                            <input type="password"  class="form-control" name="Password" placeholder="Inserisci La password massimo 15 caratteri...">	
                            <br>
                            <label for="Password">REINSERISCI LA PASSWORD</label>
                            <input name="Re_in_Password" type="password"  class="form-control" placeholder="Reinserisci la password..." autocomplete="off">	
                            <br>
                            <label for="E-Mail">E-MAIL</label>
                            <input type="text"  class="form-control" name="E-Mail" placeholder="Inserisci qui la tua e-mail...">							
                            <br>
                            <button type="submit" class="btn btn-default">Invia</button>
                            
							</div>
                        	<img src="../../images/images/Access_image.png" width="276" height="270" class="img-rounded">
                            <br>
                            <br>
                            <marquee>
                            <font color="#FF0004">
                            THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com) ||  QUESTO GESTIONALE E' STATO CREATO DA MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com)
                            </font>
                            </marquee>
           		      </fieldset>
                      <?php
					  if ($Error_Reg){?>
                      	<br>
                        <br>
                        <font color="#0005FF"><b>ERRORE RIPETI CORRETTAMENTE LA PASSWORD NEL CAMPO RICHIESTO , ERROR CORRECTLY REPEAT THE PASSWORD REQUIRED IN THE FIELD</b></font>
					<?php } ?>
                </div>
        		</form>
                <br>
                <br>
                <a href="../../Access.php"><b>ACESSO UTENTE</b></a>
                
        </div>
    </div>
    
   <script src="../../jquery/jquery-3.1.1.min.js"></script>
   <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>