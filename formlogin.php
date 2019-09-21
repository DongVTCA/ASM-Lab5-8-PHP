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
    <form action="processlogin.php" method="post">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Password</label>
        <input type="password" name="password">
        <button name="login">Login</button>
        <span><?php if (isset($_SESSION["notelogin"])) {
                    echo $_SESSION["notelogin"];
                } ?></span>
    </form>
</body>

</html>