<?php

declare(strict_types=1);

$path = @parse_url($_SERVER['REQUEST_URI'])['path'];

switch ($path) {
    case '/':
    case '/index.php':
        // Use the right uri or session set will fail (set PmaAbsoluteUri to be sure it's fixed)
        $_SERVER['REQUEST_URI'] = '/index.php';
        require __DIR__ . '/index.php';
        break;
    case '/url.php':
        // Use the right uri just in case (set PmaAbsoluteUri to be sure it's fixed)
        $_SERVER['REQUEST_URI'] = '/url.php';
        require __DIR__ . '/url.php';
        break;
    case '/show_config_errors.php':
        require __DIR__ . '/show_config_errors.php';
        break;
    case '/js/messages.php':
        // Use the right uri just in case (set PmaAbsoluteUri to be sure it's fixed)
        $_SERVER['REQUEST_URI'] = '/js/messages.php';
        require __DIR__ . '/js/messages.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found: ' . json_encode([
            'path' => $path,
            'uri' => $_SERVER['REQUEST_URI'],
        ]));
}
