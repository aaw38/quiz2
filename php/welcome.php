<!doctype html>

<html>
  <head>
  	<title>Quiz 2</title>
  	<link rel="stylesheet" type="text/css" href="../css/quiz2.css">
  </head>
  <body>
  	<header>
  		<h1>Join the math club!!</h1>
  	</header>
  	<main>
  	  <h1>Welcome to the math club!</h1>
      <?php 
        if (isset($_COOKIE["registered"]))
        {
            $mycookie = $_COOKIE["registered"];
            $stringarr = split("~", $mycookie);
            $firstname = $stringarr[0];
            $email = $stringarr[1];
            setcookie("registered", $firstname . "~" . $email);
             echo '<p>Hi, ' . $firstname . '! You recently registered with the email address ' . $email . '.</p>';
        }
        else
        {
          echo
      	  '<p>Register for the club by filling out this form!!</p>
          <form action="register.php" method="post">
      	  	<div class="question">
      	  	  <p>
      	  	    First name:
      	  	  </p>
      	  	  <input type="text" name="firstname" />
      	  	</div>
            <div class="question">
              <p>
                Last name:
              </p>
              <input type="text" name="lastname" />
            </div>
            <div class="question">
              <p>
                Email:
              </p>
              <input type="text" name="email" />
            </div>
      	  	<div class="question" id="buttons">
      	  	  <input type="reset" name="resetbutton" value="reset" />
      	  	  <input type="submit" name="submitbutton" value="submit" />
      	  	</div>
      	  </form>';
        }
      ?>
    </main>
    <footer>
      <p>
      	Created by Abigail Wezelis on March 27, 2017
      </p>
    </footer>
  </body>
</html>

