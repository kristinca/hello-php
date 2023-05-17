<html>
    <head>
        <title>Greetings</title>
    </head>
    <body>
        <?php if(!empty($_POST['name'])) {
            echo "Salut, {$_POST['name']}!";
        }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Enter some name here: <input type="text" name="name" />
        <input type="submit" />
        </form>
    </body>
</html>