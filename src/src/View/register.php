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
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name">

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="conf_pass">Confirmation password</label>
        <input type="password" name="conf_pass" id="conf_pass">

        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>