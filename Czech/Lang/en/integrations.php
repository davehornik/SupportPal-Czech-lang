<?php declare(strict_types=1);

return array(

    /*
     * 5.0.0
     */
    "app_id"                           => "ID aplikace",
    "app_secret"                       => "Tajný klíč aplikace",
    "api_key"                          => "API klíč",

    "algolia_documentation"            => "Přečtěte si naši dokumentaci k nastavení <a href=':link'>Algolia</a>.",

    "facebook_documentation"           => "Přečtěte si naši dokumentaci k nastavení <a href=':link'>Facebook</a>.",
    "facebook_redirect_url"            => "Následující URL <strong>musí</strong> být zadána pro přihlášení přes Facebook jako 'Platné URI pro přesměrování OAuth':",

    "google_documentation"             => "Přečtěte si naši dokumentaci k nastavení <a href=':link'>Google</a>.",
    "google_redirect_url"              => "Následující URL <strong>musí</strong> být zadána pro Google jako 'Autorizované URI pro přesměrování':",

    "microsoft_documentation"          => "Přečtěte si naši dokumentaci k nastavení <a href=':link'>Microsoft</a>.",
    "microsoft_redirect_url"           => "Následující URL <strong>musí</strong> být zadána pro aplikaci jako 'URI pro přesměrování':",

    "pusher_hosting"                   => "Hosting",
    "pusher_cloud"                     => "Cloud (pusher.com)",
    "pusher_self_hosted"               => "Vlastní hosting",
    "pusher_key"                       => "Klíč",
    "pusher_secret"                    => "Tajný klíč",
    "pusher_cluster"                   => "Cluster",
    "pusher_internal_host"             => "Interní hostitel",
    "pusher_internal_host_desc"        => "Interní název hostitele nebo IP adresa serveru webových soketů.",
    "pusher_internal_port_desc"        => "Port interního serveru webových soketů.",
    "pusher_external_host"             => "Externí hostitel",
    "pusher_external_host_desc"        => "Název hostitele nebo IP adresa serveru webových soketů, který je přístupný veřejnosti. Pokud nevyplníte, použije se výchozí název hostitele vašeho helpdesku.",
    "pusher_external_port_desc"        => "Port veřejného serveru webových soketů. Pokud nevyplníte, použije se stejný port jako u vašeho webového serveru.",
    "pusher_encryption_desc"           => "Povolte, pokud jste na serveru webových soketů nastavili SSL certifikát.",
    "pusher_unable_to_receive_updates" => "Nelze přijímat aktualizace v reálném čase. Zkontrolujte své internetové připojení.",

    "steam_documentation"              => "Přečtěte si naši dokumentaci k nastavení <a href=':link'>Steam</a>.",

    "twilio_account_details"           => "Podrobnosti účtu",
    "twilio_account_details_desc"      => "SID účtu a autentizační token jsou dostupné v konzoli vašeho účtu pod 'Informace o účtu'.",
    "twilio_account_sid"               => "SID účtu",
    "twilio_auth_token"                => "Autentizační token",
    "twilio_api_details"               => "Podrobnosti API",
    "twilio_api_details_desc"          => "Vyhledejte 'API Keys' v konzoli. Vytvořte API klíč a zadejte klíč a tajný klíč níže.",
    "twilio_api_secret"                => "Tajný klíč API",
    "twilio_number_verification"       => "Ověření čísla",

    "twitter_api_key_secret"           => "Tajný klíč X API",

    /*
     * 5.3.0
     */
    "twitter_documentation"            => "Přečtěte si naši dokumentaci k nastavení <a href=':link'>X</a>.",
    "twitter_redirect_url"             => "Následující URL <strong>musí</strong> být zadána pro aplikaci X jako 'Callback URL':",

    /*
     * 5.4.1
     */
    "twilio_verify_sid"                => "Ověřovací SID",
    "twilio_number_verification_desc"  => "Volitelné - Zadejte SID ověřovací služby pro povolení ověření telefonních čísel uživatelů. To umožňuje uživatelům ověřit jejich vlastní zadaná telefonní čísla - služba <a target='_blank' href='https://www.twilio.com/verify'>Verify</a> od Twilio je zpoplatněna.",
    "twilio_verify_countries"          => "Povolené země pro ověření",
    "twilio_verify_countries_desc"     => "Omezte ověření telefonních čísel na konkrétní země, aby se snížily náklady a riziko zneužití. Telefonní čísla z nepovolených zemí mohou být zaměstnanci ručně označena jako ověřená.",

    /*
     * 5.5.0
     */
    "algolia_frontend_search_rate_limit" => "Omezení rychlosti vyhledávání na rozhraní",
    "algolia_max_daily"                => "Maximální denní požadavky",
    "algolia_max_daily_desc"           => "Maximální počet volání API, která lze provést na Algolia z rozhraní.",
    "algolia_max_min"                  => "Maximální požadavky za minutu",
    "algolia_max_min_desc"             => "Maximální počet volání API, která lze provést na Algolia z rozhraní, na ověřeného uživatele / IP adresu.",

);