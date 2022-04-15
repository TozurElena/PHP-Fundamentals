<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <h1>PHP Functions</h1>
  <h2>Transform a string</h2>
  <?php
    $str = 'This is going to be shuffled !';
    $strNew = explode(' ',$str);
    foreach($strNew as $mots) {
      echo str_shuffle($mots).' ';
    }
    
    $name = 'emolie';
    echo "<br>Capitalizes the first letter: ".ucfirst($name);
    echo "<br>The current year: ".date('Y');
    echo "<br>The current date: ".date('d M Y h:i:s A');
    echo "<br>Summe";
    function sum($num1, $num2) {
      if (is_numeric($num1) and is_numeric($num2)) {
        return $num1 + $num2;
      }  
      echo "<br>Error: argument is the not a number.";
    }
    echo "<br> ".sum(9,2);
    echo "<br>Acronym - ";
    function acronym($string) {
      $strNew = '';
      $stringArr = explode(' ', $string);
      foreach($stringArr as $mots) {
        $strNew = $strNew.ucfirst($mots[0]);
      }
      return $strNew;
    }
    echo acronym("In code we trust!");

    echo "<br>replecement1 = ";
    function replaceLetr($string) {
      
      $strNew = str_replace('ae', 'æ', $string);
      return $strNew;
    }
    echo replaceLetr("caecotrophie");

    echo "<br>replecement2 = ";
    function replaceLetr2($string) {
      
      $strNew = str_replace( 'æ', 'ae',$string);
      return $strNew;
    }
    echo replaceLetr2("cæcotrophie");

    echo "<br>Feedback<br>";
    function feedback($message, $class='info') {
      return "<div class='$class'>$message</div>";
    }
    echo feedback("Incorrect email address", "error");
  ?>
  <h2>Generate a new word</h2>
    <?php
    function generator() {
      $lettres = "abcdefghijklmnopqrstuvw";
      $length1 = rand(1, 5);
      $length2 = rand(7,15);
      $word1 = substr(str_shuffle($lettres),0,$length1);
      $word2 = substr(str_shuffle($lettres),0,$length2);
      echo "<p>" . $word1 . "<br>" . $word2 ."</p>";
    }

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
      {
        generator();
      }
    ?>

  <form action="functions.php" method="post">
    <input type="submit" name="someAction" value="Generer" />
  </form>
  <h2>De-capitalize the string</h2>
  <?php
  function lowerCaps($string)
    {
      echo "<p>" . strtolower($string) . "</p>";
    }
  lowercaps("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

  function calculate_cone_volume($hauteur, $rayon) {
    return ($rayon**2 * pi() * $hauteur * (1/3));
  }
  echo "<p>Le volume du cone est de " .calculate_cone_volume(5,3). "cm<sup>3</sup></p>";
  ?>

  
</body>
</html>