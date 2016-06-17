<?php
/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 16/06/16
 * Time: 09:05
 */
include ("comptetion.php");
$data=include ("comptetion.json");

$euro=new comptetion($data);
echo $euro->nom;
echo $euro->comptetion;
?>