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
        '/inscrit' => [[['_route' => 'inscrit', '_controller' => 'App\\Controller\\BackController::afficheInscrit'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/blog/front' => [[['_route' => 'app_blog_indexfront', '_controller' => 'App\\Controller\\BlogController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/blog/new' => [[['_route' => 'app_blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog/search/back' => [[['_route' => 'blogAjax', '_controller' => 'App\\Controller\\BlogController::search'], null, ['GET' => 0], null, false, false, null]],
        '/blog/TrierDESC/back' => [[['_route' => 'trie1', '_controller' => 'App\\Controller\\BlogController::Trierdate'], null, ['GET' => 0], null, false, false, null]],
        '/blog/TrierASC/back' => [[['_route' => 'trie2', '_controller' => 'App\\Controller\\BlogController::Trierdate2'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new/{$idblog}' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire/search/back' => [[['_route' => 'comAjax', '_controller' => 'App\\Controller\\CommentaireController::search'], null, ['GET' => 0], null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture/listo1/back' => [[['_route' => 'liste', '_controller' => 'App\\Controller\\FactureController::listo1'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel', '_controller' => 'App\\Controller\\HomeController::afficheH'], null, null, null, false, false, null]],
        '/moyenT' => [[['_route' => 'moyenT', '_controller' => 'App\\Controller\\HomeController::afficheMT'], null, null, null, false, false, null]],
        '/siteT' => [[['_route' => 'siteT', '_controller' => 'App\\Controller\\HomeController::afficheST'], null, null, null, false, false, null]],
        '/reclamation' => [
            [['_route' => 'reclamation', '_controller' => 'App\\Controller\\HomeController::afficheR'], null, null, null, false, false, null],
            [['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\HomeController::afficheP'], null, null, null, false, false, null]],
        '/apropos' => [[['_route' => 'apropos', '_controller' => 'App\\Controller\\HomeController::afficheApropos'], null, null, null, false, false, null]],
        '/promotion' => [[['_route' => 'app_promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/front' => [[['_route' => 'app_promotion_indexfront', '_controller' => 'App\\Controller\\PromotionController::calendrier'], null, null, null, false, false, null]],
        '/promotion/new' => [[['_route' => 'app_promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion/search/back' => [[['_route' => 'promoAjax', '_controller' => 'App\\Controller\\PromotionController::search'], null, ['GET' => 0], null, false, false, null]],
        '/promotion/listo1/back' => [[['_route' => 'listo1', '_controller' => 'App\\Controller\\PromotionController::listo1'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/search/back' => [[['_route' => 'userAjax', '_controller' => 'App\\Controller\\UtilisateurController::search'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/commentaire/([^/]++)(?'
                    .'|(*:266)'
                    .'|/edit(*:279)'
                    .'|(*:287)'
                .')'
                .'|/facture/(?'
                    .'|([^/]++)(?'
                        .'|(*:319)'
                        .'|/edit(*:332)'
                        .'|(*:340)'
                    .')'
                    .'|search(*:355)'
                .')'
                .'|/promotion/([^/]++)(?'
                    .'|(*:386)'
                    .'|/edit(*:399)'
                    .'|(*:407)'
                .')'
                .'|/reclamation/(?'
                    .'|new/([^/]++)(*:444)'
                    .'|show/([^/]++)(*:465)'
                    .'|([^/]++)/edit(*:486)'
                    .'|del/([^/]++)(*:506)'
                .')'
                .'|/utilisateur/(?'
                    .'|show/([^/]++)(*:544)'
                    .'|([^/]++)(?'
                        .'|(*:563)'
                        .'|/edit(*:576)'
                    .')'
                    .'|del/([^/]++)(*:597)'
                    .'|s(?'
                        .'|ign(?'
                            .'|Up(*:617)'
                            .'|In(*:627)'
                        .')'
                        .'|earchEmail/([^/]++)(*:655)'
                        .'|ms/([^/]++)(*:674)'
                    .')'
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
        191 => [[['_route' => 'frontblog', '_controller' => 'App\\Controller\\BlogController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        211 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        266 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        319 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['idf'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['idf'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        340 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['idf'], ['POST' => 0], null, false, true, null]],
        355 => [[['_route' => 'factureAjax', '_controller' => 'App\\Controller\\FactureController::search'], [], ['GET' => 0], null, false, false, null]],
        386 => [[['_route' => 'app_promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        399 => [[['_route' => 'app_promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        407 => [[['_route' => 'app_promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        444 => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        465 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        486 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        506 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        544 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        563 => [[['_route' => 'app_utilisateur_showBack', '_controller' => 'App\\Controller\\UtilisateurController::showback'], ['id'], ['GET' => 0], null, false, true, null]],
        576 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        597 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        617 => [[['_route' => 'signUp', '_controller' => 'App\\Controller\\UtilisateurController::signUp'], [], null, null, false, false, null]],
        627 => [[['_route' => 'signIn', '_controller' => 'App\\Controller\\UtilisateurController::signIn'], [], null, null, false, false, null]],
        655 => [[['_route' => 'searchEmail', '_controller' => 'App\\Controller\\UtilisateurController::searchByEmail'], ['email'], null, null, false, true, null]],
        674 => [
            [['_route' => 'sms', '_controller' => 'App\\Controller\\UtilisateurController::envoyerSms'], ['numTel'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
