<?php
include 'Farm.php';
include 'Animal.php';
include 'Cow.php';
include 'Chicken.php';

$farm = new Farm();

for ($i = 0; $i < 10; $i++) {
	$animal = new Cow();
	$farm->addAnimal($animal);
}
for ($i = 0; $i < 20; $i++) {
	$animal = new Chicken();
	$farm->addAnimal($animal);
}

echo 'Кол-во животных на ферме:<br>';
foreach ($farm->getCountAnimals() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

for ($i = 0; $i < 7; $i++) {
	$farm->collectProduction($animal);
}

echo '<br>Кол-во собранной продукции:<br>';
foreach ($farm->getCountProduction() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

for ($i = 0; $i < 5; $i++) {
	$animal = new Chicken();
	$farm->addAnimal($animal);
}
$animal = new Cow();
$farm->addAnimal($animal);

echo '<br>Кол-во животных на ферме:<br>';
foreach ($farm->getCountAnimals() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

for ($i = 0; $i < 7; $i++) {
	$farm->collectProduction($animal);
}
echo '<br>Кол-во собранной продукции:<br>';
foreach ($farm->getCountProduction() as $name => $count) {
	echo $name.': '.$count.'<br>';
}

?>