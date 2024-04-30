<?php
/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
$prashe = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio repudiandae quod placeat provident dolores blanditiis vitae consequatur accusantium totam quasi laborum, soluta in enim sint deleniti dolor minus eius et, nisi nostrum reprehenderit doloremque dolore! Maiores, fuga mollitia assumenda rem minima corrupti provident sapiente labore ratione repellendus dolores consequuntur a reprehenderit, beatae libero cupiditate quam sed fugiat. Deleniti repellat ratione illo voluptates tempore inventore illum voluptatibus. Rem vitae corporis perferendis possimus cumque quaerat inventore. Et tempore illo accusamus voluptates, assumenda minima reiciendis quae amet reprehenderit laborum nihil voluptatem aut veniam vel, placeat eum dolore nisi! Nemo sint non ipsa ea, iusto maxime voluptatibus voluptate unde rem aspernatur rerum eius consequatur earum quae provident est dolorem cum repellendus a beatae adipisci sit? Totam ea ad odit asperiores sapiente sed excepturi eos! Dolor explicabo commodi sequi, sed ad illo inventore cumque itaque nobis alias expedita! Mollitia ea suscipit molestiae tempore aperiam similique cupiditate facilis quae vel! Odit nostrum corporis quia, exercitationem commodi dicta dolores aliquam? Modi placeat eos ea? Itaque aliquam perspiciatis perferendis autem? Ipsa sequi debitis soluta ad accusantium aspernatur mollitia distinctio aut. Molestiae, dolores consectetur voluptas autem veniam fuga architecto! Numquam, doloribus nesciunt voluptates cumque non ipsa quasi inventore aliquid.';

function formatParagraphs($text)
{
  $array = explode('.', $text);
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
  <title>Snack5</title>
</head>

<body class="bg-dark p-5 text-white">
  <div class=' container border rounded-4 border-warning border-3 text-dark bg-dark-subtle p-3'>
    <h1 class="mb-4 text-center">Snack5</h1>
    <div class="border border-black p-2 rounded-3 shadow bg-warning-subtle">
      <h4 class="text-center">Testo Originale</h4>
      <?php echo $prashe ?>
    </div>
    <div class="border border-black p-2 rounded-3 mt-3 shadow bg-success-subtle ">
      <h4 class="text-center">Testo Formattato</h4>
      <?php foreach (formatParagraphs($prashe) as $paragrafo => $value) {
        echo '<p>' . $value . '</p>';
      }  ?>
    </div>
  </div>


  <script src="resources/js/hypeUtility.js" type="text/javascript"></script>
</body>

<style>
</style>

<script>
</script>

</html>