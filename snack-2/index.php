<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
// http://localhost/php-snacks-b1/snack-2/?name=Samuele&mail=samuele.madrigali@gmail.com&age=30

if( empty($_GET["name"]) || empty($_GET['mail']) || empty($_GET['age']) ) {
	echo "Attento! controlla i parametri in GET che stai passando!";
	die;
}

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];


// if( strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age) ) {
// 	echo "Accesso riuscito!";
// } else {
// 	echo "Accesso negato!";
// }

if ( strlen($name) < 4 ) {
	echo "Accesso negato! lunghezza minima del nome deve essere di 4 caratteri";
} elseif( strpos($mail, '.') == false || strpos($mail, '@') == false ) {
	echo "Accesso negato! email formattata male";
} elseif(!is_numeric($age)) {
	echo "Accesso negato! l'eta deve essere un numero";
} else {
	echo "Accesso riuscito";
}
