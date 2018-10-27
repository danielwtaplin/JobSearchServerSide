<?php
require "jinder_conn.php";
$sender = $_POST["sender"];
$recipient = $_POST["recipient"];
$stmt = $conn->prepare("select (sender, recipient, msg, date_sent) from message where sender = ? and recipient = ? ");
$stmt->bind_param("ii", $sender, $recipient);
if($stmt->execute() == true){
    $stmt->bind_result($id,$sender, $recipient, $msg, $date);

}


?>

