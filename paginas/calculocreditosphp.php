<html>
<head>

			<style type="text/css">
					p { line-height: 130%; font-size: 16px; font-family: "Verdana"; padding: 6px; margin: 2px 0; color:#000000;}
			</style>

</head>

<body bgcolor="F4C33E">

		<p><b>Total a pagar: </b>
	    
		<?php 
		$antiguedad=(int)$_POST['antiguedad'];
		$nivel=(int)$_POST['nivel'];
		$creditos=(int)$_POST['creditos'];
		$valorCredito=0;

		if ($nivel==1){
			$valorCredito=70000;
		}else if ($nivel==2){
			$valorCredito=271000;
		}else {
			$valorCredito=419000;
		}
		
		if ($creditos<>0){
			if ($antiguedad==1){
				echo '$ ', number_format($creditos*$valorCredito+98200); 
			} else {
				echo '$ ', number_format($creditos*$valorCredito+8200); 
				}
		}
		?>
		</p>
</body>
</html>
