<?php
class luas
{
    

    public function hitung()
    {
echo "luas dari jajargenjang adalah....";
echo  $a*$t;
}
}

class keliling extends luas
{
    public function hitung()
 {   echo "<br/>keliling jajargenjang adalah....";
     echo 2*($a+$t);
 }
}
$luas= new luas();
$luas->hitung();

$luas= new keliling();
$luas->hitung();

?>

   