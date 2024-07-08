<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

if (isset($uri[2]) && $uri[2] == 'users') {
    require 'users.php';
    exit();
}

if (isset($uri[2]) && $uri[2] == 'vehicles') {
    require 'vehicles.php';
    exit();
}

if (isset($uri[2]) && $uri[2] == 'bookings') {
    require 'bookings.php';
    exit();
}

if (isset($uri[2]) && $uri[2] == 'approvals') {
    require 'approvals.php';
    exit();
}

if (isset($uri[2]) && $uri[2] == 'usagelogs') {
    require 'usagelogs.php';
    exit();
}

header("HTTP/1.1 404 Not Found");
echo json_encode(array("message" => "Endpoint not found."));
?>
