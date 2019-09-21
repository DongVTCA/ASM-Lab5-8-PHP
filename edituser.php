<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php $id = $_GET["id"] ?>
    <form method="post" action="processedit.php?id=<?php echo $id ?>">
        <div class="form-group">
            <label for="my-input">First Name</label>
            <input id="my-input" class="form-control" type="text" name="firstnameEdit">
        </div>
        <div class="form-group">
            <label for="my-input">Last Name</label>
            <input id="my-input" class="form-control" type="text" name="lastnameEdit">
        </div>
        <div class="form-group">
            <label for="my-input">Email</label>
            <input id="my-input" class="form-control" type="text" name="emailEdit">
        </div>
        <button name="Edit" class="btn-primary">Edit</button>
    </form>
</body>

</html>