<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION["email"])) {
        ?>
        <h1 style="text-align:center">Wellcome <?php echo $_SESSION["email"] ?></h1>
        <hr>
        <?php
            include('mysqli_connect2.php');
            $sql = "SELECT * from user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                echo " <table class='table table-light'>
                <tbody>
                    <tr>
                        <td>UserID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>Active</td>
                        <td>Active</td>
                    </tr> ";
                while ($row = $result->fetch_assoc()) {
                    if ($row["user_level"] != 0) {
                        echo '
           <tr>
           <div class = "page">
           <td> ' . $row["userId"] . '</td>
           <td> ' . $row["first_name"] . '</td>
           <td> ' . $row["last_name"] . '</td>
           <td> ' . $row["email"] . '</td>
           <td> <a href = "processedit.php?id=' . $row["userId"] . '">Edit</a></td>
           <td> <a href = "processdelete.php?id=' . $row["userId"] . '">Delete</a></td>
           </div>
          </tr>
          ';
                    }
                }
                echo "   </tbody>
                </table>";
            } else {
                echo "0 result";
            }
            $conn->close();
            ?>

        <a href="logout.php">LogOut</a>
    <?php } else {
        echo "You must login to use page";
        echo "<a href='formlogin.php'>Click to login</a>";
    }
    ?>

</body>

</html>