<?php
function asset_url()
{
    return base_url() . 'assets/';
}


function truncateString($text, $limit, $author_url)
{
    $words = explode(' ', $text);

    if (count($words) <= $limit) {
        return $text;
    } else {
        $shortened = implode(' ', array_slice($words, 0, $limit));
        return $shortened . ' <a href=' . $author_url . ' target=_blank>read more </a>';
    }
}

function get_canonialTag()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Get the server name
    $domainName = $_SERVER['HTTP_HOST'];

    // Get the URI
    $uri = $_SERVER['REQUEST_URI'];

    // Concatenate to get the full URL
    $fullUrl = $protocol . $domainName . $uri;

    return $fullUrl;
}
