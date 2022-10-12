<html>
<body>
<?php

if ( $_POST["Grade"] > 70 ) $Waluigi = "You Passed";
else if ( $_POST["Grade"] < 59 ) $Waluigi = "You Failed and needs to repeat";	
else $Waluigi = "You are required to have Remedial Classes";


/*
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
*/

//Kurt, You hafta do a PHP program that will prompt if the student will pass or fail, or even get remedial
/*
		if > 70 : passed
		if 60 - 69 : remedial
		if < 59 : repeat/FAIL
*/
?>
Welcome <?php echo $_POST["name"]; ?><br>
<?php echo $Waluigi; ?> in <?php echo $_POST["Subj"]; ?>


</body>
</html>