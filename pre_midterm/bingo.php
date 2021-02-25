<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>BINGO GAME</h1>
		<?php 
		session_start(); 
		$_session['arr_rand[0][0]'] = null;
		if ($_session['arr_rand[0][0]'] == null) {
			echo "<table border='1'>";
				$arr_rand = array(array());
					for($c = 0;$c<5;$c++){
						echo "<tr>";
						for ($r=0; $r <5 ; $r++) { 
							$arr_rand[$c][$r] = rand(0,99);
							$_session["arr_rand[$c][$r]"] = $arr_rand[$c][$r];
							echo "<td>".$arr_rand[$c][$r] ."</td>";
						}
					echo "</tr>";
						}		
		echo "</table>";
		}
		
		//echo "<button>START GAME</button>";
		for ($t=0; $t < 5; $t++) { 
			

		echo "ค่า arr".$_session["arr_rand[$t][4]"];
		}
				
		?>

		
		
		
	</center>
</body>
</html>