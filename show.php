<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>OPP Magazzino</title>
</head>
<body>
  
  <header>
    <h1 class="display-4 text-center text-success my-3">Info Venditore</h1>
  </header>

  <main>
    <div class="box__article container mt-5">
    <?php
      // Import Venditore
      include_once __DIR__ . '/Venditore.php'
    ?>
    </div>
  </main>

</body>

<!-- Import Jquery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
<!-- Import Js Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- Import My Js -->
<script src='script/main.js'></script>
</html>