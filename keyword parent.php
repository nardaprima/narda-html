<?php
class manager
{
    public $nama;
    
    public function showinfo()

{
    echo "nama: $this->nama<br/>";
}
}

class supervisor extends manager
{
    public $divisi;

    public function showinfo()
    {
        parent::showinfo();
        echo "divisi: $this->divisi<br/>";
    }
}


$manager = new manager();
$manager->nama = "ujang";
$manager->showinfo();


$supervisor = new supervisor();
$supervisor->nama = "Asep";
$supervisor->divisi = "IT";
$supervisor->showinfo();
