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
      <article id="art1">
         <h2>Anthropocene : </h2>
         <p>
            <img src="./views/public/img/atlas.png" alt="pas d'image" width="120">
            <span class="Crutzen">Paul Crutzen : </span> Lorem140 ipsum dolor sit amet consectetur adipisicing elit.  soluta, amet et dolorum itaque consequuntur sed, quo tempore quae cumque sapiente quaerat culpa temporibus laudantium unde sequi, dolore vero magni minima at. Ad necessitatibus nulla iusto numquam exercitationem nihil, quam incidunt tenetur repudiandae tempore itaque sapiente magni, accusamus voluptates voluptatibus, cumque molestiae quisquam ea explicabo temporibus eaque adipisci provident commodi blanditiis! Deleniti labore ipsum ab minima doloremque ea cupiditate exercitationem eligendi? Provident cupiditate impedit molestiae excepturi perspiciatis assumenda, facere reprehenderit, dolorum consequuntur ducimus sunt a repellat mollitia asperiores rem? Obcaecati odio beatae sunt officiis magni eaque a quasi quae libero voluptatum aliquam repudiandae quaerat tempora itaque, modi nam harum. Obcaecati voluptatum cumque nisi, atque expedita quisquam error optio nulla repellat accusantium voluptates quibusdam maiores cum minima laboriosam assumenda reiciendis ipsa quidem tempora itaque. Est quos at placeat animi impedit eligendi facere.
         </p>
      </article>
      <div>
         <article id="art2">
            <h2>Une émission : </h2>
            <iframe height="200" src="https://www.youtube.com/embed/p5VEy2IjDMs"></iframe>
         </article>
         <article id="art3">
            <h2>Quelques films :</h2>
            <table border>
               <tr>
                  <th>Titre</th>
                  <th>Année</th>
                  <th>Réalisateur</th>
               </tr>
               <?php foreach ($lesFilms as $film) { ?>
                  <tr>
                        <td><?php echo $film["titre"] ?></td>
                        <td><?php echo $film["annee"] ?></td>
                        <td><?php echo $film["realisateur"] ?></td>
                  </tr>
               <?php } ?> 
               <?php /*  
               <?php for ($i = 0; $i < count($lesFilms); $i++) { ?>
                  <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $lesFilms[$i]["titre"] ?></td>
                        <td><?php echo $lesFilms[$i]["annee"] ?></td>
                        <td><?php echo $lesFilms[$i]["realisateur"] ?></td>
                  </tr>
               <?php } ?>
               */ ?>
            </table>
         </article>
      </div>
   </main>

   <?php include("./views/include/footer.php"); ?>

</body>

</html>