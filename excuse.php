<html>
  <head>
	  <title> Apology generator</title>
  </head>
  <body>
    <form method="get" action="">
      <label for="nameChild"><br>What is the name of the child?<br></label>
	    <input type="text" name="nameChild" >
	    <label for="gender"><br> Girl / Boy?<br></label>
	    <label >
	    <input type="radio" name="gender" value="girl">Girl
	    </label> 
	    <label >
	    <input type="radio" name="gender" value="boy">Boy
	    </label> <br>
	    <label for="nameTeacher"><br>What is the name of the theacher?<br></label>
	    <input type="text" name="nameTeacher" >
      <label for="pet-select"><br>Choose a reason:<br></label>
      <select name="reason" id="reason-select">
        <option value="">--Please choose a reason for the absence --</option>
        <option value="ill">illness</option>
        <option value="death">death of the pet (or a family member)</option>
        <option value="activity">significant extra-curricular activity</option>
        <option value="transport">transport problems</option>
        <option value="meteo">meteo problems</option>
      </select>
	    <input type="submit" name="submit" value="Send">
    </form>
    <?php 
    
    ?>
  </body>
</html>