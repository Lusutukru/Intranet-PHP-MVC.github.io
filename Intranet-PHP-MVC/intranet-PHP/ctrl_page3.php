<?php
// ------------------------------------------------------------
// M:  modèle : chargez des outils pour le controleur
include("./modele/modele_constantes/debug.php");
include("./modele/modele_constantes/constantes.php");

// ------------------------------------------------------------
// C:  controleur : chargez des données pour la vue
$copyright = getCopyright();    

// ------------------------------------------------------------
// V:  Vue : chargez le HTML
include_once("./views/view_page3.php");