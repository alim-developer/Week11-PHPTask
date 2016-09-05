<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="POST">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type="radio" name="topla" value="topla">
	<span>-</span><input type="radio" name="cix" value="cix">
	<span>*</span><input type="radio" name="vur" value="vur">
	<span>/</span><input type="radio" name="bol" value="bol">
	<input type="submit" name="submit" value="Hesabla">
	<p>Netice:</p>


	<?php
		if(isset($_POST['submit'])){
			$num01 = $_POST['num01'];
			$num02 = $_POST['num02'];
			if(isset($_POST['topla']) == false && isset($_POST['cix']) == false  && isset($_POST['vur']) == false  & isset($_POST['bol']) == false ){
				echo "Bir ifade sec";
			}else{

				if(isset($_POST['topla'])){
					$toplam = '+';
				}
				if(isset($_POST['cix'])){
					$toplam = '-';
				}
				if(isset($_POST['vur'])){
					$toplam = '*';
				}
				if(isset($_POST['bol'])){
					$toplam = '/';
				}

				switch ($toplam) {
					case "+":
						$netice = $num01 + $num02;
						echo $netice;
						break;
					case "-":
						$netice = $num01 - $num02;
						echo $netice;
						break;
					case "*":
						$netice = $num01 * $num02;
						echo $netice;
						break;
					case "/":
						if($num01 == 0){
							echo "Menfi eded yazma";
						}else{
							$netice = $num01 / $num02;
							echo $netice;
						}
						break;
					
					default:
						# code...
						break;
				}
			}

		}

	?>
</form>
</body>
</html>

<?php 
// forması yuxarıda verilen besit hesablama masını yazın 
	
?>