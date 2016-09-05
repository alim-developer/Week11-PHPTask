<?php 
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
// $x = 5;
// echo $x;
// echo "<br />";
// echo $x++ + $x++;
// echo "<br />";
// echo $x;
// echo "<br />";
// echo $x-- - $x--;
// echo "<br />";
// echo $x;
//bilmirem

//2-ci
// var_dump(0123 == 123);	//soldaki reqem 16 liq say sisteminde yazildigi ucun beraberlik serti odenmir
// var_dump('0123' == 123);  // soldaki string oldugu ucun her ikisinide 123 kimi goturur ve ona gorede beraber olur 
// var_dump('0123' === 123); // tiplerini yoxladigi ucun biri string biri ise integer olur ve false dondurur.


//3-cü
// $x = true and false;
// var_dump($x); // bilmirem 


//4-cü $x-in dəyəri nə olacaq?
 $x = 3 + "15%" + "$25";  
 echo $x;



 ?>