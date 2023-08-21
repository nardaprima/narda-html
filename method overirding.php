<?php
class user
{
    public $nama;

    public function showsalam()
    {
echo "salam... nama saya $this->nama.saya adalah user<br/>";
}
}

class member extends user
{
    public function showsalam()
    {
        echo "salam.... nama saya $this->nama. saya adalah member<br/>";
    }
}

$user = new user();
$user->nama ="ujang";
$user->showsalam();

$user = new member();
$user->nama = "asep";
$user->showsalam();