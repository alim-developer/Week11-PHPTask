<?php 
	
//   Neticesi aşağıdakılar olan funksiya yazın

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/

		

	
		define("br", "<br>");



		function word($a){
			$b = explode("', '", $a);			
			// for($i=0; $i<count($b); $i++){
			// 	echo $b[$i].br;
			// }
			foreach ($b as $key => $value) {
				echo"arg".$key.": ".$value.br;
			}
		}
		word("salam', 'heci', 'necesen");
?>