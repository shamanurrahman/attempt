<html>
	<head>
		<style>
			.error{
				 border-style: solid;
				 border-color: red;
			}
			.red{
				color:red;
			}
			.success{
				border-style: solid;
				border-color: green;
			}
		</style>
	</head>
	<?php
		$name = "";
		$email = "";
		$boxStyle = "";
		$textStyle = "";
		if(isset($_GET['user']) )
		{
			if($_GET["user"]=="")
			{
				echo "Please enter your name<br>";
				$boxStyle = "error";
				$textStyle = "red";
			}
			else
			{
				$boxStyle = "success";
				$name = $_GET['user'];
				$email = $_GET['email'];
				echo "Welcome: ",$_GET["user"],"<br>";
				echo "Your email Id is:",$_GET["email"],"<br>";
			}
			
		}
		else
		{
			
			echo "Please Fill in the Form";
		}
	?>
	
	<body>
		<form action="<?php echo $_SERVER["PHP_SELF"];?>"  method="get">
		<span class="<?php echo $textStyle; ?>">Name*:</span>
			<input type="text" class="<?php echo $boxStyle; ?>" name="user"  />
			<br>
		Email Id:
			<input type="text" name="email"/>
			<br>
			<button type="submit" >Submit</button>
		</form>
	</body>

</html>