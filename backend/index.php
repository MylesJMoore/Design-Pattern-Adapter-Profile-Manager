<?php
include 'ProfileHandler.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$action = $_GET['action'] ?? '';

$profileHandler = new ProfileHandler();

if ($action === 'getProfiles') {
    echo json_encode($profileHandler->getProfiles());
}
