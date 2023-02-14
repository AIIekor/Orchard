<?php

require_once 'src/bd.php';
require_once 'src/Orchard.php';
require_once 'src/Trees/FruitTree.php';
require_once 'src/Trees/AppleTree.php';
require_once 'src/Trees/PearTree.php';
require_once 'src/Fruits/Fruits.php';
require_once 'src/Fruits/Apple.php';
require_once 'src/Fruits/Pear.php';

$orchard = new Orchard();

for($i = 0; $i < 10; $i++)
{
    $orchard->plant(new AppleTree());
    $sql = "INSERT INTO Trees SET Apple_tree = 'Яблоня'";
    $result = mysqli_query($mysqli, $sql); 
}
    

for($i = 0; $i < 15; $i++)
{
    $orchard->plant(new PearTree());
    $sql = "INSERT INTO Trees (Pear_tree) VALUES ('Груша')";
    $result = mysqli_query($mysqli, $sql); 
}


$harvest = $orchard->harvest();

echo 'Яблок собрано: ' . count($harvest['AppleTree']) . '; Общий вес: ' . $harvest['AppleTree']['weight'] .' г.'.PHP_EOL;
echo 'Груш собрано: ' . count($harvest['PearTree']) . '; Общий вес: ' . $harvest['PearTree']['weight'] .' г.'.PHP_EOL;