<?php
/*
 Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/
$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];

function getElement($db, $search)
{
  foreach ($db as $element => $elementValue) {
    if ($element === $search) {
      $response = '';
      foreach ($elementValue as $array) {
        $response .= '<p>' . $array['name'] . ' ' . $array['lastname'] . '</p>';
      }
      return $response;
    }
  }
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
  <title>Snack6</title>
</head>

<body class="bg-dark p-5 text-white">
  <div class=' container border rounded-4 border-warning border-3 text-dark bg-primary-subtle p-3'>
    <h1 class="mb-4 text-center">Snack6</h1>
    <div class="border border-black p-2 rounded-3 shadow bg-dark-subtle">
      <h4 class="text-center">Insegnanti</h4>
      <?php echo getElement($db, 'teachers'); ?>
    </div>
    <div class="border border-black p-2 rounded-3 mt-3 shadow bg-success-subtle ">
      <h4 class="text-center">PM</h4>
      <?php echo getElement($db, 'pm'); ?>
    </div>
  </div>


  <script src="resources/js/hypeUtility.js" type="text/javascript"></script>
</body>

<style>
</style>

<script>
</script>

</html>