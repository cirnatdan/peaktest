<?php

/**
 * register autoload function
 * translates class names to filesystem path, according to PSR-0
 */
spl_autoload_register(function ($class) {
    require str_replace(array("\\", "_"), DIRECTORY_SEPARATOR, $class) . ".php";
});