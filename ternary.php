
<form method="get" action="">
	<label for="gender"><br>Man or Woman?<br></label>
	<label >
	<input type="radio" name="gender" value="m">Man
	</label> 
	<label >
	<input type="radio" name="gender" value="w">Woman
	</label> <br>
	<input type="submit" name="submit" value="Send">
</form>
<?php
$hello = "Hello, ";
if (isset($_GET['gender'])){
	(($_GET['gender']) == "m") ? $gender = "Mister " : $gender = " Miss ";
  echo $hello.$gender;
}

?>