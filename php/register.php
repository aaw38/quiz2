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
      <?php
        $firstname = $_POST["firstname"];
        $email = $_POST["email"];
        setcookie("registered", $firstname . "~" . $email);
  	  echo '<h1>Welcome to the math club!</h1>';
      echo '<p>Hi, ' . $firstname . '! You recently registered with the email address ' . $email . '.</p>';
      ?>
    </main>
    <footer>
      <p>
      	Created by Abigail Wezelis on March 27, 2017
      </p>
    </footer>
  </body>
</html>

