<?php 
	 	require "../vendor/autoload.php";

	 	/*
	 	*	Los Ejemplos de arrays multidimensionales dejados aqui son solo para pruebas se 
	 	*	recomienda 	trabajar con el helper de Laravel dd muy buena libreria de debbugin 
	 	*/

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

 	//dd(array_have($usuarios, ['nombre','pais.Nombre']));