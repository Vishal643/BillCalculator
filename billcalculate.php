
<?php include('server.php');?>

<?php 
if(empty($_SESSION['username'])) {
	header('location: index.php');
}

?>


<div class="container">
<?php if(isset($_SESSION['username'])): ?>
	<p>Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
	<p><a href="index.php?logout='1' " style="color: red;">Logout</a></p>
<?php endif?>
</div>




<center><?php

if(isset($_POST['btn'])) {
	$num = $_POST['num1'];

	if($num == 0 ) {
		echo "<script type='text/JavaScript'> alert('You have got no bill this month!!!!');</script>";
	} else if ($num <= 50){
		$result = $num * 9;
		echo "<h1 style='color:blue; font-family:courier;'>Your bill for this month is: </h1>" . "<h1 style='color:red;'>{$result}₹</h1>";

	}else if ($num >= 51 && $num <=100) {
		$result = $num * 12;
		echo "<h1 style='color:blue; font-family:courier;'>Your bill for this month is: </h1>" . "<h1 style='color:red;'>{$result}₹</h1>";
	} else {
		$result = $num * 15;
		echo "<h1 style='color:blue; font-family:courier;'>Your bill for this month is: </h1>" . "<h1 style='color:red;'>{$result}₹</h1>";
	}
}

?></center>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electricity Bill Generator</title>
</head>
<body>
<form method="POST" action="">
	<input type="number" name="num1" placeholder="Enter the units"><br><br>
	<input type="submit" id="button" name="btn" value="Generate the Bill"></input>
</form>
    
</body>
</html>
<style>
	body{
		background: white;
		color: red;
	}

	form {
		width: 500px;
		background: blue;
		border-radius: 4px;
		height: 300px;
		border: 1px solid black;
		margin: 0 auto;
		padding: 10px;
	}

	form input {
		width: 93%;
		padding: 10px;
		border-radius: 4px;
		border: 1px solid black;
		background: red;
		color: solid black;
	}

	form #button{
		width: 50%;
		margin-left: 100px;
		cursor: pointer;
	}
</style>