<?php

$students = [
	'Mathis ZN',
	'Marko',
	'Quentin',
	'Jeff',
	'Mathis R',
	'Hamza',
	'Noa',
	'Matteo',
	'Diego',
	'Eduardo',
	'Ben Y',
	'Noe',
	'Khaled',
	'Celian',
	'Valdo',
	'Coralie'
];

$groupes = [
	0 => [],
	1 => [],
	2 => [],
	3 => []
];

while(count($students) > 0) {
	$groupe = random_int(0, 3);
	while (count($groupes[$groupe]) === 4) {
		$groupe = random_int(0, 3);
	}
	shuffle($students);
	$stu = array_pop($students);
	$groupes[$groupe][] = $stu;
}

$json = json_encode($groupes, JSON_PRETTY_PRINT);
file_put_contents('groupes.json', $json);