<?php
	$Supplier = filter_var(trim($_POST['Supplier']), FILTER_SANITIZE_STRING);
	$Name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_STRING);
	$Type = filter_var(trim($_POST['Type']), FILTER_SANITIZE_STRING);
	$Quantity = filter_var(trim($_POST['Quantity']), FILTER_SANITIZE_STRING);
	$Date = filter_var(trim($_POST['Date']), FILTER_SANITIZE_STRING);

	if(mb_strlen($Supplier) < 1 || mb_strlen($Supplier) > 100) 
		{
			echo "Недопустимая длина строки: автор";
			exit();
		} 
	else if(mb_strlen($Name) < 1 || mb_strlen($Name) > 50) 
		{
			echo "Недопустимая длина строки: название";
			exit();
		} 
	else if(mb_strlen($Type) < 1 || mb_strlen($Type) > 50) 
		{
			echo "Недопустимая длина строки: жанр";
			exit();
		} 
	else if(mb_strlen($Quantity) < 1 || mb_strlen($Quantity) > 10) 
		{
			echo "Недопустимая длина строки: количество";
			exit();
		}

	$mysql = new mysqli('localhost', 'root', '', 'Orders');
	$mysql->query("INSERT INTO `food` (`Supplier`, `Name`, `Type`, `Quantity`, `Date`) VALUES('$Supplier', '$Name', '$Type', '$Quantity', '$Date')");
	$mysql->close();
	
	header('Location: /site/orders.php');
?>
