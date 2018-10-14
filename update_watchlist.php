<?php
require "jinder_conn.php";
$user = $_POST["user"];
$listing = $_POST["listing"];
$query = $conn->prepare("select id from watchlist where user_id like ? and listing_id like ?");
$query->bind_param("ii", $user, $listing);
if($query->execute() === TRUE) {
  $query->bind_result($id);
  $stmt;
  if(!$query->fetch()){
    $stmt = $conn->prepare("insert into watchlist( listing_id, user_id) values(?, ?) ");
    $stmt->bind_param("ii", $listing, $user);
  }
  else {
    $stmt = $conn->prepare("delete from watchlist where user_id = ? and listing_id = ?");
    $stmt->bind_param("ii", $user, $listing);
  }
  if($stmt->execute() === TRUE) {
    echo "added";
  }
  else{
    echo "fail";
  }
}
else{
  echo "fail";
}
$query->close();
$stmt->close();
$conn->close();
?>
