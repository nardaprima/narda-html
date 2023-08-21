<?php

interface geometriinterface
{
    public function getDimensi();
}

interface bangunDatarInterface extends GeometriInterface
{
    public function getluas();
    public function getKeliling();
}
interface BangunRuangInterface extends GeometriInterface
{
    public function getVolume();
    public function getluaspermukan();
}


interface InfoShower
{

    public function showinfo();
}

abstract class geometri  implements geometriinterface, infoshower
{
    public function showinfo();
    {
     echo "dimensi". $this->getDimensi()."<br/>";
    }
}
abstract class bangundatar extends geometri implements bangundatarinterface, infoshower
{
    public function getDimensi(){return 2;}

    public function showinfo()
    {
        parent::showinfo();
        echo "luas". $this->getluas()."<br/>";
        echo "keliling". $this->getkelinling()."<br/>"
    }
}
class persegi extends bangundatar
{
    public $panjang;

    public function getluas()
    {
        return $this->panjang*$this->panjang;
    }

    
        public function getKeliling()
    {

        return 4* $this->panjang;

    }
}

class kubus extends bangunruang
{
    public $panjang;

    public function getvolume()
    {
    return $this->panjang*$this->panjang*$this->panjang;
    }

    public function getluaspermukaan()
    {
    return 6* $this->panjang*$this->panjang;
    }
}
