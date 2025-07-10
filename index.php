<?php
require 'userAgentGenerator/userAgent.php';

header('Content-Type: application/json');

$agent = new userAgent();
$userAgent = $agent->generate('chrome');

echo json_encode([
    'user_agent' => $userAgent
]);