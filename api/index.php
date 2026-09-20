<?php

// Set HTML content-type header so browsers render the page instead of downloading
if (!headers_sent()) {
    header('Content-Type: text/html; charset=UTF-8');
}

// Forward all requests to CodeIgniter front controller in public/index.php
require_once __DIR__ . '/../public/index.php';
