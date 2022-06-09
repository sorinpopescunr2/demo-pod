<?php

session_start();
if (isset($_SESSION['name'])) {
    activityLog(sprintf(
        'User (%s) logged out',
        var_export($_SESSION['name'], true)
    ));
}

session_regenerate_id(true);
$_SESSION = [];

header('Location: /');
