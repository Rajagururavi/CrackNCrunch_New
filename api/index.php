<?php

error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('display_errors', '0');

// Set HTML content-type header so browsers render the page instead of downloading
if (!headers_sent()) {
    header('Content-Type: text/html; charset=UTF-8');
}

try {
    // Forward all requests to CodeIgniter front controller in public/index.php
    require_once __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(200);
    echo "<!-- Serverless Notice: " . htmlspecialchars($e->getMessage()) . " -->";
}
