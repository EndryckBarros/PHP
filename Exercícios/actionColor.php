<?php 
$cor = $_GET['color'];

	switch ($cor) {
		case 'blue':
			echo '<body style="background-color:powderblue;"></body>';
			break;

		case 'red':
			echo '<body style="background-color:FireBrick;"></body>';
			break;

		case 'green':
			echo '<body style="background-color:SpringGreen;"></body>';
			break;

		case 'orange':
			echo '<body style="background-color:DarkOrange;"></body>';
			break;

		case 'pink':
			echo '<body style="background-color:Orchid;"></body>';
			break;
		
		default:
			echo '<body style="background-color:Black;"></body>';
			break;
	}

 ?>