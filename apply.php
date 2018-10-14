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
$resumeType = $_POST["cv_type"];
$resumeName = $_POST["cv_name"];
$coverLetter = $_POST["cover"];
$coverLetterPath = $_POST["cover_path"];
$coverLetterType = $_POST["cover_type"];
$coverLetterName = $_POST["cover_name"];
if(isset($resume)){
    $fileName = "resumes/" . $resumeName . "." . $resumeType;
    file_put_contents($fileName, $resume);
    $resumePath = $fileName;
}
if(isset($coverLetter)){
    $fileName = "coverLetters/" . $coverLetterName . "." . $coverLetterType;
    file_put_contents($fileName, $coverLetter);
    $coverLetterPath = $fileName;
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