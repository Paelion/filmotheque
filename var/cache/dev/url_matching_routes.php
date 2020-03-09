<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'filmotheque', '_controller' => 'App\\Controller\\FilmothequeController::index'], null, null, null, false, false, null],
            [['_route' => 'accueil', '_controller' => 'App\\Controller\\FilmothequeController::accueil'], null, null, null, false, false, null],
        ],
        '/series' => [[['_route' => 'series', '_controller' => 'App\\Controller\\FilmothequeController::series'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/singleSerie/\\{([^/]+)\\}(*:66)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [
            [['_route' => 'singleSerie', '_controller' => 'App\\Controller\\FilmothequeController::singleSerie'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
