<html>
  <head>
	  <title> Exercises PHP variable</title>
  </head>
  <body>
    <?php 
    $name = 'Elena';
    $age = 46;
    $colEyes = 'greens';
    $myFamily = array("Dmitriy", "Elena", "Veronika", "Polina");
    echo '<p>Hi! My name is '. $name.'</p>'; 
    echo '<p> I am '.$age. ' years old</p>';
    echo '<p> My eyes are '.$colEyes. '</p>';
    echo '<p> The first person in my family is  '.$myFamily[0]. '</p>';


    ?>
  </body>
</html>
