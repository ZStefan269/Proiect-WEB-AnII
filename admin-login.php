<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./app.css" />
    <link rel="stylesheet" href="./signin.css" />
</head>

<body>

    <?php
    require_once "./header.php";
    ?>

    <div class="contactcss">

        <form action="./login.php" method="post">
        <h1>Log In</h1>

        <div>
            <label>Email</label>
            <div>
                <input type="email" name="email" placeholder="Email">
            </div>
        </div>
        <div>
            <label>Password</label>
            <div>
                <input type="password" name="password" placeholder="Password">
            </div>
        </div>    
        <div>
            <button class="backgroundbutton text" type="submit" name="submit" value="Log in">Submit</button>
        </div>    
        </form>
    </div>

    <?php
    require_once "./footer.php";
    ?>

</body>

</html>