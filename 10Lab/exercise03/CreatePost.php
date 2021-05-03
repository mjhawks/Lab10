<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "masonhawks", "abeFiek3", "masonhawks");
    $user = $_POST['user'];
    $userpost = $_POST['userpost'];
    $indatabase = false;



    $query1 = "SELECT user_id FROM Users";
	  if ($result1 = $mysqli->query($query1)) {
		  while ($row = $result1->fetch_assoc()) {
			  if($row["user_id"] == $user){
          $indatabase = true;
        }
		  }
	  $result1->free();
	  }


    if($userpost == ''){
      echo "no text in post";
    }


    else if($indatabase){
      $query = "INSERT INTO Posts (author_id, content) VALUES('$user','$userpost')";
      if($result = $mysqli->query($query)){
        echo "post \"" .$userpost. "\" added in database";
      }
      else{
        echo "post not created(error)";
      }
      $result->free();
    }

    else{
      echo"user not in database";
    }
    ?>

  </body>
</html>
