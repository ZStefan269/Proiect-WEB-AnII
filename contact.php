<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./app.css" />
    <link rel="stylesheet" href="./signin.css" />
</head>

<body>
    <?php
    require_once "./header.php";
    ?>

    <?php
    $errors = $_GET;
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
    ?>
    
    <div>

        <form class="contactcss" action="./processor.php" method="post">
            <div>
                <div>
                    <label>Nume</label>
                    <div>
                    <input type="text" name="nume" placeholder="Nume">
                    </div>
                </div>
                <div>
                    <label>Email</label>
                    <div>
                    <input type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div>
                    <label>Mesaj</label>
                    <div>
                    <textarea name="mesaj" placeholder="Mesaj"></textarea>
                    </div>
                </div>
                <div>
                <input class="backgroundbutton text" type="submit" name="submit" >
                </div>
            </div>    
        </form>

    </div>

    <?php
    require_once "./footer.php";
    ?>
</body>

</html>
