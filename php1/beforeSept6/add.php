<?php
	$result = "";
	include "C:/xampp/htdocs/training/php/phpForms/myFunctions/functions.php";
	echo $_SERVER["PHP_SELF"];
	if(isset($_GET["operand1"]) && isset($_GET["operand2"]) && isset($_GET["operator"]) )
	{
		$result = calculator($_GET["operator"],$_GET["operand1"],$_GET["operand2"]);	
	}
	
?>
<html>
	<form action="add.php" method="get">
		<input type="text" name="operand1" />
		<input type="text" name="operand2" />
		<input type="text" name="operator" />
		<button type="submit">Calculate</button>
	</form>
	<div> Sum: <?php echo $result; ?> </div>
</html>
