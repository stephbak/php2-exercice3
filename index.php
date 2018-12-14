<?php
$age = 19;
$gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie2</title>
</head>
<body>
  <p>
    <?php
    if($gender == 'Homme' && $age >= 18){
      echo 'Vous êtes un homme et vous êtes majeur.';
    }elseif($gender == 'Homme' && $age < 18){
      echo 'Vous êtes un homme et vous êtes mineur.';
    }elseif($gender == 'Femme' && $age >= 18){
      echo 'Vous êtes une femme et vous êtes majeure.';
    }else{
      echo 'Vous êtes une femme et vous êtes mineure.';
    }
    ?>
  </p>
</body>
</html>
