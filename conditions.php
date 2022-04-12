<?php
/**
 * Series of exercises on PHP conditional structures.
*/  
// 1.1 Clean your room Exercise 
$room_is_filthy = true;

if( !$room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	// cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
// / 1.2 Clean your room Exercise, improved
// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == $possible_states[0] ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1] ){
	echo "<br>Yuk, Room is filthy : let's clean it up !";
} else if( $room_filthiness == $possible_states[2] ){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
} else if ( $room_filthiness == $possible_states[3] ) {
	echo "<br>Nothing to do, room is neat.";
} else {
	echo "<br>Nothing to do, room is immaculte.";
}
// 2. "Different greetings according to time" Exercise
date_default_timezone_set('Europe/Paris');
$now = date("H"); 
echo "<br>The time is " . date("h:i:sa");

  if ($now >= "5" and $now <= "9" ) {echo " Good morning!!!";} 
  if ($now > "9" and $now <= "12") {echo " Good day";} 
  if ($now > "12" and $now <= "16") {echo " Good afternoon!";} 
  if ($now > "16" and $now <= "21") {echo " Good evening";} 
  if ($now > "21" or $now < "5") {echo " Good night";} 
?>
<!-- 3, 4, 5 "Different greetings according to age and gender, langage" Exercise -->

<form method="get" action="">
	<label for="age">Please type your age: </label>
	<input type="" name="age">
	<label for="gender"><br>Man or Woman?<br></label>
	<label >
	<input type="radio" name="gender" value="man">Man
	</label> 
	<label >
	<input type="radio" name="gender" value="woman">Woman
	</label> <br>
	<label for="lang"><br>Do you speak English?<br></label>
	<label >
	<input type="radio" name="lang" value="yes">Yes
	</label> 
	<label >
	<input type="radio" name="lang" value="no">No
	</label> <br>

	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
if (isset($_GET['age'], $_GET['gender'], $_GET['lang'])){
	$str='';
	$strLang = '';
	(($_GET['lang']) == "yes") ? $strLang = "<br>Hello  " : $strLang = "<br>Aloha ";
	(($_GET['gender']) == "man") ? $str = "Mister " : $str = " Miss ";
	if ($_GET['age'] > 12 )  {
		if ($_GET['age'] < 18 ) {echo $strLang.$str." Teenager !";}
				elseif ($_GET['age'] < 115) {echo $strLang.$str." Adult ! ";}
				else {echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";}
		}
	else if (($_GET['gender']) == "man")	echo $strLang." boy!"; else echo $strLang." Girl!";
}
?>
<!-- 6. 7 The Girl Soccer team -->
<h1>The Girl Soccer team</h1>
<form method="get" action="">
	<label for="age">Please, type your age: </label>
	<input type="" name="age">
	<label for="gender"><br>Man / Woman?<br></label>
	<label >
	<input type="radio" name="gender" value="man">Man
	</label> 
	<label >
	<input type="radio" name="gender" value="woman">Woman
	</label> <br>
	<label for="namePers"><br>What is you name?<br></label>
	<input type="text" name="namePers" >
	<input type="submit" name="submit" value="Send">
</form>
<?php
	if (isset($_GET['age'], $_GET['gender'], $_GET['namePers'])) {
		$answer = "Sorry, ".$_GET['namePers']." you don't fit the criteria";
		if ($_GET['gender'] == 'woman' and ($_GET['age'] >= 21 and $_GET['age'] <= 40)) {
			$answer = $_GET['namePers'].",welcome to the team !";}
		echo $answer;
	}
?>