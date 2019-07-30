<?php

namespace App\Url;

function make($url)
{
    $data = parse_url($url);
    $queryParams = [];
    if (isset($data['query'])) {
        parse_str($data['query'], $queryParams);
    }
    $data['queryParams'] = $queryParams;
    return $data;
}

function setScheme($data, $scheme)
{
    $data['scheme'] = $scheme;
    return $data;
}

function getSchema($data)
{
    return $data['scheme'];
}

function setHost($data, $host)
{
    $data['host'] = $host;
    return $data;
}

function getHost($data)
{
    return $data['host'];
}

function setPath($data, $path)
{
    $data['path'] = $path;
    return $data;
}

function getPath($data)
{
    return $data['path'];
}

function setQueryParam($data, $key, $value)
{
    $data['queryParams'][$key] = $value;
    return $data;
}

function getQueryParam($data, $paramName, $default = null)
{
    return $data['queryParams'][$paramName] ?? $default;
}

function toString($data)
{
    $queryString = http_build_query($data['queryParams']);
    $fullQueryString = $queryString ? "?{$queryString}" : '';
    $schema = getSchema($data);
    $host = getHost($data);
    $path = getPath($data);
    return "{$schema}://{$host}{$path}{$fullQueryString}";
}
