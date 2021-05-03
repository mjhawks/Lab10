<html>
  <head>
    <title></title>

  </head>
  <body>
    <table>
    <?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "masonhawks", "abeFiek3", "masonhawks");
    $user = $_POST['accounts'];
    $query = 'SELECT content, author_id FROM Posts';
    $postfound = false;

    if ($result = $mysqli->query($query)) {

	     while ($r = $result->fetch_assoc()) {
         if($r["author_id"] == $user){
           $postfound = true;
           $userpost = $r['content'];
  			   echo "<tr><td>".$userpost."</td></tr>";
         }
	     }
       $result->free();
     }

    if ($postfound == false){
      echo "no posts found";
    }
     ?>
   </table>
  </body>
</html>
