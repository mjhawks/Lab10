<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "masonhawks", "abeFiek3", "masonhawks");
$posts = $_POST['poststodelete'];
foreach ($posts as $post) {
  $query = 'DELETE FROM Posts WHERE post_id ='.$post;
  if($mysqli->query($query))
  {
    echo "post id: ".$post." was deleted<br>";
  }
  else {
    echo "Error deleting post id: ".$post."<br>";
  }
}
?>
