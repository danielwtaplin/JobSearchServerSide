<?php
require "jinder_conn.php";
$id = $_POST["id"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$stmt = $conn->prepare("update listing set lat = ?, lng = ? where id = ?");
$stmt->bind_param("ddi", $lat, $lng, $id);
if($stmt->execute() === TRUE) {
	echo $lat;
} else {
	echo "fail";
}
$stmt->close();
$conn->close();
?>
