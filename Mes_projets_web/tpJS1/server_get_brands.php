<?php

/* =========================================================
 * script appelé lors du chargement de la page
 * on fournit la liste des marques disponibles au format XML
 * ========================================================= */

header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" ?>";
echo "<brands>";
echo "<brand>&lt;choix&gt;</brand>";
echo "<brand>Audi</brand>";
echo "<brand>BMW</brand>";
echo "</brands>";
?>