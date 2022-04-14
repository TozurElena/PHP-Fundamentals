<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>
  <h1>Array</h1>
  <h2>Ma famille</h2>
  <?php
    $myFamily = array ("Dmitriy", "Elena", "Veronika", "Polina");
    foreach ($myFamily as $value) {
      print_r($value.", ") ;
    }
  ?>
  <h2>Favorite recipes</h2>
  <?php
    $myRecipes = array (
      "Creps" => "Pour un quinzaine de crèpes:250 gr de farine,4 oeufs, 50 cl de lait demi ecrémé, 2 c. à soupe d'huile
          1 pincée de sel, 1 c. à café d'extrait de vanille (facultatif)",
      "SaladeRusse" => "4 grosses pommes de terre à salade,2 carottes,1 poignée de haricots verts,1 poignée de petits pois
        100 g de jambon,4 poivrons rouges rôtis en conserve (1 pour décorer),1 poignée d’olives vertes dénoyautées (et un peu plus pour décorer)
        3 œufs (1 pour décorer),4 cuillères à soupe de mayonnaise (et plus pour décorer), 100 g de thon à l’huile (1 boîte de 160 g)",
    );
    print_r("<b>Recipe Creps:</b>".$myRecipes['Creps']);
    print_r("<br><b>Recipe Salade Russe:</b>".$myRecipes['SaladeRusse']);
  ?>
  <h2>Favorite films</h2>
  <?php
    $myFavFilms = array('Mouvie', 'Next', 'Game', 'Home');
    print_r("Mon film preferé est ".$myFavFilms[2]);
  ?>
  <h2>About me</h2>
  <?php
    $me = array(
      "firstname" => 'Elena',
      "secondName" => 'Kozyreva',
      "age" => 46,
      'favoriteSaison' => 'été',
      'likeSoccer' => 'false'
    );
    $soulmate = array(
      "firstname" => 'Dmitriy',
      "secondName" => 'Sukhomlin',
      "age" => 44,
      'favoriteSaison' => 'été',
      'likeSoccer' => 'false',
      'hobbies' => array ('Lire', 'Voyage', 'Gaming')
    );
    $mother = array(
      "firstname" => 'Lubove',
      "secondName" => 'Tozur',
      "age" => 59,
      'favoriteSaison' => 'été',
      'likeSoccer' => 'false',
      'hobbies' => array ('Lire', 'Pêche')
    );
    $me['hobbies'] = array("Voyage", "Lire");
    $me['mother'] = $mother;
    $me['hobbies'][] = 'Taxidermy ';
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    print_r("Hobbies mother =".count($mother['hobbies']));
    print_r("<br>My Hobbies = ".count($me['hobbies']));
    print_r("<br>Hobbies Total = ".(count($me['hobbies']) + count($mother['hobbies'])));
    $possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
    $possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);
    echo "<br>Possible <b>hobbies</b>";
    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';

    $web_development = array (
              "frontend" => [],
              "backend" => []
    );
    $web_development["frontend"][] = "xhtml";
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    $web_development["backend"][] = "Ruby on Rails";
    var_dump($web_development);
    $web_development["frontend"][] = "CSS";
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    $web_development["frontend"][] = "Flash";
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    $web_development["frontend"][] = "JS";
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    $web_development["frontend"][0]= "html";
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    unset($web_development["frontend"][2]);
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';


  ?>
</body>
</html>