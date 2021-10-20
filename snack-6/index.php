<?php
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Snack 6</title>
		<style>
			.container {
				display: flex;
				max-width: 900px;
				margin: 0 auto;
			}
			.box {
				width: 50%;
				padding: 10px;
			}
			.box.gray {
				background-color: lightgray;
			}
			.box.green {
				background-color: lightgreen;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="box gray">
				<ul>
				<?php foreach($db["teachers"] as $teacher) { ?>
					<li><?php echo "{$teacher['name']} {$teacher['lastname']}"; ?></li>
				<?php } ?>
				</ul>
			</div>
			<div class="box green">
				<ul>
				<?php foreach($db["pm"] as $pm) { ?>
					<li><?php echo "{$pm['name']} {$pm['lastname']}"; ?></li>
				<?php } ?>
				</ul>
			</div>
		</div>
	</body>
</html>