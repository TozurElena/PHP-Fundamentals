<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>
<body>
  <h1>PHP Loops</h1>
  <?php
  $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
  foreach($pronouns as $value) {
    if ($value == 'He/She') echo $value.' codes<br>';
    else {echo $value.' code<br>';};
  }
  $i = 1;
  while ($i <= 120) {
    echo $i."  ";
    $i++;
  }
  echo "<br><b>For: </b>";
  for($i = 1; $i <= 120; $i++) {
    echo $i."  ";
  }
  $nameStartup = array ('Elena', 'Loic', 'Elise', 'Nicola');
  echo "<br><b>Startup: </b>";
  foreach($nameStartup as $name) {
    echo $name." ";
  }
  $countries = array (
      'BE' => "Belgique", 
      "RU" => "Russie", 
      "UA" => "Ukraine", 
      "US" => "États-Unis", 
      "DE" => "Allemagne", 
      "FR" => "France",
      "IT" => "Italie", 
      "GB" => "Royame-Uni", 
      "NL" => "Pays-Bas", 
      "AT" => "Autriche"
    );
  ?>
  <h2>Country</h2>
  <form>
        
    <select name="country">
      <option value="">Choisissez le pays</option>
      <?php
      foreach($countries as $key => $value) {
        echo "<option value=".$key.">".$value."</option>" ;
      }
      ?>   
    </select>
  </form>
</body>
</html>