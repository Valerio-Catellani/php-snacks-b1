<?php
$partite = [
  [
    'squadraCasa' => 'Olimpia Milano',
    'squadraOspite' => 'Cantù',
    'puntiCasa' => 55,
    'puntiOspite' => 60,
  ],
  [
    'squadraCasa' => 'Estra Pistoia',
    'squadraOspite' => 'Happy Casa Brindisi',
    'puntiCasa' => 30,
    'puntiOspite' => 45,
  ],
  [
    'squadraCasa' => 'Dolomiti Energia Trentino',
    'squadraOspite' => 'Unahotels Reggio Emilia',
    'puntiCasa' => 45,
    'puntiOspite' => 50,
  ],
]
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
  <title>Snack1</title>
</head>

<body class="bg-dark p-5">

  <!-- <form action="snack1.php" method="get">
    <input type="password" name="password" id="name">
    <button type="submit">Invia</button>
    <button type="reset">Annulla</button>
  </form> -->
  <div class='bg-dark-subtle text-center container border rounded-4  border-warning border-3'>
    <h1>
      Snack1
    </h1>
    <?php foreach ($partite as $partita) { ?>
      <p class="fw-bold bg-primary-subtle"><?php echo $partita['squadraCasa']; ?> vs <?php echo $partita['squadraOspite']; ?> | <?php echo $partita['puntiCasa']; ?> - <?php echo $partita['puntiOspite']; ?></p>
    <?php } ?>
  </div>



  <script src="resources/js/hypeUtility.js" type="text/javascript"></script>
</body>

<style>
</style>

<script>
</script>

</html>