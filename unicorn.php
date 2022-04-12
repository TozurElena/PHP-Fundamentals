<html>
  <body>
  <form method="get" action="">
	  <label for="genre"><br>Are you a human, a cat or a unicorn ?<br></label>
	  <label >
	  <input type="radio" name="genre" value="h">Human</label> 
	  <label >
	  <input type="radio" name="genre" value="cat">Cat
	  </label> 
    <input type="radio" name="genre" value="unicorn">Unicorn</label> <br>
	  <input type="submit" name="submit" value="Send">
  </form>
  <?php
    if (isset($_GET['genre'])){
	    (($_GET['genre']) == "h") ? $src = 'assets/img/humain.webp' : 
        ((($_GET['genre']) == "cat") ? $src = 'assets/img/cat.webp' : $src = "assets/img/unicorn.webp");
    }
  ?>
  
  <style type="text/css">
  .image {
    background-image: url(<?php echo $src;?>);
    height: 100%;
    background-repeat: no-repeat;
  }
  </style>
  <div class="image" ></div>
  </body>
</html>
