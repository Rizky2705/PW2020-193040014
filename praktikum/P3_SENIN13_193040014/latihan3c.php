<?php 

	function tumpukanBola($tumpukan){
			for ($i= $tumpukan; $i >= 1 ; $i--) { 
			for ($j=1; $j <= $i; $j++) { 
			echo "*";
		}
			echo "<div class='clear'></div>";
		}

	}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 3C</title>
	<style>
		
		.clear {
			clear: both;
		}
	</style>

</head>
<body>
	


	<?php tumpukanBola(7) ?>

</body>
</html>