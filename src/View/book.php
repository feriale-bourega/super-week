<?php

if (session_status() == PHP_SESSION_NONE) {session_start();}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<form action="" method="POST" id="form-register">
    <label for="title">Title</label>
    <input type="text" name="title" id="title">

    <label for="content">Content</label>
    <input type="text" name="content" id="content">

    <input type="submit" name="submit" id="submit">
</form>
</body>
</html>