<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDZ</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Калькулятор расхода пользователя</h1>
    <br>
    <h4>Для начала работы, войдите в свой аккаунт:</h4>
    <form action="checkRes.php" name="form1" method="POST">
        <br> Login: <input type="text" name="login" class="fieldlogin">
        <br> Password: <input type="text" name="password">
        <br>
        <input type="submit" value="Sign in" class="button">
    </form>
    <h4>Если вы не зарегестрированы:</h4>
    <form action="SignUp.php" name="form2" method="POST">
        <input type="submit" value="Sign up" class="button">
    </form>
</body>

</html>