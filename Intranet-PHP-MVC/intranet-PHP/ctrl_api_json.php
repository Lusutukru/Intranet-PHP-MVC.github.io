<?php
// ------------------------------------------------------------
// M:  modèle : chargez des outils pour le controleur
include("./modele/modele_constantes/debug.php");
include("./modele/modele_constantes/constantes.php");
include("./modele/modele_SQL/table_films.php");

// ------------------------------------------------------------
// C: controleur : chargez des données pour la vue
$copyright = getCopyright();

$films = getFilms();
// print_r($films);

$films_php = []; // on crée un tableau vide
foreach ($films as $film) {
   //print_r($film);
   $films_php[] = $film; // on remplit le tableau avec chaque film
}
//print_r($films_php);

$films_json = json_encode($films_php);

// ------------------------------------------------------------
// V:  Vue : chargez le HTML
include_once("./views/view_api_json.php");
