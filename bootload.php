<?php

/**
 * This loads a very simple set of tools - the website is not that complicated really, no need for a CMS.
 */

define('DIR_TEMPLATE', dirname(__FILE__) . '/templates');

/**
 * Helper to easily include a template file from the templates folder
 */
function template(string $name): void
{
    include DIR_TEMPLATE . "/$name.php";
}
