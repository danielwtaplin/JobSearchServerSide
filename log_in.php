<?php
	require "jinder_conn.php";
    require "user.php";
    $email = $_POST["email"];
    $passWord = $_POST["password"];
    $query = $conn->prepare("select id, f_name, l_name, u_name, email, city, _desc, qual, p_word from user where email like ?");
    $query->bind_param("s", $email);
    if($query->execute() === TRUE){
        $rows = array();
        $query->bind_result($id, $fName, $lName, $uName, $email, $location, $bio, $qual,  $hash);
        if($query->fetch()){
                if(password_verify($passWord, $hash)){
                $user= User::create()->setId($id)->setFirstName($fName)->setLastName($lName)->setEmail($email)->setUserName($uName)->setBio($bio)->setLocation($location)->setQual($qual);
                $rows[] = $user;
                echo json_encode($rows);
            }
        }
        else {
            echo "fail";
        }
    }
    else {
        echo "fail";
        }
        
    $query->close();
    $conn->close();
?>
