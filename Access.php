<?php
/*
*
*							ACCESS PHP
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>

<?php

@$ACC_ERROR=$_POST['Acc_Error'];
@$Camp_Error=$_POST['Camp_Error'];

?>


<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		
        <title>ACCESS_PAG</title>
	
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/css.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="images/icon/Access_ico.ico"/>
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="js/Pace.js"></script>
    </head>

	<body>
    	<div class="container">
        		<h1 align="center"><font color="#F50000">GESTIONALE MAGAZZINO</font></h1>
        		<h1 align="center"><font color="#F50000">PANNELLO ACCESSO UTENTE</font> </h1>
              <div class="col-sm-5 col-lg-5">
        		<div class="jumbotron">
                <form autocomplete="on" method="post" action="php/Function_Access_Php/Function_Access2_Php.php">
        			<div class="form-group">
                		<fieldset>
                        	<label for="User">USER</label>
                            <span class="glyphicon glyphicon-user"></span>
                            <input type="text"  class="form-control" name="User" placeholder="Inserisci l'User">							
                            <label for="Password">PASSWORD</label>
                            <input type="password"  class="form-control" name="Password" placeholder="Inserisci La password">	
                            <br>
                          <button type="submit" class="btn btn-default">Invia</button>
               		  </fieldset>
                </div>
        		</form>
                <br>
                <img src="images/images/Login.gif" width="206" height="170"><br>
                <marquee>
                            <font color="#FF0004">
                            THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com) ||  QUESTO GESTIONALE E' STATO CREATO DA MANNA FABRIZIO (AXEL CORPORATION). E-MAIL(mannafabrizio83@gmail.com)
                            </font>
                            </marquee>
                            <?php
							if ($ACC_ERROR){?>
                            <br>
                            <font color="#3930FF"><b>USERNAME O PASSWORD ERRATI , USERNAME OR PASSWORD ARE INCORRECT </b></font>
							<?php } ?>
                            
							<?php
                            if ($Camp_Error){?>
                            <br>
                            <font color="#00FF1D"><b>NON TUTTI I CAMPI SONO STATI RIEMPITI , NOT ALL FIELDS ARE FILLED STATES</b></font>
							<?php } ?>
        		</div>
                </div>
    	</div>
	   <script src="jquery/jquery-3.1.1.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
	
    </body>

</html>
