<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	//Creates the table header
	function createTableHeader()
	{
		//Firstly, echo tr and a empty slot
		echo "<tr> <td></td>";
		
		//Next, loop from 1 to 100
		for($x = 1; $x <= 100; $x++)
		{
			//Echo the number $x surrounded by <td>
			echo "<td> $x </td>";
		}

		//End the row
		echo "</tr>";
	}

	//Create all the multiplies for each row of the table
	function createMultiples()
	{
		//Loop 100 times
		for($x = 1; $x <= 100; $x++)
		{
			//Create a new row and echo $x at the start of the row
			echo "<tr> <td> $x </td>";

			//Next, loop again 100 times
			for($y = 1; $y <= 100; $y++)
			{
				//Create a varaible z that is x * y
				$z = $x * $y;

				//Next, create a new td with z 
				echo "<td> $z </td>";
			}

			//End the row
			echo "</tr>";

			
		}
	}

	//Create the table and body
	echo "<table> <tbody>";

	//Create the header row for the table
	createTableHeader();

	//Create each row of the table
	createMultiples();
	echo "</tbody> </table>";
?>