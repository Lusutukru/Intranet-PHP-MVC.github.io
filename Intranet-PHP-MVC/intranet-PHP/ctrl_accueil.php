<?php
// ------------------------------------------------------------
// M:  modèle : chargez des outils pour le controleur
include("./modele/modele_constantes/debug.php");
include("./modele/modele_constantes/constantes.php");
include("./modele/modele_SQL/table_films.php");

// ------------------------------------------------------------
// C:  controleur : chargez des données pour la vue
$copyright = getCopyright(); 
$lesFilms = getFilms();      

// ------------------------------------------------------------
// V:  Vue : chargez le HTML
include_once("./views/view_accueil.php");