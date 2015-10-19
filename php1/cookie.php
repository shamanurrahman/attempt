<html>

<?php
	$displayForm = true;
	if(isset($_COOKIE["userName"]) )
	{
		
		$displayForm = false;
		echo "welcome ",$_COOKIE["userName"],"<br>";	
	}
	elseif(isset($_GET["userName"]))
	{
		$displayForm = false;
		setcookie("userName",$_GET["userName"],time()+1800);
		$_COOKIE["userName"] = $_GET["userName"];
		echo "my cookie is ",$_COOKIE["userName"];
		echo "welcome ",$_GET["userName"],"<br>";
		
	}
?>

<?php if($displayForm){ ?>
	<form action="cookie.php" method="get">
		User Name:
		<input type="text" name="userName">
		<br>
		Password
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>	
<?php } ?>
</html>