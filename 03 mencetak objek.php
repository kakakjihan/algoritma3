<?php
class minuman {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$susu = new minuman("susu", "putih");
$teh = new minuman("teh", "coklat");
print_r($susu);
print "<p>";
print_r($teh);

print_r("<P><strong>by :jihann syafitri");

?>