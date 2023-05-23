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
      <h2>API json</h2>
      <?php echo $films_json ?>
    </main>

   <?php include_once("./views/include/footer.php") ?>
</body>

</html>