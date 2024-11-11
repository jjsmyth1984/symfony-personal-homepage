<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    'app_homepage' => [
        'path' => './assets/javascript/project/homepage/index.js',
        'entrypoint' => true
    ],
    'app_contact_us' => [
        'path' => './assets/javascript/project/contact_us/index.js',
        'entrypoint' => true
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@hotwired/turbo' => [
        'version' => '8.0.12',
    ],
    'bootstrap' => [
        'version' => '5.3.3',
    ],
    '@popperjs/core' => [
        'version' => '2.11.8',
    ],
    'animate.css' => [
        'version' => '4.1.1',
    ],
    'rafl' => [
        'version' => '1.2.2',
    ],
    'global' => [
        'version' => '4.4.0',
    ],
];
