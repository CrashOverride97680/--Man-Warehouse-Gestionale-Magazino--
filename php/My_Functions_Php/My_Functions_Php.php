<?php
/*
*
*							MY FUNCTIONS PHP
*	THIS MANAGEMENT WAS CREATED BY MANNA FABRIZIO (AXEL CORPORATION).
*
*
*/
?>
<?php
/*----------------------------------------------------------------------------------------------MY-FUNCTION-PASSWORD----------------------------------------------------------------------------------------*/
function Create_Password ($_Password){
/*--------------------------------------------------------------------------------------------CREATE-A-VARIABLE(MATRIX)-------------------------------------------------------------------------------------*/	
	define("MAX",15);//MAX_CHARAPTER_FOR_PASSWORD
	$_Matrix_A = array(//MATRIX_CAPITAL_LETTER_ALPHABET
		array('A','B','C','D'),
		array('E','F','G','H'),
		array('I','J','K','L'),
		array('M','N','O','P'),
		array('R','S','T','U'),
		array('V','X','Y','Z')
	);	
	$_Matrix_B = array(//MATRIX_ALPHABET_FOR_LETTER_LOWER
		array('a','b','c','d'),
		array('e','f','g','h'),
		array('i','j','k','l'),
		array('m','n','o','p'),
		array('r','s','t','u'),
		array('v','x','y','z')
	);
	$_Matrix_C = array(//MATRIX_SPECIAL_CHARACTERS
		array('|','@','£','!'),
		array('"','$','%','/'),
		array('(',')','=','?'),
		array('&','ç','é','-'),
		array('_','.',':','#')
	);
	$_Matrix_D = array(//MATRIX_NUMBER
		array('0','1','2','3','4'),
		array('5','6','7','8','9')
	);
/*---------------------------------------------------------------------------------CICLE-FOR-PRINT-IN-VARIABLE-PASSWORD--------------------------------------------------------------------------------------*/
		for($I=0;$I<MAX;$I++){
				$A_Rand = rand(0,3);//NEED_TO_CHOOSE_A RANDOM_THE MATRIX							
					if ($A_Rand == 0){//PRINT_A_CAPITOL_LETTER_IN_VARIABLE
						$_Rand_Lines = rand(0,5);
						$_Rand_Columns = rand(0,3);
						$_Password = $_Password.$_Matrix_A[$_Rand_Lines][$_Rand_Columns];
						}
					elseif($A_Rand == 1){//PRINT_A_LOWER_LETTER_IN_VARIABLE
						$_Rand_Lines = rand(0,5);
						$_Rand_Columns = rand(0,3);
						$_Password = $_Password.$_Matrix_B[$_Rand_Lines][$_Rand_Columns];
						}
					elseif($A_Rand == 2){//PRINT_A_SPECIAL_CHARACTER_IN_VARIABLE
						$_Rand_Lines = rand(0,4);
						$_Rand_Columns = rand(0,3);
						$_Password = $_Password.$_Matrix_C[$_Rand_Lines][$_Rand_Columns];		
					}
					elseif($A_Rand == 3){//PRINT_NUMBER_IN_VARIABLE
						$_Rand_Lines = rand(0,1);
						$_Rand_Columns = rand(0,4);
						$_Password = $_Password.$_Matrix_D[$_Rand_Lines][$_Rand_Columns];
						}
			}
			return $_Password;//RETUN_VARIABLE
	}
/*--------------------------------------------------------------------------------------END-FUNCIONS----------------------------------------------------------------------------------------------------------*/
?>