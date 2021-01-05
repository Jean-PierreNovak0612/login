<?php
    // Allow the config
    define("__CONFIG__", true);
    // Require the config file
    require_once "inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/css/uikit.min.css" />
    </head>
    <body>

        <div class="uk-section uk-container">
            <p>Hello there!! Today's date is: <?php echo date('Y m d'); ?></p>
            <p>Go to: <a href="login.php">Login</a></p>
            <p>Go to: <a href="register.php">Register</a></p>
        </div>
            

        <?php
            // Requires the files with the JavaScript and jQuery libraries 
            require_once "inc/footer.php";
        ?>

        
        
    </body>
</html>