<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>

<body>
    <h1>Dream Bank</h1>
    <form method="post" action="beranda.php">
        <p><label>Username :</label>
        <input type="text" name="user" autofocus></p>
        <p><label>Password. :</label>
        <input type="password" name="pass"></p>
        <p>
            <button type="submit" >Sign In</button>
        </p>
    </form>
</body>
</html>
<?php
$file = fopen("nasabah.csv", "r");
$username = ($_POST['user']);
$password = ($_POST['pass']);
$success = false;
while (!feof($file) !== false) {
    if ($data[0] == $username && $data[1] == $password) {
        $success = true;
        break;
    }
}
session_start();

fclose($data)

?>
