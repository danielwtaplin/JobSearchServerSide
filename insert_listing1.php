<?php
require "jinder_conn.php";
$userId = 1;
$listingDesc = "Desc";
$listingCompany = "Company";
$listingTitle = "title";
$listingLoc = "Location";
$closingDate = "2018-01-01";
$listedDate = "2018-01-01";
$qual = "qualification";
$wage = 12.50;
$salMin = $_POST["sal_min"];
$salMax = $_POST["sal_max"];
$jobType = "type";
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
  echo "success";
}
else {
  echo "fail";
}
$sqlQuery->close();
$conn->close();
?>
