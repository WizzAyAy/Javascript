<?php
/* =========================================================
 * script appelé lors de la modification du sélecteur
 * de marque de voiture
 * on fournit la liste des modèles disponibles au format XML
 * ========================================================= */

// récupération de la marque de voiture, celle-ci
// est passée en paramètre GET

$brand="";
if (isset($_GET['brand'])) $brand=trim($_GET['brand']);

// en fonction de la marque on définit la liste des modèles

if ($brand=="Audi") {
  $models="A3,A4,A5,A6,A8";
 } else if ($brand=="BMW") {
  $models="Serie 1,Serie 3,Serie 5,Serie 7";
 } else {
  $models="inconnu";
 }

$tab=explode(",",$models);

header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" ?>";
echo "<models>";
echo "<model>&lt;choix&gt;</model>";
foreach($tab as $model) {
  echo "<model>$model</model>";
}
echo "</models>";
?>

