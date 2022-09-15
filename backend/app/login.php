<?php

session_start();

if (isset($_SESSION['name'])) {
    activityLog(sprintf(
        'User (%s) tried to relogin, showing dashboard.',
        var_export($_SESSION['name'], true)
    ));

    header('Location: /dashboard');
    die();
}

$name = trim($_POST['name'] ?? '');
if ($name) {
    $_SESSION['name'] = $name;

    activityLog(sprintf(
        'User (%s) logged in.',
        var_export($name, true)
    ));

    header('Location: /dashboard');
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signin page</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Username TEST</legend>
        <input name="name" type="text" />
    </fieldset>

    <button type="submit">Login</button>
</form>
</body>
</html>
