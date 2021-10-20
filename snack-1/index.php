<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$partite = [ // Array di primo livello
	[ // Array di secondo livello
		"squadraCasa" => "Olimpia Milano",
		"squadraOspite" => "Cantù",
		"squadraCasaPunti" => 55,
		"squadraOspitePunti" => 60
	],
	[
		"squadraCasa" => "Armani Milano",
		"squadraOspite" => "Virtus Bologna",
		"squadraCasaPunti" => 70,
		"squadraOspitePunti" => 65
	],
	[
		"squadraCasa" => "Fortitudo Bologna",
		"squadraOspite" => "Pallacanestro Varese",
		"squadraCasaPunti" => 95,
		"squadraOspitePunti" => 74
	]
];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Php snack 1</title>
	</head>
	<body>
		<h1>Le partite di oggi</h1>
		<ul>
			<!-- <li>Olimpia Milano - Cantù | 55-60</li> -->
			<?php for( $i = 0; $i < count($partite); $i++ ) { ?>
			
				<li><?php echo "{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['squadraCasaPunti']}-{$partite[$i]['squadraOspitePunti']}"; ?></li>

			<?php } ?>
			<hr>
			<?php 
				for( $i = 0; $i < count($partite); $i++ ) { 
					echo "<li>{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['squadraCasaPunti']}-{$partite[$i]['squadraOspitePunti']}</li>";
				}
			?>
		</ul>
	</body>
</html>