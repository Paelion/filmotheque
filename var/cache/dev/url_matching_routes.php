<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'filmotheque', '_controller' => 'App\\Controller\\FilmothequeController::index'], null, null, null, false, false, null]],
        '/series' => [[['_route' => 'series', '_controller' => 'App\\Controller\\FilmothequeController::series'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/s(?'
                    .'|ingleSerie/\\{([^/]+)\\}(*:69)'
                    .'|erie/remove/([^/]++)(*:96)'
                .')'
                .'|/categories/\\{([^/]+)\\}(*:127)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'singleSerie', '_controller' => 'App\\Controller\\FilmothequeController::singleSerie'], ['id'], null, null, false, false, null]],
        96 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\FilmothequeController::removeSeries'], ['id'], null, null, false, true, null]],
        127 => [
            [['_route' => 'categories', '_controller' => 'App\\Controller\\FilmothequeController::categories'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
