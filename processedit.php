<?php
session_start();

$id = $_GET["id"];
require("mysqli_connect2.php");
if ($conn->connect_error) {
    die("Connnected error");
}
$query = "select * from user where userId = '$id'";

echo $query;
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_array();
    $_SESSION["first_nameEdit"] = $row["first_name"];
    $_SESSION["last_nameEdit"] = $row["last_name"];
    $_SESSION["emailEdit"] = $row["email"];
    header('location:edituser.php?id=' . $id . '');
} else {
    echo "Not Found !";
}
$sql = "update user set first_name = ?,last_name = ?,email = ? where userId = ?;";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssi', $_POST["firstnameEdit"], $_POST["lastnameEdit"], $_POST["emailEdit"], $id);
if (isset($_POST["Edit"])) {
    if ($stmt->execute() == true) {
        header('Location: Adminpage.php');
    } else {
        echo "update fail";
    }
} else {
    header('Location:edituser.php?id= ' . $row["userId"] . '');
}
