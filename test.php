<?php
/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 16/06/16
 * Time: 12:57
 */

$data=fopen ("./comptetion.json","w+");
echo $data;
$filename = "./comptetion.json";
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));
fclose($handle);

?>