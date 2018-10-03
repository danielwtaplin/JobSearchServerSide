<?php
require "jinder_conn.php";
$id = $_POST["id"];
$token = $_POST["token"];
$stmt = $conn->prepare("update user set token = ? where id = ?");
$stmt->bind_param("si", $token, $id);
if($stmt->execute() === TRUE){
  echo "success";
}
else {
  echo "fail";
}
?>
