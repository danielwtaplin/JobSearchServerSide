<?php
require "jinder_conn.php";
require "listing.php";
$userId = 100;
$stmt = $conn->prepare("select * from listing where user_id != ?");
$stmt->bind_param("i", $userId);
if($stmt->execute() == true) {
  $stmt->bind_result($id, $title, $company, $desc, $location, $qual, $userId, $closeDate, $dateListed,
    $wage, $salMin, $salMax, $type, $lat, $lng);
  $rows = array();
  while ($stmt->fetch()) {
    if($wage !== null){
      $listing = Listing::ListingWage($id, $title, $company, $type, $desc, $location, $dateListed, $closeDate, $userId,
         $wage, $qual);
         if($lat !== null){
           $listing->addLatLng($lat, $lng);
         }
      $rows[] = $listing;
    }
    else{
      $listing = Listing::ListingSal($id, $title, $company, $type, $desc, $location, $dateListed, $closeDate, $userId,
          $qual, $salMin, $salMax, $type);
          if($lat !== null){
            $listing->addLatLng($lat, $lng);
          }
      $rows[] = $listing;
    }
  }
      echo json_encode($rows);
}
else{
  echo "fail";
}
$stmt->close();
$conn->close();
?>
