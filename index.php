<?php
namespace App;
require 'vendor/autoload.php';

$farm = new Farm();

for ($i = 0; $i < 10; $i++) {
	$farm->addAnimal(new Cow());
}
for ($i = 0; $i < 20; $i++) {
	$farm->addAnimal(new Chicken());
}

echo 'Кол-во животных на ферме:<br>';
foreach ($farm->getCountAnimals() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

for ($i = 0; $i < 7; $i++) {
	$farm->collectProduction();
}

echo '<br>Кол-во собранной продукции:<br>';
foreach ($farm->getCountProduction() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

for ($i = 0; $i < 5; $i++) {
	$farm->addAnimal(new Chicken());
}
$farm->addAnimal(new Cow());

echo '<br>Кол-во животных на ферме:<br>';
foreach ($farm->getCountAnimals() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

for ($i = 0; $i < 7; $i++) {
	$farm->collectProduction();
}
echo '<br>Кол-во собранной продукции:<br>';
foreach ($farm->getCountProduction() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

?>