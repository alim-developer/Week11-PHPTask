<?php
class Telebe {
 
  public $ad;
  public $soyad;
  public $a;
  public $b;
 
  public function qarsila()
  {
      $this -> a  = "Salam ".$this->ad." ".$this->soyad."! ";
      return $this -> a;
  }
 

  public function qeydiyyataAl ()
  {
      $this -> qarsila();
      $this -> b = $this->a."Sizin müracietiniz qeyde alındı ";
      return $this -> b;
  }
 

  public function melumatlandir()
  {
      $this -> qeydiyyataAl();

      echo $this -> b."ve size email gönderildi.Teşekkürler";
  }
}
 
$telebe01 = new Telebe();
$telebe01 -> ad = "Memmed";
$telebe01 -> soyad = "Hesenov";
 
$telebe01->melumatlandir();
/* 

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */
?>