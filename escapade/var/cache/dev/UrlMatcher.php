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
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/destination' => [[['_route' => 'destination', '_controller' => 'App\\Controller\\BackController::afficheD'], null, null, null, false, false, null]],
        '/hotelBack' => [[['_route' => 'hotelBack', '_controller' => 'App\\Controller\\BackController::afficheHB'], null, null, null, false, false, null]],
        '/chambreBack' => [[['_route' => 'chambreBack', '_controller' => 'App\\Controller\\BackController::afficheCB'], null, null, null, false, false, null]],
        '/guideBack' => [[['_route' => 'guideBack', '_controller' => 'App\\Controller\\BackController::afficheGB'], null, null, null, false, false, null]],
        '/siteTBack' => [[['_route' => 'siteTBack', '_controller' => 'App\\Controller\\BackController::afficheSTB'], null, null, null, false, false, null]],
        '/MoyenTBack' => [[['_route' => 'MoyenTBack', '_controller' => 'App\\Controller\\BackController::afficheMTB'], null, null, null, false, false, null]],
        '/AgenceLBack' => [[['_route' => 'AgenceLBack', '_controller' => 'App\\Controller\\BackController::afficheALB'], null, null, null, false, false, null]],
        '/userBack' => [[['_route' => 'userBack', '_controller' => 'App\\Controller\\BackController::afficheUB'], null, null, null, false, false, null]],
        '/PromoBack' => [[['_route' => 'PromoBack', '_controller' => 'App\\Controller\\BackController::affichePromoB'], null, null, null, false, false, null]],
        '/reclamationBack' => [[['_route' => 'reclamationBack', '_controller' => 'App\\Controller\\BackController::afficheRB'], null, null, null, false, false, null]],
        '/panierBack' => [[['_route' => 'panierBack', '_controller' => 'App\\Controller\\BackController::affichePB'], null, null, null, false, false, null]],
        '/comBack' => [[['_route' => 'comBack', '_controller' => 'App\\Controller\\BackController::afficheComB'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\BackController::affichelogin'], null, null, null, false, false, null]],
        '/inscrit' => [[['_route' => 'inscrit', '_controller' => 'App\\Controller\\BackController::afficheInscrit'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/blog/front' => [[['_route' => 'app_blog_indexfront', '_controller' => 'App\\Controller\\BlogController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/blog/new' => [[['_route' => 'app_blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog/search/back' => [[['_route' => 'blogAjax', '_controller' => 'App\\Controller\\BlogController::search'], null, ['GET' => 0], null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture/listo1/back' => [[['_route' => 'liste', '_controller' => 'App\\Controller\\FactureController::listo1'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel', '_controller' => 'App\\Controller\\HomeController::afficheH'], null, null, null, false, false, null]],
        '/moyenT' => [[['_route' => 'moyenT', '_controller' => 'App\\Controller\\HomeController::afficheMT'], null, null, null, false, false, null]],
        '/siteT' => [[['_route' => 'siteT', '_controller' => 'App\\Controller\\HomeController::afficheST'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\HomeController::afficheR'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\HomeController::afficheP'], null, null, null, false, false, null]],
        '/apropos' => [[['_route' => 'apropos', '_controller' => 'App\\Controller\\HomeController::afficheApropos'], null, null, null, false, false, null]],
        '/promotion' => [[['_route' => 'app_promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/front' => [[['_route' => 'app_promotion_indexfront', '_controller' => 'App\\Controller\\PromotionController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/promotion/new' => [[['_route' => 'app_promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion/search/back' => [[['_route' => 'promoAjax', '_controller' => 'App\\Controller\\PromotionController::search'], null, ['GET' => 0], null, false, false, null]],
        '/promotion/listo1/back' => [[['_route' => 'listo1', '_controller' => 'App\\Controller\\PromotionController::listo1'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/blog(?'
                    .'|showf/([^/]++)(*:191)'
                    .'|/([^/]++)(?'
                        .'|(*:211)'
                        .'|/edit(*:224)'
                        .'|(*:232)'
                    .')'
                .')'
                .'|/facture/(?'
                    .'|([^/]++)(?'
                        .'|(*:265)'
                        .'|/edit(*:278)'
                        .'|(*:286)'
                    .')'
                    .'|search(*:301)'
                .')'
                .'|/promotion/([^/]++)(?'
                    .'|(*:332)'
                    .'|/edit(*:345)'
                    .'|(*:353)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'frontblog', '_controller' => 'App\\Controller\\BlogController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        265 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['idf'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['idf'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['idf'], ['POST' => 0], null, false, true, null]],
        301 => [[['_route' => 'factureAjax', '_controller' => 'App\\Controller\\FactureController::search'], [], ['GET' => 0], null, false, false, null]],
        332 => [[['_route' => 'app_promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [
            [['_route' => 'app_promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
