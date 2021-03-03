<?php
  $mysqli = new mysqli('localhost', 'root', '', 'Orders');
  $result=$mysqli->query('SELECT * FROM `food`', );

  while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
									{  
									  	 // выводим данные
									 	echo '<tr><td>'.$row['Supplier'].'</td>';
										echo '<td>'.$row['Name'].'</td>';
										echo '<td>'.$row['Type'].'</td>';
									 	echo '<td>'.$row['Quantity'].'</td>';
									 	echo '<td>'.$row['Date'].'</td></tr>';
									}
?>