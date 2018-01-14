<?php

/*
*
*							
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/


function CONNECT_SERVER($host,$user,$password){			//Function connect server
		mysqli_connect($host,$user,$password) or die ('Impossibile connettere al server,
		Unable to connect to the server ');
	}

function CONNECT_DB($database,$db){						//Function connect DB
		mysqli_select_db($database,$db) or die ('Impossibile connettere al DB , Unable to connect to the DB ');
		}

function QUERY_DB($query,$db){                          //Function Query
		mysqli_query($query,$db);
	}

?>