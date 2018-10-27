<?php
require "jinder_conn.php";
$sender = $_POST["sender"];
$recipient = $_POST["recipient"];
$stmt = $conn->prepare("select (sender, recipient, msg, date_sent) from message where sender = ? and recipient = ? ");
$stmt->bind_param("ii", $sender, $recipient);
if($stmt->execute() == true){
    $stmt->bind_result($sender, $recipient, $msg, $date);
    $rows = array();
    while ($stmt->fetch()) {
        $message = Message::NewMessage($sender, $recipient, $msg, $date);
        $rows[] = $message;
    }
    echo json_encode($rows);
}
else{
    echo "fail";
}
?>

