<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php session_start(); ?>
    <form action="processsignin.php" method="post">
        <label for="">Firstname</label>
        <input type="text" name="firstname">
        <br><br>
        <label for="">Lastname</label>
        <input type="text" name="lastname">
        <br><br>
        <label for="">Email</label>
        <input type="text" name="email">
        <br><br>
        <label for="">Password</label>
        <input type="password" name="pass">
        <br><br>
        <button name="submit">Submit</button>
        <span>You have an account? click to Login <a href="formlogin.php">Login</a></span>
        <span style="color:red"><?php if (isset($_SESSION["note"])) {
                    echo $_SESSION["note"];
                } ?></span>
    </form>
</body>

</html>