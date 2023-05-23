<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>BTS-blanc</title>
   <link rel="stylesheet" href="./views/public/css/style.css">
</head>

<body>
   <?php include_once("./views/include/header.php") ?>
   <?php include_once("./views/include/nav.php") ?>

   <main>
      <h2>films</h2>
      <table border>
         <tr>
            <th>Titre</th>
            <th>Année</th>
            <th>Réalisateur</th>
            <th>Delete</th>
         </tr>
         <?php foreach ($lesFilms as $film) { ?>
            <tr>
               <td><?php echo $film["titre"] ?></td>
               <td><?php echo $film["annee"] ?></td>
               <td><?php echo $film["realisateur"] ?></td>
               <td><a href="./ctrl_films.php?delFilmCtrlFilms=&id=<?php echo $film["id"] ?>">del</a></td>
            </tr>
         <?php } ?>
      </table>

      <h3>Saisie :</h3>
      <form action="./ctrl_films.php" method="POST">
         <label for="movieTitle">Titre+</label>
         <input type=text name=movieTitle id="movieTitle">

         <label for="movieYear">Année: </label>
         <input type=number name=movieYear id="movieYear">

         <label for="movieReal">Réalisateur: </label>
         <input type=text name=movieReal id="movieReal">

         <button type="submit" name="addFilmCtrlFilms">Ajouter</button>
      </form>
   </main>

   <?php include_once("./views/include/footer.php") ?>
</body>

</html>