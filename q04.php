<?php 
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.
class Workers {
	public $name;
	public $surname;
	public $position;
	public $birthDate;
	public function addWorker(){

		echo "<td>$this->name</td><td>$this->surname</td><td>$this->position</td><td>$this->birthDate</td>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		p{
			color: red;
			display: inline-block;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<td>Ad</td>
		<td>Soyad</td>
		<td>Status</td>
		<td>Dogum tarixi</td>
	</tr>
	
	<tr>
		
		<?php
			$work1 = new Workers();
			$work1->name = "Alim";
			$work1->surname = "Babazadə";
			$work1->position = "Deleloper";

			$a = strtotime("9 November 1995");
			$b = time("now");
			if(date("j", $a) == date("j",$b)){ ?>
				<p><?=$work1->birthDate = date("F j, Y", $a);?></p>
			<?php
			}else{
				$work1->birthDate = date("F j, Y", $a);
			}
			

			$work2 = new Workers();
			$work2->name = "Vuqar";
			$work2->surname = "Namazli";
			$work2->position = "Deleloper";

			$c = strtotime("16 March 1990");
			$g = time("now");
			if(date("j", $c) == date("j",$g)){ ?>
				<p><?=$work2->birthDate = date("F j, Y", $c);?></p>
			<?php
			}else{
				$work2->birthDate = date("F j, Y", $a);
			}
			$work2->birthDate = date("F j, Y", $c);

			$worker = [$work1, $work2];
		
		
		for ($i=0; $i<count($worker); $i++){
		?>
		<tr>
		<?php
			$worker[$i]->addWorker();

		?>
		</tr>
		<?php
		}
		?>
	</tr>
</table>
</body>
</html>