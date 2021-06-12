<?php
$name = test_input($_POST['u_name']);
$pwd = test_input($_POST['u_pwd']);
$age = test_input($_POST['u_age']);
    setcookie('username', $name, time() + 10);
    setcookie('userpwd', $pwd, time() + 10);
    setcookie('userage', $age, time() + 10);
function test_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>make Cookie</title>
</head>

<body>
    <a href="./show-Cookie.php"> SHOW </a>
</body>

</html>