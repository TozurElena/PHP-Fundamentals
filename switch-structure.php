<!-- Exercise 9 "School sucks!"  -->
<h2>School notes</h2>
<form method="get" action="">
	<label for="note">Please, type your note: </label>
	<input type="" name="note">
	<input type="submit" name="submit" value="Send">
</form>
<?php
	if (isset($_GET['note'])) {
		$note = $_GET['note'];
		if ($note <= 4) echo "This work is really bad. What a dumb kid!";
			elseif ($note >= 5 and $note <=9) echo "This is not sufficient. More studying is required";
		switch ($note) {
      case 10: echo "barely enough!";
              break;
      case 11: case 12: case 13: case 14: echo "Not bad!"; break;
      case 15: case 16: case 17: case 18: echo "Bravo, bravissimo!"; break;
      case 19: case 20: echo "Too good to be true : confront the cheater!"; break;
      default: echo "entered an incorrect note";
    }
	}
?>