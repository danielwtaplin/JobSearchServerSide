<?php
/**
 * Created by PhpStorm.
 * User: danieltaplin
 * Date: 14/10/18
 * Time: 9:50 PM
 */
require "jinder_conn.php";
$user = $_POST["user"];
$job = $_POST["job"];
$resume = $_POST["cv"];
$resumePath = $_POST["cv_path"];
$coverLetter = $_POST["cover"];
$coverLetterPath = $_POST["cover_path"];
if(isset($resume)){

}
if(isset($coverLetter)){

}
$stmt;
if(isset($resumePath) && isset($coverLetterPath)){
    $stmt = $conn->prepare("insert into applied( listing_id, user_id, resume, cover, date) values(?, ?, ?, ?, ?) ");
    $stmt->bind_param("iisss", $job, $user, $resumePath, $coverLetterPath, DateTime::RFC3339_EXTENDED);
} else {
    $stmt = $conn->prepare("insert into applied( listing_id, user_id, resume, date) values(?, ?, ?, ?) ");
    $stmt->bind_param("iiss", $job, $user, $resumePath, DateTime::RFC3339_EXTENDED);
}
if($stmt->execute() === TRUE){
    echo "success";
}
else{
    echo "fail";
}
?>