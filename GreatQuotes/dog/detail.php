<?php

$dogs=[
	[
		'name'=>'Taco',
		'weight'=>24,
		'gender'=>'male',
		'pictures'=>[
			'taco_01.jpg',
			'taco_02.jpg',
		]
	],
	[
		'name'=>'puma',
		'weight'=>44,
		'gender'=>'male'
	],
	[
		'name'=>'spot',
		'weight'=>44,
		'gender'=>'male'
	],
];

?>
<h1><?= $dogs[$_GET['index']]['name'] ?></h1>
<p><?= $dogs[$_GET['index']]['gender'] ?></p>