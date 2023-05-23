<?php
// version 1 : les films "en dur"
function getFilmsEnDur() {
    $lesFilms = [
        [
            "titre" => "une vérité qui dérange--",
            "annee" => 2006,
            "realisateur" => "Davis Guggenheim"
        ],
        [
            "titre" => "Don't look up",
            "annee" => 2021,
            "realisateur" => "Adam McKay"
        ],
        [
            "titre" => "Beasts of the southern wild",
            "annee" => 2012,
            "realisateur" => "Benh Zeitlin"
        ],
        [
            "titre" => "Melencholia",
            "annee" => 2011,
            "realisateur" => "Lars van Triers"
        ],
        [
            "titre" => "Sauve qui peut (la vie)	",
            "annee" => 1980,
            "realisateur" => "Jean-Luc Godard"
        ],
        [
            "titre" => "Nope",
            "annee" => 2022,
            "realisateur" => "Jordan Peele"
        ],
        [
            "titre" => "L'amour à mort",
            "annee" => 1984,
            "realisateur" => "Alain Resnais"
        ]
    ];
    return $lesFilms;
}

// version 2 : fichier JSON;
function getFilmsJSON() {
    $json = file_get_contents("http://bliaudet.free.fr/IMG/json/les_films.json");
    $lesFilms = json_decode($json, true);
    print_r($lesFilms);
    return $lesFilms;
}

// version 2 bis : fichier JSON
function getFilmsJSONLocal() {
    $json = file_get_contents("./tools/json/les_films.json");
    $lesFilms = json_decode($json, true);
    print_r($lesFilms);
    return $lesFilms;
}

// version 3 : MySQL : utilise la bibliothèque mysqli
function getFilms() {
    // 1 : avoir des messages d'erreurs compréhensible
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // 2 : connexion à la BD (la machine du serveur de BD, user de la BD, mot de passe, la BD utilisée )
    $host = "localhost";
    $userBD = "root";
    $passwd = "";
    $database = "DB_movies_anthropocene";
    $mysqli = new mysqli($host, $userBD, $passwd, $database);

    // 3 : faire la requête
    $sql = "
        SELECT * 
        FROM movies 
        ORDER BY annee DESC
    ";
    // SELECT * FROM movies ORDER BY id DESC
    // SELECT * FROM movies WHERE realisateur like  \"%godard%\"
    // SELECT * FROM movies WHERE realisateur like  \"A%\" ORDER BY annee 
    $lesFilms = $mysqli->query($sql);
    
    // 4 : déconnexion de la base
    $mysqli->close();
    
    // debug
    // echo "MySQL<br>";
    // print_r($lesFilms);
    return $lesFilms;
}

// Ajout d'un film dans la BD
function addFilm($movieTitle, $movieYear, $movieReal) {
    echo "addfilms<br>";
    // 1 : avoir des messages d'erreurs compréhensible
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // 2 : connexion à la BD (la machine du serveur de BD, user de la BD, mot de passe, la BD utilisée )
    $host = "localhost";
    $userBD = "root";
    $passwd = "";
    $database = "DB_movies_anthropocene";
    $mysqli = new mysqli($host, $userBD, $passwd, $database);

    // 3 : faire la requête
    $sql = "
        INSERT INTO movies VALUES ( 
            NULL, 
            '$movieTitle',
            $movieYear,
            '$movieReal'
        )
    ";

    $mysqli->query($sql);
    
    // 4 : déconnexion de la base
    $mysqli->close();
}

// Delete d'un film dans la BD
function deleteFilm($id) {
    echo "deletefilms<br>";
    // 1 : avoir des messages d'erreurs compréhensible
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // 2 : connexion à la BD (la machine du serveur de BD, user de la BD, mot de passe, la BD utilisée )
    $host = "localhost";
    $userBD = "root";
    $passwd = "";
    $database = "DB_movies_anthropocene";
    $mysqli = new mysqli($host, $userBD, $passwd, $database);

    // 3 : faire la requête
    $sql = "
        DELETE 
        FROM movies 
        WHERE id = ?
    ";

    // $mysqli->query($sql);
    $stmt = $mysqli->prepare($sql); // stmt : statement
    $stmt->bind_param("i", $id); // "i" pour un integer
    $stmt->execute();

    // 4 : déconnexion de la base
    $mysqli->close();
}
?>
