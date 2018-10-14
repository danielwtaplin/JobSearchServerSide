<?php
/**
 * Created by PhpStorm.
 * User: danieltaplin
 * Date: 15/10/18
 * Time: 12:19 PM
 */
require "jinder_conn.php";
$user = $_POST["user"];
$job = $_POST["job"];
$stmt->prepare("insert into rejected(user_id, listing_id) values(?, ?)");
$stmt->bind_param("ii", $user, $job);
if($stmt->execute() === TRUE) {
    echo "success";
}
else {
    echo "fail";
}
$stmt->close();
$conn->close();