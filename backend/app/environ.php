<?php

session_start();

if (!isset($_SESSION['name'])) {
    header('Location: /login');
    die();
}

activityLog(sprintf(
    'User (%s) accessed environ',
    var_export($_SESSION['name'], true)
));
?>
<!DOCTYPE html>
<html>
<head>
    <title>BunnyEnv</title>
</head>
<body>
    <fieldset>
        <legend>Hello <?=$_SESSION['name']?></legend>
    </fieldset>

    <fieldset>
        <legend>Environ</legend>
        <pre><?=var_export($_ENV, true);?></pre>
    </fieldset>
</body>
</html>
