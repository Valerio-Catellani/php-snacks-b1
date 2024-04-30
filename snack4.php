<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
function random($min, $max, $elements)
{
  $array = [];
  while (count($array) < $elements) {
    $random = rand($min, $max);
    if (!in_array($random, $array)) {
      $array[] = $random;
    }
  }
  return $array;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- Link a Font Awesome-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--Link bootstrap-->
  <link rel="stylesheet" href="resources/css/style.css">
  <link rel="stylesheet" href="resources/css/animation.css">
  <link rel="stylesheet" href="resources/css/media-query.css">
  <script src="resources/js/script.js" type="text/javascript" defer></script>
  <title>Snack4</title>
</head>

<body class="bg-dark p-5 text-white">
  <div class='text-center container border rounded-4 border-warning border-3 text-dark bg-dark-subtle '>
    <h1 class="mb-4">Snack4</h1>
    <h3><?php echo '[' . implode(', ', random(1, 100, 15)) . ']'  ?></h3>
  </div>


  <script src="resources/js/hypeUtility.js" type="text/javascript"></script>
</body>

<style>
</style>

<script>
</script>

</html>