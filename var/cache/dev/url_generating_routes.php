<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'filmotheque' => [[], ['_controller' => 'App\\Controller\\FilmothequeController::index'], [], [['text', '/']], [], []],
    'series' => [[], ['_controller' => 'App\\Controller\\FilmothequeController::series'], [], [['text', '/series']], [], []],
    'singleSerie' => [['id'], ['_controller' => 'App\\Controller\\FilmothequeController::singleSerie'], [], [['text', '}'], ['variable', '', '[^/]+', 'id', true], ['text', '/singleSerie/{']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\FilmothequeController::categories'], [], [['text', '/categories']], [], []],
];
