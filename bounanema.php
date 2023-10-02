<?php 

declare (strict_types=1);
//cree une fonction qui calcule l surface dun pont
class pont
{
    public $longeur;
    public  $largeur;

    public function calculSurface (){
        return $this->longeur * $this->largeur;
    }
}
$pont1 = new pont;
$pont1->longeur=150;
$pont1->largeur=50;

$pont2 = new pont;
$pont2->longeur=70;
$pont2->largeur=10;

?>