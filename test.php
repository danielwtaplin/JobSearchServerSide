<?php
  require "jinder_conn.php";
  $fName = "Daniel";
  $lName = "Taplin";
  $email = "email Address.com";
  $uName = "danielwtaplin";
  $location = "Wellington";
  $password = "1#lop7%f";
  $lat = $_POST["lat"];
  $lng = $_POST["lng"];
  $token = "token";
  $desc = "Believe in yourself. it works";
  $qual = "Bachelor of Hopelessness";
  $filePath = " ";
  $query = $conn->prepare("select id from user where email like ?");
  $query->bind_param("s", $email);
  if($query->execute() === TRUE) {
    $query->bind_result($id);
    if(!$query->fetch()){
      $stmt;
      if(isset($_POST["lat"])){
        $stmt = $conn->prepare("insert into user(f_name, l_name, u_name, email, _desc, qual, token, city, p_word, lat, lng, img_file_path) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssdds", $fName, $lName, $uName, $email, $desc, $qual, $token, $location, $password, $lat, $lng, $filePath);
      }
      else{
        $stmt = $conn->prepare("insert into user(f_name, l_name, u_name, email, _desc, qual, token, city, p_word, img_file_path) values(?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
        $stmt->bind_param("ssssssssss", $fName, $lName, $uName, $email, $desc, $qual, $token, $location, $password, $filePath);
      }
      if($stmt->execute() === TRUE) {
        echo $conn->insert_id;
      }
      else{
        echo "fail";
      }
    }
  }
  else{
    echo "fail";
  }
  $stmt->close();
  $conn->close();

 ?>L
