<?php

/**
 * Require a views
 *
 * @param  [string] $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}

/**
 * Redirect to a new page.
 * @param  [string] $path 
 */
function redirect($path)
{
    header("Location: /{$path}");
}
