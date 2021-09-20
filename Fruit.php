<?php

class Fruit
{
//proprietés
public $nom;
public $color;
//methodes
function setNom($nom)
{
    $this->nom=$nom;
}
function getNom()
{
    return $this->nom;
}

}


?>