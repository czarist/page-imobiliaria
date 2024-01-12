<?php

function getBaseUrl()
{
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
    $protocol = $secure ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];

    $path = $_SERVER['PHP_SELF'];
    $pathParts = explode('/', $path);
    array_pop($pathParts);
    $directory = implode('/', $pathParts);

    $baseUrl = $protocol . $host . $directory . '/';
    return rtrim($baseUrl, '/');
}
