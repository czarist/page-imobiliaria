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


include_once 'layouts/header.php';
include_once 'sections/section-1.php';
include_once 'sections/section-2.php';
include_once 'sections/section-3.php';
include_once 'sections/section-4.php';
include_once 'sections/section-5.php';
include_once 'sections/section-6.php';
include_once 'sections/section-7.php';
include_once 'layouts/footer.php';
