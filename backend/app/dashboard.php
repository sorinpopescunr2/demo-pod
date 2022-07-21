<?php

session_start();

if (!isset($_SESSION['name'])) {
    header('Location: /login');
    die();
}

activityLog(sprintf(
    'User (%s) accessed dashboard',
    var_export($_SESSION['name'], true)
));
?>
<!DOCTYPE html>
<html>
<head>
    <title>BunnyDashboard</title>
</head>
<body>
    <fieldset>
        <legend>Hello <?=$_SESSION['name']?></legend>
        <ul>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </fieldset>

    <fieldset>
        <legend>Dashboard</legend>
        <ul>
            <li><a href="/environ">Backend Environ 21 ggl iulie 2022</a></li>
            <li><a href="/logs">Container Logs clone 3 pr GGL</a></li>
        </ul>
    </fieldset>
</body>
</html>
