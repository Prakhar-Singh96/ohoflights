<?php

if (!function_exists('include_route_files')) {
    /**
     * Include all PHP files in a directory.
     *
     * @param string $folder
     * @return void
     */
    function include_route_files($folder)
    {
        $directory = new RecursiveDirectoryIterator($folder);
        $iterator = new RecursiveIteratorIterator($directory);
        $files = new RegexIterator($iterator, '/\.php$/');

        foreach ($files as $file) {
            require $file->getPathname();
        }
    }
}
