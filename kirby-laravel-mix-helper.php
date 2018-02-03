<?php

if (! function_exists('mix')) {

    /**
     * Get Laravel Mix asset path from mix-manifest.json
     * @param  String $path
     * @return string
     */
    function mix($path)
    {
        static $manifest;

        $manifestPath = c::get('mix.manifest', 'mix-manifest.json');

        if (! $manifest) {
            if (! f::exists($manifestPath)) {
                throw new Exception("Couldn't find Laravel Mix Manifest: '{$manifestPath}'");
            }

            $manifest = str::parse(f::read($manifestPath), 'json');
        }

        if (! array_key_exists($path, $manifest)) {
            throw new Exception("Laravel Mix couldn't locate '{$path}'");
        }

        return $manifest[$path];
    }
}
