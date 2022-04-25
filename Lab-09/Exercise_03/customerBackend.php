<?php

	//Include the stylesheet
	echo "<link href=\"./style.css\" rel=\"stylesheet\">";

	//Firstly, get all the inputs 
	$username = $_POST["username"];
	$password = $_POST["password"];
	$item1 = $_POST["item1"];
	$item2 = $_POST["item2"];
	$item3 = $_POST["item3"];
	$shipping = $_POST["shipping"];
	
	//Welcome the user by printing their username 
	//and displaying their password
	echo "<p>Weclome to the Pie Store</p>";
	echo "<p> User: $username</p>";
	echo "<p> Password: $password </p>";

	//Next print the reciept by first print the print label
	echo "<p> Your Reciept: </p>";

	//Next, caculate the cost of each item
	$item1Cost = $item1 * 3;
	$item2Cost = $item2 * 4;
	$item3Cost = $item3 * 5;

	//Next, find the cost of the shipping
	$shippingCost = 0;

	//If shipping is Free 7 day, the cost is 0
	//If shiping is $50.00 Over Night, the cost is 50
	//If shipping is $5.00 Over nigth, the cost 5
	if($shipping == "Free 7 Day") $shippingCost = 0;
	if($shipping == "$5.00 Three Day") $shippingCost = 5;
	if($shipping == "$50.00 Over Night") $shippingCost = 50;

	//Finally, get the total cost
	$totalCost = $item1Cost + $item2Cost + $item3Cost + $shippingCost;

	//Next, create the table that will store the reciept
	echo "<table> <tbody>";

	//Create the row that will the label for each column
	echo "<tr> <th>Pies</th> <th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th> </tr>";
	
	//Create the row first the first item
	echo "<tr> <th>Applie Pie</th> <td>$item1</td> <td>$3.00</td> <td>$$item1Cost</td> </tr>";	

	//Create the second row for the second item
	echo "<tr> <th>Pumpking Pie</th> <td>$item2</td> <td>$4.00</td> <td>$$item2Cost</td> </tr>";
	
	//Create the third row for the third item
	echo "<tr> <th>Chicken Pot Pie</th> <td>$item3</td> <td>$5.00</td> <td>$$item3Cost</td> </tr>";

	//Create a row for shipping
	echo "<tr> <th>Shipping</th> <td colspan=\"2\">$shipping</td> <td>$$shippingCost</td> </tr>";

	//Finally, create row for total cost
	echo "<tr> <th colspan=\"3\">Total Cost</th> <td>$$totalCost</td> </tr>";

	echo "</tbody></table>";
	
?>