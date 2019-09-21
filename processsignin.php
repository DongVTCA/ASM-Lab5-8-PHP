<?php
try {
    session_start();
    require("mysqli_connect2.php");
    if ($conn->connect_error) {
        die("Connnected error");
    } else {
        // echo "connected succsessfully";
    }
    if (isset($_POST["submit"])) {
        if (empty($_POST["firstname"]) or empty($_POST["lastname"]) or empty($_POST["email"]) or empty($_POST["pass"])) {
            $_SESSION["note"] = "khong duoc de trong";
            header("location:formsignin.php");
        } else {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $password = $_POST["pass"];
            $passcode = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO user (first_name, last_name, email, passwords, registration_date,user_level)";
            $query .= "VALUES(?, ?, ?, ?, now(),1)";
            echo $query;
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssss", $firstname, $lastname, $email, $passcode);
            if ($stmt->execute()) {
                $_SESSION["note"] = "Dang ky thanh cong";
                $_SESSION["email"] = $_POST["email"];
                header("Location:formlogin.php");
            } else {
                header("Location : formsignin.php");
            }
        }
    }
} catch (Mysqli $e) {
    echo $e . message;
}
