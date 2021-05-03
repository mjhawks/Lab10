<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "masonhawks", "abeFiek3", "masonhawks");
    $user = $_POST['user'];
    $indatabase = false;

    if ($user == ''){
      echo "text field empty";
    }
    else{
      $query = "SELECT user_id from Users";
      $result = $mysqli->query($query);
      while ($r = $result->fetch_assoc()){
        if($r["user_id"] == $user){
          $indatabase = true;
        }
      $result->free();
      }

      if($indatabase == true){
        echo "User already in database";
      }
      else{
        $query = "INSERT INTO Users VALUES('$user')";
		    if ($result = $mysqli->query($query)) {
	        echo "user " .$user. " has been added";
		    }
        else{
          echo "failed to add";
        }
      }
    }
    $mysqli->close();
    ?>
  </body>
</html>
