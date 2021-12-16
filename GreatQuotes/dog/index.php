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
for($i=0;$i<count($dogs);$i++){
	?>
	<h1><?= $dogs[$i]['name'] ?></h1>
	<p><?= $dogs[$i]['gender'] ?></p>
	<a href="detail.php?index=<?= $i ?>">See dog</a>
	<?php
}