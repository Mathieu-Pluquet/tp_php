<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if ($_POST['mdp']=="kangourou" and isset($_POST['mdp'])){
      echo 'oui!';
    }
      else {
        echo 'non!';
    };
     ?>

  </body>
</html>
