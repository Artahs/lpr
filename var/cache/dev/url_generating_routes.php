<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'compte' => [[], ['_controller' => 'App\\Controller\\PanierController::compte'], [], [['text', '/compte']], [], [], []],
    'supprimer_du_panier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::supprimerDuPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimer-du-panier']], [], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\PanierController::showPanier'], [], [['text', '/panier']], [], [], []],
    'ajouter_au_panier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::ajouterAuPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajouter-au-panier']], [], [], []],
    'commander_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::commanderPanier'], [], [['text', '/commander-panier']], [], [], []],
    'confirmation_commande' => [[], ['_controller' => 'App\\Controller\\PanierController::confirmationCommande'], [], [['text', '/confirmation']], [], [], []],
    'app_produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], [], []],
    'app_produit_index_list' => [[], ['_controller' => 'App\\Controller\\ProduitController::list'], [], [['text', '/produit/list']], [], [], []],
    'app_produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'app_produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\StaticPages::index'], [], [['text', '/']], [], [], []],
    'mentionlegale' => [[], ['_controller' => 'App\\Controller\\StaticPages::mentionlegal'], [], [['text', '/mentions_legales']], [], [], []],
    'politiquedeconfidentialite' => [[], ['_controller' => 'App\\Controller\\StaticPages::politiquedeconfidentialite'], [], [['text', '/politique_de_confidentialite']], [], [], []],
    'apropos' => [[], ['_controller' => 'App\\Controller\\StaticPages::apropos'], [], [['text', '/apropos']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\PanierController::compte' => [[], ['_controller' => 'App\\Controller\\PanierController::compte'], [], [['text', '/compte']], [], [], []],
    'App\Controller\PanierController::supprimerDuPanier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::supprimerDuPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimer-du-panier']], [], [], []],
    'App\Controller\PanierController::showPanier' => [[], ['_controller' => 'App\\Controller\\PanierController::showPanier'], [], [['text', '/panier']], [], [], []],
    'App\Controller\PanierController::ajouterAuPanier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::ajouterAuPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajouter-au-panier']], [], [], []],
    'App\Controller\PanierController::commanderPanier' => [[], ['_controller' => 'App\\Controller\\PanierController::commanderPanier'], [], [['text', '/commander-panier']], [], [], []],
    'App\Controller\PanierController::confirmationCommande' => [[], ['_controller' => 'App\\Controller\\PanierController::confirmationCommande'], [], [['text', '/confirmation']], [], [], []],
    'App\Controller\ProduitController::index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], [], []],
    'App\Controller\ProduitController::list' => [[], ['_controller' => 'App\\Controller\\ProduitController::list'], [], [['text', '/produit/list']], [], [], []],
    'App\Controller\ProduitController::new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'App\Controller\ProduitController::show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'App\Controller\ProduitController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'App\Controller\ProduitController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\StaticPages::index' => [[], ['_controller' => 'App\\Controller\\StaticPages::index'], [], [['text', '/']], [], [], []],
    'App\Controller\StaticPages::mentionlegal' => [[], ['_controller' => 'App\\Controller\\StaticPages::mentionlegal'], [], [['text', '/mentions_legales']], [], [], []],
    'App\Controller\StaticPages::politiquedeconfidentialite' => [[], ['_controller' => 'App\\Controller\\StaticPages::politiquedeconfidentialite'], [], [['text', '/politique_de_confidentialite']], [], [], []],
    'App\Controller\StaticPages::apropos' => [[], ['_controller' => 'App\\Controller\\StaticPages::apropos'], [], [['text', '/apropos']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'App\Controller\UserController::new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'App\Controller\UserController::show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
