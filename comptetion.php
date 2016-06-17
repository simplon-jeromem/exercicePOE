<?php

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 16/06/16
 * Time: 08:56
 */
class comptetion
{
    public $comptetion;
    public $nom;
    public function __construct($data)
    {
        $json=json_encode($data,true);
        $tableau=json_decode($json);
        $this->nom=$json;
        $this->comptetion=$json->{'name'};
    }

}