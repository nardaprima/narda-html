<?php

abstract class bangundatar
{
    public abstract function getluas();
    public abstract function getkeliling();
    public function showinfo()
{
    
        echo "luas". $this->getluas(). "<br/>";
        echo "keliling". $this->getkeliling(). "<br/>";
}
}    
class jajargenjang extends bangundatar
{
    public $alas;
    public $tinggi;


    public function getluas()
    {

    return $this->alas*$this->tinggi;
    }
    public function getkeliling()
    {

    return 2* ($this->alas+$this->tinggi);
    }
}


$jajargenjang= new jajargenjang();
$jajargenjang->alas= 4;
$jajargenjang->tinggi=5;
$jajargenjang->showinfo();

