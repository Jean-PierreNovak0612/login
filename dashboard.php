<?php
    // Allow the config
    define("__CONFIG__", true);
    // Require the config file
    require_once "inc/config.php";

    Page::ForceLogin();

    $User = new User($_SESSION['user_id']);
    
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
        <div class="uk-container uk-section">
            <h2>Dashboard</h2>
            <p>Hello <?php echo $User->email; ?>, you registered <?php echo $User->reg_time; ?></p>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </body>
</html>