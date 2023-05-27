<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ingredient' => [[['_route' => 'ingredient.index', '_controller' => 'App\\Controller\\IngredientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ingredient/creation' => [[['_route' => 'ingredient.new', '_controller' => 'App\\Controller\\IngredientController::new'], null, null, null, false, false, null]],
        '/recette' => [[['_route' => 'recipe.index', '_controller' => 'App\\Controller\\RecipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/recette/communaute' => [[['_route' => 'recipe.community', '_controller' => 'App\\Controller\\RecipeController::indexPublic'], null, ['GET' => 0], null, false, false, null]],
        '/recette/creation' => [[['_route' => 'recipe.new', '_controller' => 'App\\Controller\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'security.login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security.logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security.registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/ingredient/(?'
                    .'|edition/([^/]++)(*:199)'
                    .'|suppression/([^/]++)(*:227)'
                .')'
                .'|/recette/(?'
                    .'|edition/([^/]++)(*:264)'
                    .'|suppression/([^/]++)(*:292)'
                    .'|([^/]++)(*:308)'
                .')'
                .'|/utilisateur/edition(?'
                    .'|/([^/]++)(*:349)'
                    .'|\\-mot\\-de\\-passe/([^/]++)(*:382)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        199 => [[['_route' => 'ingredient.edit', '_controller' => 'App\\Controller\\IngredientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        227 => [[['_route' => 'ingredient.delete', '_controller' => 'App\\Controller\\IngredientController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'recipe.edit', '_controller' => 'App\\Controller\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        292 => [[['_route' => 'recipe.delete', '_controller' => 'App\\Controller\\RecipeController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'recipe.show', '_controller' => 'App\\Controller\\RecipeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        349 => [[['_route' => 'user.edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        382 => [
            [['_route' => 'user.edit.password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
