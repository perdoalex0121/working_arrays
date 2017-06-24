<?php 
	 	require "../vendor/autoload.php";

	 	$usuarios = [
	 		"nombre" => 'Edgar',
	 		'Temas' => [
	 			['Titulo' => 'Primer Tema'],
	 			['Titulo' => 'Segundo Tema'],
	 			['Titulo' => 'Tercero Tema'],
	 			['Titulo' => 'Cuarto Tema'],
	 			['Titulo' => 'Quinto Tema']
	 		],
	 		'pais' => [
	 			'Nombre' => 'Venezuela',
	 			'Bandera' => [
	 				'url' => 'ruta.png',
	 				'Tamaño' => 40
	 			]
	 		]
	 	];

	 	/*$usuarios = [
	 		['nombre' => 'Edgar', 'score' => 10],
	 		['nombre' => 'Manuel', 'score' => 20],
	 		['nombre' => 'Carlos', 'score' => 30],
	 		['nombre' => 'Juan', 'score' => 40],
	 		['nombre' => 'Duilio', 'score' => 50],
	 	];*/

 	dd(array_have($usuarios, ['nombre','pais.Nombre']));