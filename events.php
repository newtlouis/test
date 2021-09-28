
<?php

	require_once('fonctions.php');

	//Récupération d'une ressource MySQL
	$link = getDBLink();

	//Fonction requêtant sur la base et retournant un tableau de résultat qui peut être vide
	function getFiches($link, $filtre = "", $mois = false)
	{
		//Si filtre est vide, aucun filtrage n'est appliqué
		$query = "SELECT * FROM fiches WHERE name LIKE '%$filtre%'";

		if ($mois !== false) {
			$query .= "AND DATE_FORMAT(start_date, '%Y%m') = '" . $mois->format("Ym") . "'";
		}

		$res = array();
		$queryRes = lancer_requete($query, $link);
		if ($queryRes === false) {
			return $res;
		}

		while ($row = mysqli_fetch_object($queryRes)) {
			$res[] = $row;
		}

		return $res;
	}

	// Recherche
	$terme = (isset($_GET['terme']) && !empty($_GET['terme'])) ? $_GET['terme'] : false;
	$mois = (isset($_GET['mois']) && !empty($_GET['mois'])) ? $_GET['mois'] : date_create()->format('m');
	$annee = (isset($_GET['annee']) && !empty($_GET['annee'])) ? $_GET['annee'] :2014 ;

	$fiches = array();
	$date = new DateTime();
	$date->setDate(intval($annee), intval($mois), 1);

	while (empty($fiches)) {
		$fiches = getFiches($link, $terme, $date);
		if (empty($fiches)) {
			$date->modify("+1 month");
		}
	}

	closelink($link);

	$mois = $date->format('m');
	$annee = $date->format('Y');
?>
<html>
<head>
	<title>Test de Recrutement 2013</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
</head>
<body>
<form method="GET" action="events.php">
	<input name="terme" type="text" placeholder="Rechercher" value="<?php echo $terme ? $terme : "" ?>"/>
	<label for="mois">Mois</label>
	<select name="mois" id="mois">
		<?php for($i = 1; $i <= 12; $i++): ?>
		<option value="<?php echo $i?>" <?php if( $i == $mois ) echo "selected=selected"?>><?php echo $i?></option>
		<?php endfor; ?>
	</select>

	<label for="annee">Année</label>
	<select name="annee" id="annee">
		<?php for($i = 2009; $i <= 2015; $i++): ?>
		<option value="<?php echo $i?>" <?php if( $i == $annee ) echo "selected=selected"?>><?php echo $i?></option>
		<?php endfor; ?>
	</select>
	<input type="submit" value="Ok"/>
</form>


<p>Nombre de résultats : <?php echo count($fiches) ?></p>
<p>Résultats : </p>
<ul>
	<?php foreach ($fiches as $obj): ?>
	<li>
		<span><?php echo $obj->name ?> : </span>
		<span>Du <?php echo date_create($obj->start_date)->format("d/m/Y");?> au <?php echo date_create($obj->end_date)->format("d/m/Y");?></span>
		<p><?php echo $obj->description ?></p>
	</li>
	<?php endforeach;?>
</ul>
</body>
</html>
