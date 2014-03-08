<!DOCTYPE html>
<html>
	<head>
		<title>Practica PHP</title>
	  <style>
		
		 .par{ background-color:#495AF0;}
      	 .impar{ background-color:#5A5A5B;}
		
	  </style>

	</head>
	<body>
		<table border="1" cellspacing="0" cellpadding="8">
			<?php
			$contador=1;
				for($fila = 1; $fila <=10; $fila++)
				{
					echo "<tr class= ".($fila%2 != 0 ? "par" : "impar")."  >";
					for($celda = 1; $celda <=10; $celda++)
					{
						echo "<td>".($contador++)."</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>