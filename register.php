<?php
    // Allow the config
    define("__CONFIG__", true);
    // Require the config file
    require_once "inc/config.php";

    ForceDashboard();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registering Page</title>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/css/uikit.min.css" />
    </head>
    <body>

        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1">
                <form class="uk-form-stacked uk-margin-auto js-register">

                    <h1 class="uk-margin-xlarge-bottom">Registering Page</h1>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-mail"><span uk-icon="icon: mail"></span> Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-mail" type="email" required="required" placeholder="johnnyboi0@gmail.com">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-password"><span uk-icon="icon: lock"></span> Password</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-password" type="password" required="required" placeholder="Password">
                        </div>
                    </div>

                    <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div>

                    <div class="uk-margin">
                        <button class="uk-button uk-button-default" type="submit">Register</button>
                    </div>

                </form>
            </div>
        </div>

        <?php
            // Requires the files with the JavaScript and jQuery libraries 
            require_once "inc/footer.php";
        ?>

        
        
    </body>
</html>