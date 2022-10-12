<html>
<body>
<?php
//defined shtuffsies
	$monf = "December";
//First Test "
	$waf = "1000";
	$wafidef = "+1000";
//Second Test "Comparison"
	$compa = 2;
	$compb = 3;
//Third Test "Logical Operator"
	$Logica = 1;
	$Logicb = 0;
//also 3rd Test, but additional with "if"
	$Banky = 250;
	
	


/*//!splitter!////////////////////////////////////////////////////////////////////////////
-vvv- WHERE THE CODE GETS RAN THROUGH -vvv- */
//////////////////////////////////////////////////////////////////////////////////////////

// ! - First Test Program - ! //

	if($monf == "December") echo "It's KRIIIMAAAA!!!". "<br>";
	
echo "<br>"; //new line thingy

	if($waf != $wafidef) echo "1";

	if($waf !== $wafidef) echo "2";
echo "<br>";
echo "<hr>"; //horizontal line shtuff

// ! - Second Test Program - ! "Comparison" //

	if ( $compa > $compb ) echo " 'a' is greater than 'b'". "<br>";
	if ( $compa < $compb ) echo " 'a' is less than 'b'". "<br>";
	if ( $compa >= $compb ) echo " 'a' is greater or equal to than 'b'". "<br>";
	if ( $compa <= $compb ) echo " 'a' is less or equal to than 'b'". "<br>";
echo "<hr>";


// ! - Third Test Program - ! "Logical Operator" //
echo "<br>";
// (!)NOTE : if the value is "0", it just gets skipped, bruh moment but understandable
// So I added my own zeroes with IF

	if (($Logica AND $Logicb)==0) echo "0". "<BR>";
	else echo ($Logica AND $Logicb). "<br>";
	
	if (($Logica OR $Logicb)==0) echo "0". "<BR>";
	else echo ($Logica OR $Logicb). "<br>";
	
	if (($Logica XOR $Logicb)==0) echo "0". "<BR>";
	else echo ($Logica XOR $Logicb). "<br>";
//3.1 test "if"
echo "<br>";
echo "<br>";
	if ( $Banky > 100 )
	{
		echo $Banky;
		echo "<br>";
		$money = 1000;
		$Banky+=$money;
		echo $Banky;
		
	}
//3.2 "switch"
echo "<br>";




?>
</body>
</html>