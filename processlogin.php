<?php
session_start();
try {
    require("mysqli_connect2.php");
    if ($conn->connect_error) {
        die("Connnected error");
    } else {
        // echo "connected succsessfully";
    }
    if (isset($_POST["login"])) {
        if (empty($_POST["email"]) or empty($_POST["password"])) {
            $_SESSION["notelogin"] = "khong duoc de trong";
            header('location:formlogin.php');
        } else {
            $username = $_POST["email"];
            $password = $_POST["password"];
            $passcode = password_hash($password, PASSWORD_DEFAULT);
            $query = "select * from user";
            $result = $conn->query($query);
            echo $username . $password;
            while ($row = $result->fetch_assoc()) {
                if ($row["email"] === $username) {
                    if ($row["user_level"] == 0) {
                        $_SESSION["email"] = $username;
                    header('Location: Adminpage.php');
                    break;
                    }
                    else {
                        header('location:thankyou.php');
                    }
                   
                } else {
                    $_SESSION["notelogin"] = "Email or password invalid!";
                    header('Location:formlogin.php');
                }
            }
        }
    }
} catch (Mysqli $e) {
    echo $e . message;
}
