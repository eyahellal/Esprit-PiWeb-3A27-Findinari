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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/ajax/users' => [[['_route' => 'app_admin_ajax_users', '_controller' => 'App\\Controller\\AdminController::ajaxUsers'], null, ['GET' => 0], null, false, false, null]],
        '/admin/create-admin' => [[['_route' => 'app_admin_create_admin', '_controller' => 'App\\Controller\\AdminController::createAdmin'], null, ['POST' => 0], null, false, false, null]],
        '/admin/wallets' => [[['_route' => 'app_admin_wallets', '_controller' => 'App\\Controller\\AdminController::wallets'], null, null, null, false, false, null]],
        '/admin/ticket' => [[['_route' => 'app_admin_tickets', '_controller' => 'App\\Controller\\AdminController::tickets'], null, null, null, false, false, null]],
        '/admin/ticket-calendar' => [[['_route' => 'app_admin_ticket_calendar', '_controller' => 'App\\Controller\\AdminController::ticketCalendar'], null, null, null, false, false, null]],
        '/admin/ticket-stats' => [[['_route' => 'app_admin_ticket_stats', '_controller' => 'App\\Controller\\AdminController::ticketStats'], null, null, null, false, false, null]],
        '/admin/obligations' => [[['_route' => 'app_admin_obligations', '_controller' => 'App\\Controller\\AdminController::obligations'], null, null, null, false, false, null]],
        '/admin/objectifs' => [[['_route' => 'app_admin_objectifs', '_controller' => 'App\\Controller\\AdminController::objectifs'], null, null, null, false, false, null]],
        '/admin/overview' => [[['_route' => 'app_admin_overview', '_controller' => 'App\\Controller\\AdminController::overviewDashboard'], null, null, null, false, false, null]],
        '/admin/overview-dashboard' => [[['_route' => 'app_admin_overview_dashboard', '_controller' => 'App\\Controller\\AdminOverviewController::index'], null, null, null, false, false, null]],
        '/api/crypto/prices' => [[['_route' => 'api_crypto_prices', '_controller' => 'App\\Controller\\Api\\CryptoApiController::getCryptoPrices'], null, ['GET' => 0], null, false, false, null]],
        '/api/crypto/market-data' => [[['_route' => 'api_crypto_market', '_controller' => 'App\\Controller\\Api\\CryptoApiController::getMarketData'], null, ['GET' => 0], null, false, false, null]],
        '/api/news' => [[['_route' => 'api_news_all', '_controller' => 'App\\Controller\\Api\\NewsApiController::getAllNews'], null, ['GET' => 0], null, true, false, null]],
        '/api/news/top-headlines' => [[['_route' => 'api_news_top', '_controller' => 'App\\Controller\\Api\\NewsApiController::getTopHeadlines'], null, ['GET' => 0], null, false, false, null]],
        '/api/news/financial' => [[['_route' => 'api_news_financial', '_controller' => 'App\\Controller\\Api\\NewsApiController::getFinancialNews'], null, ['GET' => 0], null, false, false, null]],
        '/api/news/crypto' => [[['_route' => 'api_news_crypto', '_controller' => 'App\\Controller\\Api\\NewsApiController::getCryptoNews'], null, ['GET' => 0], null, false, false, null]],
        '/api/news/search' => [[['_route' => 'api_news_search', '_controller' => 'App\\Controller\\Api\\NewsApiController::searchNews'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_front_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/login/face' => [[['_route' => 'app_face_login', '_controller' => 'App\\Controller\\AuthController::faceLogin'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_front_register', '_controller' => 'App\\Controller\\AuthController::register'], null, null, null, false, false, null]],
        '/activate' => [[['_route' => 'app_activate_account', '_controller' => 'App\\Controller\\AuthController::activate'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/register/voice-parse' => [[['_route' => 'app_register_voice_parse', '_controller' => 'App\\Controller\\AuthController::parseVoiceData'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\AuthController::forgotPassword'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\AuthController::resetPassword'], null, null, null, false, false, null]],
        '/statistics' => [[['_route' => 'app_statistics', '_controller' => 'App\\Controller\\Bundle\\StatisticController::index'], null, null, null, false, false, null]],
        '/api/statistics/investment' => [[['_route' => 'api_statistics_investment', '_controller' => 'App\\Controller\\Bundle\\StatisticController::getInvestmentStats'], null, ['GET' => 0], null, false, false, null]],
        '/api/statistics/wallet' => [[['_route' => 'api_statistics_wallet', '_controller' => 'App\\Controller\\Bundle\\StatisticController::getWalletStats'], null, ['GET' => 0], null, false, false, null]],
        '/api/statistics/obligation-ranking' => [[['_route' => 'api_statistics_ranking', '_controller' => 'App\\Controller\\Bundle\\StatisticController::getObligationRanking'], null, ['GET' => 0], null, false, false, null]],
        '/api/statistics/maturity-forecast' => [[['_route' => 'api_statistics_forecast', '_controller' => 'App\\Controller\\Bundle\\StatisticController::getMaturityForecast'], null, ['GET' => 0], null, false, false, null]],
        '/api/statistics/user-summary' => [[['_route' => 'api_statistics_user', '_controller' => 'App\\Controller\\Bundle\\StatisticController::getUserSummary'], null, ['GET' => 0], null, false, false, null]],
        '/community' => [[['_route' => 'community_index', '_controller' => 'App\\Controller\\CommunityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/community/moderate' => [[['_route' => 'community_moderate', '_controller' => 'App\\Controller\\CommunityController::moderate'], null, ['POST' => 0], null, false, false, null]],
        '/community/gifs/search' => [[['_route' => 'community_gif_search', '_controller' => 'App\\Controller\\CommunityController::searchGifs'], null, ['GET' => 0], null, false, false, null]],
        '/community/media/upload' => [[['_route' => 'community_media_upload', '_controller' => 'App\\Controller\\CommunityController::uploadMedia'], null, ['POST' => 0], null, false, false, null]],
        '/community/ai-image' => [[['_route' => 'community_ai_image', '_controller' => 'App\\Controller\\CommunityController::aiImage'], null, ['POST' => 0], null, false, false, null]],
        '/community/post/create' => [[['_route' => 'community_post_create', '_controller' => 'App\\Controller\\CommunityController::createPost'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/community/test' => [[['_route' => 'community_test', '_controller' => 'App\\Controller\\CommunityController::test'], null, ['GET' => 0], null, false, false, null]],
        '/contribution' => [[['_route' => 'app_contribution_index', '_controller' => 'App\\Controller\\ContributionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contribution/new' => [[['_route' => 'app_contribution_new', '_controller' => 'App\\Controller\\ContributionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/face/test' => [[['_route' => 'app_face_test', '_controller' => 'App\\Controller\\FaceAuthController::test'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedback' => [[['_route' => 'app_feedback_index', '_controller' => 'App\\Controller\\FeedbackController::index'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'app_google_start', '_controller' => 'App\\Controller\\GoogleAuthController::connect'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'app_google_check', '_controller' => 'App\\Controller\\GoogleAuthController::check'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/how-it-works' => [[['_route' => 'app_how_it_works', '_controller' => 'App\\Controller\\HomeController::howItWorks'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\HomeController::services'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/support' => [[['_route' => 'support_center', '_controller' => 'App\\Controller\\HomeController::support'], null, null, null, false, false, null]],
        '/financial-news' => [[['_route' => 'app_financial_news', '_controller' => 'App\\Controller\\HomeController::financialNews'], null, null, null, false, false, null]],
        '/crypto-prices' => [[['_route' => 'app_crypto_prices', '_controller' => 'App\\Controller\\HomeController::cryptoPrices'], null, null, null, false, false, null]],
        '/loan/investment' => [[['_route' => 'app_investment_index', '_controller' => 'App\\Controller\\Loan\\InvestissementobligationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/loan/obligation' => [[['_route' => 'app_obligation_index', '_controller' => 'App\\Controller\\Loan\\ObligationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/loan/obligation/new' => [[['_route' => 'app_obligation_new', '_controller' => 'App\\Controller\\Loan\\ObligationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/loan/obligation/api/recommendations' => [[['_route' => 'app_obligation_recommendations', '_controller' => 'App\\Controller\\Loan\\ObligationController::getRecommendations'], null, ['GET' => 0], null, false, false, null]],
        '/loan/obligation/api/recommendation/add' => [[['_route' => 'app_obligation_recommendation_add', '_controller' => 'App\\Controller\\Loan\\ObligationController::addRecommendation'], null, ['POST' => 0], null, false, false, null]],
        '/wallet' => [[['_route' => 'app_wallet_index', '_controller' => 'App\\Controller\\Loan\\WalletController::index'], null, ['GET' => 0], null, true, false, null]],
        '/wallet/new' => [[['_route' => 'app_wallet_new', '_controller' => 'App\\Controller\\Loan\\WalletController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/message/reformulate' => [[['_route' => 'app_message_reformulate', '_controller' => 'App\\Controller\\MessageController::messageReformulate'], null, ['POST' => 0], null, false, false, null]],
        '/objectif' => [[['_route' => 'objectif_index', '_controller' => 'App\\Controller\\ObjectifController::index'], null, ['GET' => 0], null, false, false, null]],
        '/objectif/new' => [[['_route' => 'objectif_new', '_controller' => 'App\\Controller\\ObjectifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::profile'], null, null, null, false, false, null]],
        '/profile/update' => [[['_route' => 'app_profile_update', '_controller' => 'App\\Controller\\ProfileController::updateProfile'], null, null, null, false, false, null]],
        '/profile/password' => [[['_route' => 'app_profile_password', '_controller' => 'App\\Controller\\ProfileController::updatePassword'], null, null, null, false, false, null]],
        '/profile/face/enroll' => [[['_route' => 'app_profile_face_enroll', '_controller' => 'App\\Controller\\ProfileController::enrollFace'], null, ['POST' => 0], null, false, false, null]],
        '/profile/face/disable' => [[['_route' => 'app_profile_face_disable', '_controller' => 'App\\Controller\\ProfileController::disableFace'], null, ['POST' => 0], null, false, false, null]],
        '/login-redirect' => [[['_route' => 'app_login_redirect', '_controller' => 'App\\Controller\\SecurityRedirectController::index'], null, null, null, false, false, null]],
        '/user/ticket/classify-priority' => [[['_route' => 'app_user_ticket_classify_priority', '_controller' => 'App\\Controller\\TicketUserController::classifyPriorityAction'], null, ['POST' => 0], null, false, false, null]],
        '/user/tickets' => [[['_route' => 'app_user_tickets', '_controller' => 'App\\Controller\\TicketUserController::myTickets'], null, null, null, false, false, null]],
        '/user/createticket' => [[['_route' => 'app_user_createticket', '_controller' => 'App\\Controller\\TicketUserController::createTicket'], null, null, null, false, false, null]],
        '/alerts/maturity' => [[['_route' => 'app_alerts_maturity', '_controller' => 'App\\Controller\\advancedfeature\\AlertController::getMaturityAlerts'], null, ['GET' => 0], null, false, false, null]],
        '/chatbot' => [[['_route' => 'app_chatbot', '_controller' => 'App\\Controller\\advancedfeature\\ChatbotController::index'], null, null, null, false, false, null]],
        '/api/chatbot/message' => [[['_route' => 'app_chatbot_message', '_controller' => 'App\\Controller\\advancedfeature\\ChatbotController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/financial-health' => [[['_route' => 'app_financial_health', '_controller' => 'App\\Controller\\advancedfeature\\FinancialHealthController::index'], null, null, null, false, false, null]],
        '/notifications' => [[['_route' => 'app_notifications', '_controller' => 'App\\Controller\\advancedfeature\\NotificationController::index'], null, null, null, false, false, null]],
        '/notifications/mark-read' => [[['_route' => 'app_notification_mark_read', '_controller' => 'App\\Controller\\advancedfeature\\NotificationController::markAsRead'], null, ['POST' => 0], null, false, false, null]],
        '/notifications/mark-all-read' => [[['_route' => 'app_notification_mark_all_read', '_controller' => 'App\\Controller\\advancedfeature\\NotificationController::markAllAsRead'], null, ['POST' => 0], null, false, false, null]],
        '/notifications/delete' => [[['_route' => 'app_notification_delete', '_controller' => 'App\\Controller\\advancedfeature\\NotificationController::deleteNotification'], null, ['POST' => 0], null, false, false, null]],
        '/notifications/delete-all' => [[['_route' => 'app_notification_delete_all', '_controller' => 'App\\Controller\\advancedfeature\\NotificationController::deleteAllNotifications'], null, ['POST' => 0], null, false, false, null]],
        '/notifications/unread-count' => [[['_route' => 'app_notification_unread_count', '_controller' => 'App\\Controller\\advancedfeature\\NotificationController::getUnreadCount'], null, ['GET' => 0], null, false, false, null]],
        '/investment/pdf/upload' => [[['_route' => 'app_investment_pdf_upload', '_controller' => 'App\\Controller\\advancedfeature\\PdfUploadController::uploadPdf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/management' => [[['_route' => 'app_admin_management', '_controller' => 'App\\Controller\\managment\\AdminManagementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/budget' => [[['_route' => 'app_budget_index', '_controller' => 'App\\Controller\\managment\\BudgetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/budget/new/step1' => [[['_route' => 'app_budget_new_step1', '_controller' => 'App\\Controller\\managment\\BudgetController::step1'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/budget/new/step2' => [[['_route' => 'app_budget_new_step2', '_controller' => 'App\\Controller\\managment\\BudgetController::step2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/budget/new/step3' => [[['_route' => 'app_budget_new_step3', '_controller' => 'App\\Controller\\managment\\BudgetController::step3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\managment\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\managment\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/management' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\managment\\DashboardController::index'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'app_stats_index', '_controller' => 'App\\Controller\\managment\\StatsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transaction/weather' => [[['_route' => 'app_weather_index', '_controller' => 'App\\Controller\\managment\\TransactionController::weather'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transaction/holiday' => [[['_route' => 'app_holiday_index', '_controller' => 'App\\Controller\\managment\\TransactionController::holiday'], null, ['GET' => 0], null, false, false, null]],
        '/transaction' => [[['_route' => 'app_transaction_index', '_controller' => 'App\\Controller\\managment\\TransactionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transaction/new/step1' => [[['_route' => 'app_transaction_new_step1', '_controller' => 'App\\Controller\\managment\\TransactionController::step1'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transaction/new/step2' => [[['_route' => 'app_transaction_new_step2', '_controller' => 'App\\Controller\\managment\\TransactionController::step2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transaction/new/step3' => [[['_route' => 'app_transaction_new_step3', '_controller' => 'App\\Controller\\managment\\TransactionController::step3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/js/routing(?:\\.(js|json))?(*:34)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:72)'
                    .'|wdt/([^/]++)(*:91)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:132)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:169)'
                                .'|router(*:183)'
                                .'|exception(?'
                                    .'|(*:203)'
                                    .'|\\.css(*:216)'
                                .')'
                            .')'
                            .'|(*:226)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|delete(*:276)'
                                .'|role(*:288)'
                                .'|status(*:302)'
                            .')'
                            .'|(*:311)'
                        .')'
                        .'|feedback/([^/]++)/delete(*:344)'
                        .'|wallet/([^/]++)/delete(*:374)'
                        .'|ticket/([^/]++)(?'
                            .'|/(?'
                                .'|delete(*:410)'
                                .'|message/new(*:429)'
                                .'|voice(*:442)'
                            .')'
                            .'|(*:451)'
                        .')'
                        .'|obligation/([^/]++)/delete(*:486)'
                        .'|message/([^/]++)/(?'
                            .'|delete(*:520)'
                            .'|edit(*:532)'
                        .')'
                    .')'
                    .'|pi/investment/contract/([^/]++)(*:573)'
                .')'
                .'|/c(?'
                    .'|o(?'
                        .'|mmunity/(?'
                            .'|post/(?'
                                .'|(\\d+)(*:615)'
                                .'|(\\d+)/rate(*:633)'
                                .'|(\\d+)/edit(*:651)'
                                .'|(\\d+)/delete(*:671)'
                                .'|(\\d+)/comment(*:692)'
                                .'|(\\d+)/like(*:710)'
                            .')'
                            .'|comment/(?'
                                .'|(\\d+)/edit(*:740)'
                                .'|(\\d+)/delete(*:760)'
                            .')'
                        .')'
                        .'|ntribution/([^/]++)(?'
                            .'|(*:792)'
                            .'|/edit(*:805)'
                            .'|(*:813)'
                        .')'
                    .')'
                    .'|ategorie/([^/]++)/(?'
                        .'|edit(*:848)'
                        .'|delete(*:862)'
                    .')'
                .')'
                .'|/feedback/([^/]++)/(?'
                    .'|edit(*:898)'
                    .'|delete(*:912)'
                .')'
                .'|/service(?:/([^/]++))?(*:943)'
                .'|/loan/(?'
                    .'|investment/(?'
                        .'|new(?:/([^/]++))?(*:991)'
                        .'|([^/]++)(?'
                            .'|(*:1010)'
                            .'|/edit(*:1024)'
                            .'|(*:1033)'
                        .')'
                    .')'
                    .'|obligation/([^/]++)(?'
                        .'|(*:1066)'
                        .'|/edit(*:1080)'
                        .'|(*:1089)'
                    .')'
                .')'
                .'|/wallet/([^/]++)(?'
                    .'|(*:1119)'
                    .'|/edit(*:1133)'
                    .'|(*:1142)'
                .')'
                .'|/user/(?'
                    .'|message/(?'
                        .'|new/([^/]++)(*:1184)'
                        .'|([^/]++)/(?'
                            .'|delete(*:1211)'
                            .'|edit(*:1224)'
                        .')'
                    .')'
                    .'|ticket/([^/]++)(?'
                        .'|/(?'
                            .'|voice(*:1262)'
                            .'|delete(*:1277)'
                            .'|edit(*:1290)'
                        .')'
                        .'|(*:1300)'
                    .')'
                .')'
                .'|/t(?'
                    .'|icket/([^/]++)/(?'
                        .'|su(?'
                            .'|ggestions(*:1348)'
                            .'|mmary(*:1362)'
                        .')'
                        .'|fetch\\-new/([^/]++)(*:1391)'
                    .')'
                    .'|ransaction/([^/]++)/(?'
                        .'|delete(*:1430)'
                        .'|toggle\\-recurring(*:1456)'
                    .')'
                .')'
                .'|/message/([^/]++)/translate(*:1494)'
                .'|/objectif/(?'
                    .'|([^/]++)/(?'
                        .'|edit(*:1532)'
                        .'|delete(*:1547)'
                        .'|contribuer(*:1566)'
                    .')'
                    .'|contrib/([^/]++)/delete(*:1599)'
                .')'
                .'|/budget/([^/]++)/(?'
                    .'|edit(*:1633)'
                    .'|delete(*:1648)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        72 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        91 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        132 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        169 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        183 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        203 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        216 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        226 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        276 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        288 => [[['_route' => 'app_admin_user_role', '_controller' => 'App\\Controller\\AdminController::changeUserRole'], ['id'], ['POST' => 0], null, false, false, null]],
        302 => [[['_route' => 'app_admin_user_status', '_controller' => 'App\\Controller\\AdminController::changeUserStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        311 => [[['_route' => 'app_admin_user_show', '_controller' => 'App\\Controller\\AdminController::showUser'], ['id'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'app_admin_feedback_delete', '_controller' => 'App\\Controller\\AdminController::deleteFeedback'], ['id'], ['POST' => 0], null, false, false, null]],
        374 => [[['_route' => 'app_admin_wallet_delete', '_controller' => 'App\\Controller\\AdminController::deleteWalletAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        410 => [[['_route' => 'app_admin_ticket_delete', '_controller' => 'App\\Controller\\AdminController::deleteTicketAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        429 => [[['_route' => 'app_admin_message_new', '_controller' => 'App\\Controller\\MessageController::newMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        442 => [[['_route' => 'app_admin_message_voice', '_controller' => 'App\\Controller\\MessageController::adminVoiceMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        451 => [[['_route' => 'app_admin_ticket_details', '_controller' => 'App\\Controller\\AdminController::ticketDetails'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        486 => [[['_route' => 'app_admin_obligation_delete', '_controller' => 'App\\Controller\\AdminController::deleteObligationAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        520 => [[['_route' => 'app_admin_message_delete', '_controller' => 'App\\Controller\\MessageController::adminDeleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        532 => [[['_route' => 'app_admin_message_edit', '_controller' => 'App\\Controller\\MessageController::adminEditMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        573 => [[['_route' => 'api_investment_contract', '_controller' => 'App\\Controller\\Api\\ContractApiController::generateContract'], ['id'], ['GET' => 0], null, false, true, null]],
        615 => [[['_route' => 'community_show', '_controller' => 'App\\Controller\\CommunityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        633 => [[['_route' => 'community_rate', '_controller' => 'App\\Controller\\CommunityController::rate'], ['id'], ['POST' => 0], null, false, false, null]],
        651 => [[['_route' => 'community_edit', '_controller' => 'App\\Controller\\CommunityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        671 => [[['_route' => 'community_delete', '_controller' => 'App\\Controller\\CommunityController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        692 => [[['_route' => 'community_comment_create', '_controller' => 'App\\Controller\\CommunityController::createComment'], ['id'], ['POST' => 0], null, false, false, null]],
        710 => [[['_route' => 'community_like', '_controller' => 'App\\Controller\\CommunityController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        740 => [[['_route' => 'community_comment_edit', '_controller' => 'App\\Controller\\CommunityController::editComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        760 => [[['_route' => 'community_comment_delete', '_controller' => 'App\\Controller\\CommunityController::deleteComment'], ['id'], ['POST' => 0], null, false, false, null]],
        792 => [[['_route' => 'app_contribution_show', '_controller' => 'App\\Controller\\ContributionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        805 => [[['_route' => 'app_contribution_edit', '_controller' => 'App\\Controller\\ContributionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        813 => [[['_route' => 'app_contribution_delete', '_controller' => 'App\\Controller\\ContributionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        848 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\managment\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        862 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\managment\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        898 => [[['_route' => 'app_feedback_edit', '_controller' => 'App\\Controller\\FeedbackController::edit'], ['id'], null, null, false, false, null]],
        912 => [[['_route' => 'app_feedback_delete', '_controller' => 'App\\Controller\\FeedbackController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        943 => [[['_route' => 'app_service_details', 'id' => 1, '_controller' => 'App\\Controller\\HomeController::serviceDetails'], ['id'], null, null, false, true, null]],
        991 => [[['_route' => 'app_investment_new', 'idObligation' => null, '_controller' => 'App\\Controller\\Loan\\InvestissementobligationController::new'], ['idObligation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1010 => [[['_route' => 'app_investment_show', '_controller' => 'App\\Controller\\Loan\\InvestissementobligationController::show'], ['idInvestissement'], ['GET' => 0], null, false, true, null]],
        1024 => [[['_route' => 'app_investment_edit', '_controller' => 'App\\Controller\\Loan\\InvestissementobligationController::edit'], ['idInvestissement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1033 => [[['_route' => 'app_investment_delete', '_controller' => 'App\\Controller\\Loan\\InvestissementobligationController::delete'], ['idInvestissement'], ['POST' => 0], null, false, true, null]],
        1066 => [[['_route' => 'app_obligation_show', '_controller' => 'App\\Controller\\Loan\\ObligationController::show'], ['idObligation'], ['GET' => 0], null, false, true, null]],
        1080 => [[['_route' => 'app_obligation_edit', '_controller' => 'App\\Controller\\Loan\\ObligationController::edit'], ['idObligation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1089 => [[['_route' => 'app_obligation_delete', '_controller' => 'App\\Controller\\Loan\\ObligationController::delete'], ['idObligation'], ['POST' => 0], null, false, true, null]],
        1119 => [[['_route' => 'app_wallet_show', '_controller' => 'App\\Controller\\Loan\\WalletController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1133 => [[['_route' => 'app_wallet_edit', '_controller' => 'App\\Controller\\Loan\\WalletController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1142 => [[['_route' => 'app_wallet_delete', '_controller' => 'App\\Controller\\Loan\\WalletController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1184 => [[['_route' => 'app_user_message_new', '_controller' => 'App\\Controller\\MessageController::userNewMessage'], ['id'], ['POST' => 0], null, false, true, null]],
        1211 => [[['_route' => 'app_user_message_delete', '_controller' => 'App\\Controller\\MessageController::userDeleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1224 => [[['_route' => 'app_user_message_edit', '_controller' => 'App\\Controller\\MessageController::userEditMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1262 => [[['_route' => 'app_user_message_voice', '_controller' => 'App\\Controller\\MessageController::userVoiceMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1277 => [[['_route' => 'app_user_ticket_delete', '_controller' => 'App\\Controller\\TicketUserController::deleteTicket'], ['id'], ['POST' => 0], null, false, false, null]],
        1290 => [[['_route' => 'app_user_ticket_edit', '_controller' => 'App\\Controller\\TicketUserController::editTicket'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1300 => [[['_route' => 'app_user_ticket_details', '_controller' => 'App\\Controller\\TicketUserController::ticketDetails'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1348 => [[['_route' => 'app_ticket_message_suggestions', '_controller' => 'App\\Controller\\MessageController::messageSuggestions'], ['id'], ['GET' => 0], null, false, false, null]],
        1362 => [[['_route' => 'app_ticket_summary', '_controller' => 'App\\Controller\\MessageController::ticketSummary'], ['id'], ['GET' => 0], null, false, false, null]],
        1391 => [[['_route' => 'app_ticket_fetch_new_messages', '_controller' => 'App\\Controller\\MessageController::fetchNewMessages'], ['id', 'lastId'], ['GET' => 0], null, false, true, null]],
        1430 => [[['_route' => 'app_transaction_delete', '_controller' => 'App\\Controller\\managment\\TransactionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1456 => [[['_route' => 'app_transaction_toggle_recurring', '_controller' => 'App\\Controller\\managment\\TransactionController::toggleRecurring'], ['id'], ['POST' => 0], null, false, false, null]],
        1494 => [[['_route' => 'app_message_translate', '_controller' => 'App\\Controller\\MessageController::translateMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1532 => [[['_route' => 'objectif_edit', '_controller' => 'App\\Controller\\ObjectifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1547 => [[['_route' => 'objectif_delete', '_controller' => 'App\\Controller\\ObjectifController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1566 => [[['_route' => 'objectif_contribuer', '_controller' => 'App\\Controller\\ObjectifController::contribuer'], ['id'], ['POST' => 0], null, false, false, null]],
        1599 => [[['_route' => 'contribution_delete', '_controller' => 'App\\Controller\\ObjectifController::deleteContribution'], ['id'], ['POST' => 0], null, false, false, null]],
        1633 => [[['_route' => 'app_budget_edit', '_controller' => 'App\\Controller\\managment\\BudgetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1648 => [
            [['_route' => 'app_budget_delete', '_controller' => 'App\\Controller\\managment\\BudgetController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
