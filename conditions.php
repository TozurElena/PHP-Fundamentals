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
    