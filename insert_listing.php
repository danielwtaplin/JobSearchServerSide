<?php
require "jinder_conn.php";
$userId = $_POST["user_id"];
$listingDesc = $_POST["listing_desc"];
$listingCompany = $_POST["listing_company"];
$listingTitle = $_POST["listing_title"];
$listingLoc = $_POST["listing_location"];
$closingDate = $_POST["closing_date"];
$listedDate = $_POST["listed_date"];
$qual = $_POST["qualification"];
$wage = $_POST["wage"];
$salMin = $_POST["sal_min"];
$salMax = $_POST["sal_max"];
$jobType = $_POST["type"];
$sqlQuery = $conn->prepare("select * from listing where title = ? and company = ?");
$sqlQuery->bind_param("ss", $listingTitle, $listingCompany);
$sqlQuery->execute();
if(!$sqlQuery->fetch()){
  $stmt = null;
  if(isset($wage)){
    $stmt = $conn->prepare("insert into listing(title, company, desc_, location, qual, user_id, close_date, date_listed, wage, type) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssissds", $listingTitle, $listingCompany, $listingDesc, $listingLoc, $qual, $userId, $closingDate, $listedDate, $wage, $jobType);
  } else {
    $stmt = $conn->prepare("insert into listing(title, company, desc_, location, qual, user_id, close_date, date_listed, sal_min, sal_max, type) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssissiis", $listingTitle, $listingCompany, $listingDesc, $listingLoc, $qual, $userId, $closingDate, $listedDate, $salMin, $salMax, $jobType);
  }
  $stmt->execute();
  $stmt->commit;
  $stmt->close();
  echo $conn->insert_id;
}
else {
  echo "fail";
}
$sqlQuery->close();
$conn->close();
?>
