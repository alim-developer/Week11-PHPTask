<?php 
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//
	
	class tam{
		function element($element){
			$aray = array($element);
			sort($aray);
			foreach ($aray as  $value) {
				echo $value;
			}
		}

	}

	$tam = new tam;
	$tam -> element('"zaa", "va"');  //alinmadi

 ?>