<?php
$jourSemaine = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
$moisAnnee = array('janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre',
'novembre', 'décembre');
$jourMois = date('d');//jour du mois sur 2 chiffres
$jour = date('N'); //jour de la semaine(1 à 7)
//$jourSemaine[$jour-1];//on fait un -1 car tableau démarre à 0
//$moisAnnee[$mois-1];
$mois = date('n');//mois de l'année(1 à 12)
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Exercice 10 PHP</title>
</head>
<body>
	<h1>Afficher la date du jour.</h1>
	<p>récupération de la date avec la fonction date("l,d,F,Y") et les paramètres
	jour de la semaine, jour du mois, mois, et année</p>
	<p>résultat : <?= date('l d F Y')?></p>
	<p> problème, elle s' affiche en anglais</p>
	<p>donc on créé un tableau avec les jours de la semaine, puis un second avec les mois de l'année <br>
	puis en fonction du jour de la semaine et du mois de l'année(en chiffre), on récupère les informations<br>
	dans les tableaux, et on affiche correctement le résultat.</p>
	<h2>aujourd' hui, nous sommes le : <?= $jourSemaine[$jour-1]. ' '. $jourMois. ' '. $moisAnnee[$mois-1]. ' '. date('Y')?></h2>
</body>
</html>
