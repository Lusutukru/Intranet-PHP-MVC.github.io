<?php
// ------------------------------------------------------------
// M:  modèle : chargez des outils pour le controleur
include("./modele/modele_constantes/debug.php");
include("./modele/modele_constantes/constantes.php");
include("./modele/modele_SQL/table_films.php");

// ------------------------------------------------------------
// C-GET-POST:  traiter les GET et les POST
if (isset($_GET["delFilmCtrlFilms"])) {
    $id = $_GET["id"];
    deleteFilm($id);
}

if (isset($_POST["addFilmCtrlFilms"])) {
    $movieTitle = $_POST["movieTitle"];
    $movieYear = $_POST["movieYear"];
    $movieReal = $_POST["movieReal"];
    addFilm($movieTitle, $movieYear, $movieReal);
}

// C: controleur : chargez des données pour la vue
$copyright = getCopyright();
$lesFilms = getFilms();

// ------------------------------------------------------------
// V:  Vue : chargez le HTML
include_once("./views/view_films.php");
