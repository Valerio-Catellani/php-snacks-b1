<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
$classe = [
  [
    'nome' => 'Mario',
    'cognome' => 'Rossi',
    'voti' => [8, 7, 6, 9, 8]
  ],
  [
    'nome' => 'Anna',
    'cognome' => 'Verdi',
    'voti' => [7, 6, 8, 7, 8]
  ],
  [
    'nome' => 'Luigi',
    'cognome' => 'Bianchi',
    'voti' => [9, 9, 8, 10, 7]
  ]
];

function media($array)
{
  $sum = 0;
  foreach ($array as $element) {
    $sum += $element;
  }
  return $sum / count($array);
};

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
  <title>Snack7</title>
</head>

<body class="bg-dark p-5 text-white">
  <div class=' container border rounded-4 border-warning border-3 text-dark bg-primary-subtle p-3'>
    <h1 class="mb-4 text-center">Snack7</h1>
    <?php
    foreach ($classe as $studente => $value) {
      echo '<div  class="border border-black p-2 rounded-3 shadow bg-dark-subtle my-3">' .
        '<h3 class="text-center">' . $value['nome'] . ' ' . $value['cognome'] . '</h3>' .
        '<h4> Elenco voti: ' . implode(', ', $value['voti']) . '</h4>' .
        '<h2> Media: ' . media($value['voti']) . '</h2>' .
        '</div>';
    }
    ?>



    <script src="resources/js/hypeUtility.js" type="text/javascript"></script>
</body>

<style>
</style>

<script>
</script>

</html>