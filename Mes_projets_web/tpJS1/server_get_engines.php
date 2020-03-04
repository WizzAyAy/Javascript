<?php
/* =========================================================
 * script appelé lors de la modification du s̩lecteur
 * de modèle de voiture
 * on fournit la liste des moteurs disponibles au format XML
 * ========================================================= */

// récupération de la marque de voiture, celle-ci
// est passée en paramètre GET

$brand="";
if (isset($_GET['brand'])) $brand=trim($_GET['brand']);

// récupération du modèle de voiture, celui-ci
// est passé en paramètre GET

$model="";
if (isset($_GET['model'])) $model=trim($_GET['model']);

// en fonction de la marque et du modèle on définit la liste des
// moteurs

if ($brand=="Audi") {
  switch($model) {
  case "A3": $eng="80,110,130"; break;
  case "A4": $eng="110,130,170"; break;
  case "A5": $eng="80,110,130,170,210"; break;
  case "A6":  $eng="130,170,210"; break;
  case "A8":  $eng="170,210"; break;
  }
 } else if ($brand=="BMW") {
  switch($model) {
  case "Serie 1": $eng="80,110"; break;
  case "Serie 3": $eng="110,130"; break;
  case "Serie 5": $eng="130,150"; break;
  case "Serie 7": $eng="150,170"; break;
  }
 } else {
  $eng="inconnu";
 }

$tab=explode(",",$eng);
header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" ?>";
echo "<engines>";
echo "<engine>&lt;choix&gt;</engine>";
foreach($tab as $engine) {
  echo "<engine>$engine</engine>";
}
echo "</engines>";

?>
