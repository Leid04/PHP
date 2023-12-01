
<?php
include_once 'include/e12_header.php';
$num = 3;
if ( $num%2 == 0 ) { 
	echo "El número $num es par <br>";
	}
	else { 
		echo "El número $num es impar <br>";
	} 

//otra sintaxis válida para la condicional if.
echo "El número  $num";
if ( $num%2 == 0 ) : ?> 
		es par <br>
<?php	else :?>
		es impar <br>
<?php	endif;
	
	
include_once 'include/e12_footer.php';
?>
