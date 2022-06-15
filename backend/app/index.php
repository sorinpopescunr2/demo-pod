<?php

require routeToFile(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

function routeToFile($path)
{
    switch ($path) {
        case '/dashboard':
            return __DIR__ . '/dashboard.php';
        case '/environ':
            return __DIR__ . '/environ.php';
        case '/logout':
            return __DIR__ . '/logout.php';
        case '/login':
            return __DIR__ . '/login.php';
        case '/':
            header('Location: /login');
            die();
    }

    http_response_code(404);
    die();
}

function activityLog($message) {
    file_put_contents(
        '/var/log/backend/activity.log',
        sprintf(
            "%s: %s\n",
            (new \DateTime())->format('c'),
            $message
        ),
        FILE_APPEND
    );
}
