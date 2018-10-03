<?php
  require "jinder_conn.php";
  $fName = $_POST["f_name"];
  $lName = $_POST["l_name"];
  $email = $_POST["email"];
  $uName = $_POST["u_name"];
  $location = $_POST["location"];
  $password = $_POST["password"];
  $lat = $_POST["lat"];
  $lng = $_POST["lng"];
  $token = $_POST["token"];
  $desc = $_POST["_desc"];
  $qual = $_POST["qual"];
  $filePath = " ";
  $hash = password_hash($password, PASSWORD_BCRYPT);
  $query = $conn->prepare("select id from user where email like ?");
  $query->bind_param("s", $email);
  if($query->execute() === TRUE) {
    $query->bind_result($id);
    if(!$query->fetch()){
      $stmt;
      if(isset($_POST["lat"])){
        $stmt = $conn->prepare("insert into user(f_name, l_name, u_name, email, _desc, qual, token, city, p_word, lat, lng, img_file_path) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssdds", $fName, $lName, $uName, $email, $desc, $qual, $token, $location, $hash, $lat, $lng, $filePath);
      }
      else{
        $stmt = $conn->prepare("insert into user(f_name, l_name, u_name, email, _desc, qual, token, city, p_word, img_file_path) values(?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
        $stmt->bind_param("ssssssssss", $fName, $lName, $uName, $email, $desc, $qual, $token, $location, $hash, $filePath);
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

 ?>
