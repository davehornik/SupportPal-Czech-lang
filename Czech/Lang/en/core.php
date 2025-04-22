<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Panel operátora",
    "welcome"                   => "Vítejte v SupportPal",
    "welcome_desc"              => "Udělali jste chytré rozhodnutí. Klikněte na start a začněte rychlou prohlídkou našich nastavení a funkcí.",

    // Dashboard
    "submit_ticket"             => "Odeslat tiket",
    "submit_ticket_desc"        => "Použijte tento formulář k odeslání podpůrného tiketu našemu vysoce školenému personálu.",
    "track_ticket"              => "Sledovat tiket",
    "track_ticket_desc"         => "Nezaregistrováni? Použijte svou emailovou adresu a číslo tiketu pro sledování stavu vašeho tiketu.",
    "my_tickets"                => "Moje tikety",
    "my_tickets_desc"           => "Sledujte své tikety. Zde najdete jak aktivní, tak i dříve odeslané tikety.",
    "no_modules"                => "Žádné moduly nejsou povoleny.",
    "search_results"            => "Výsledky hledání",
    "found_results"             => "Bylo nalezeno :total záznamů pro hledaný výraz",

    // Maintenance
    "maintenance"               => "Právě provádíme údržbu",
    "maintenance_desc"          => "Naše podpora je dočasně nedostupná, protože provádíme údržbu. Děkujeme za vaši trpělivost, vrátíme se brzy.",
    "maintenance_active"        => "Údržbový režim je aktivní.",

    // About
    "license_status"            => "Stav licence",
    "license_code"              => "Kód licence",
    "change_license"            => "Změnit licenci",
    "license_info"              => "Informace o licenci",
    "license_owner"             => "Vlastník licence",
    "license_created"           => "Licence vytvořena",
    "license_type"              => "Typ licence",
    "branding"                  => "Branding",
    "license_expires"           => "Platnost licence končí",
    "license_valid_ip"          => "Platná IP(s) pro licenci",
    "support_status"            => "Stav podpory",
    "support_expires"           => "Podpora končí",
    "version_info"              => "Informace o verzi",
    "installed_version"         => "Nainstalovaná verze",
    "available_version"         => "Dostupná verze",
    "monthly_product"           => "* Datum vypršení platnosti se automaticky upraví každý měsíc po zaplacení jakýchkoli neuhrazených faktur.",

    // API Tokens
    "api_token"                 => "API Token|API Tokeny",
    "token"                     => "Token",
    "regenerate_token"          => "Regenerovat token",
    "access_level"              => "Úroveň přístupu",
    "read_write"                => "Číst & Psát",
    "read_only"                 => "Pouze číst",

    // Spam Rules & Filtering
    "spam_rule"                 => "Spam pravidlo|Spam pravidla",
    "containing_text"           => "Obsahující text",
    "filter_new_message"        => "Nová zpráva tiketu (od uživatele)",
    "filter_new_comment"        => "Nový komentář samoobsluhy (od uživatele)",
    "filter_user_login"         => "Přihlášení uživatele",
    "filter_operator_login"     => "Přihlášení operátora",
    "filter_api_access"         => "API přístup",
    "content"                   => "Obsah",
    "sender"                    => "Odesílatel",
    "content_sender"            => "Obsah & Odesílatel",

    // Company
    "company"                   => "Společnost|Společnosti",

    // Email
    "default_email_addr"        => "Výchozí emailová adresa",
    "default_email_addr_desc"   => "Email, který bude použit ve poli odesílatele u většiny emailů odeslaných systémem.",
    "include_operator_name"     => "Zahrnout jméno operátora",
    "include_operator_name_desc" => "Zahrnout jméno operátora do pole 'Od' v emailových odpovědích na tikety. Například: Od: Joe Bloggs (Podpora Vaší společnosti)",
    "include_dept_name"         => "Zahrnout název oddělení",
    "include_dept_name_desc"    => "Zahrnout název oddělení do pole 'Od' u všech emailů souvisejících s tiketem. Poznámka: To obvykle vytvoří nový emailový thread, pokud tiket změní oddělení.",
    "global_email_header"       => "Globální hlavička emailu",
    "global_email_header_desc"  => "Přidat hlavičku do všech emailů odeslaných systémem. HTML je povoleno.",
    "global_email_footer"       => "Globální zápatí emailu",
    "global_email_footer_desc"  => "Přidat zápatí do všech emailů odeslaných systémem. HTML je povoleno.",
    "email_template"            => "Šablona emailu|Šablony emailů",
    "email_log"                 => "Emailový log",
    "email_queue"               => "Emailová fronta",
    "email_queue_desc"          => "Níže jsou emaily, které jsou čekající na odeslání pomocí cron.",
    "email_method"              => "Metoda emailu",
    "php_mail_function"         => "PHP mail() funkce",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP hostitel",
    "smtp_port"                 => "SMTP port",
    "smtp_encryption"           => "Šifrování SMTP",
    "smtp_requires_auth"        => "Vyžaduje autentizaci",
    "smtp_username"             => "SMTP uživatelské jméno",
    "smtp_password"             => "SMTP heslo",
    "ssl"                       => "SSL",
    "email_content"             => "Obsah emailu",
    "email_content_desc"        => "Zadejte výchozí předmět a obsah emailu pro tuto šablonu, můžete také napsat šablonu v jiných jazycích. Pokud šablona není nastavena v jiném jazyce, použije se výchozí data.",
    "outgoing"                  => "Odchozí",
    "incoming"                  => "Příchozí",
    "incoming_spam"             => "Příchozí (Zamítnuto - Spam)",
    "incoming_throttled"        => "Příchozí (Zamítnuto - Zpomalení)",
    "email_subject"             => "Předmět emailu",
    "twig_html_warning"         => "Twig není povolen uvnitř HTML tagů/atributů a bude automaticky odstraněn při ukládání.",

    // Modules
    "modules"                   => "Modul|Moduly",
    "modules_desc"              => "Níže je seznam všech dostupných modulů, klikněte na ikonu pro úpravu nastavení daného modulu.",
    "module_disable"            => "Zakázané moduly budou odstraněny z frontendového a operátorského rozhraní.",

    // Scheduled tasks
    "scheduled_task"            => "Plánovaná úloha|Plánované úlohy",
    "interval_desc"             => "Nastavte, jak často má úloha běžet, například nastavení 5 minut znamená, že úloha běží každých 5 minut, pokud je cron aktivní a běží.",
    "cron_settings"             => "Nastavení cron",
    "cron_running"              => "Běží",
    "cron_not_running"          => "Neběží",
    "task_ran"                  => "Úloha úspěšně provedena ručně.",
    "task_failed"               => "Chyba při pokusu o spuštění úlohy ručně.",

    // Plugins
    "plugins"                   => "Plugin|Pluginy",
    "visit_plugin"              => "Navštívit stránku pluginu",

    // Messages
    "last_activity"             => "Poslední aktivita",
    "send_to"                   => "Odeslat",
    "inbox"                     => "Doručená pošta",
    "compose"                   => "Sestavit",

    // Utilities
    "utilities"                 => "Nástroje",

    // System Cleanup
    "system_cleanup"            => "Údržba systému",
    "system_cleanup_desc"       => "Použijte dostupné možnosti pro odstranění dat, která již nejsou potřebná nebo požadována.",
    "files"                     => "Soubory",
    "files_desc"                => "Následující položky jsou uloženy jako soubory v souborovém systému.",
    "logs"                      => "Protokoly",
    "logs_desc"                 => "Následující položky jsou uloženy jako záznamy v databázi.",
    "empty"                     => "Prázdný",
    "prune"                     => "Zredukovat",
    "total_records"             => "Celkový počet záznamů",
    "system_cache"              => "Cache systému",
    "system_cache_desc"         => "Používá se pro ukládání systémových dat, která se pravidelně nemění, pro urychlení aplikace.",
    "template_cache"            => "Cache šablon",
    "template_cache_desc"       => "Předkompilované verze šablon jsou uloženy pro zlepšení rychlosti načítání.",
    "attachments_desc"          => "Přílohy tiketu jsou uloženy v souborovém systému, ale mohou zabírat místo. Můžete provést odstranění souborů příloh před určitým datem.",
    "system_activity_log_desc"  => "Ukládá všechny aktivity uživatelů, operátorů a samotného systému, můžete provést odstranění záznamů před určitým datem.",
    "email_log_desc"            => "Ukládá všechny příchozí a odchozí emaily, můžete provést odstranění záznamů před určitým datem.",
    "operator_login_log_desc"   => "Ukládá každý přihlášení operátora, můžete provést odstranění záznamů před určitým datem.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Zobrazit Captcha",

    // Widgets
    "dashboard"                 => "Nástěnka",
    "add_remove_widget"         => "Přidat / Odebrat widgety",
    "enable_tour"               => "Povolit produktovou prohlídku",

    // Product Tour
    "dashboard_desc"            => "Vaše osobní nástěnka. Widgety lze odstranit, minimalizovat a přesunout!",
    "private_messages"          => "Soukromé zprávy",
    "messages_desc"             => "Soukromé zprávy slouží jako užitečný způsob pro 1:1 konverzace s jinými operátory podpory.",
    "configure"                 => "Nastavte svou podporu",
    "configure_desc"            => "SupportPal obsahuje řadu nastavení, která vám umožní přizpůsobit podporu podle vlastních preferencí.",
    "default_email"             => "Výchozí emailová adresa",
    "default_email_desc"        => "Výchozí emailová adresa pro veškerou odchozí korespondenci s uživateli.",
    "dept_settings_desc"        => "Chápeme, že oddělení ve vaší organizaci fungují odlišně. Nastavení oddělení vám umožní přepsat globální nastavení.",
    "department_desc"           => "Oddělení jsou jako ta ve vaší organizaci. Užívá se pro rychlé přiřazení zákaznických dotazů správnému zaměstnanci.",
    "department_email"          => "Emailové adresy oddělení",
    "dept_email_desc"           => "K danému oddělení můžete přiřadit více emailových adres. Sběr emailů je prováděn vůči těmto nastaveným adresám pro příjem emailů od vašich zákazníků.",
    "dept_tmpl"                 => "Šablony emailů oddělení",
    "dept_tmpl_desc"            => "Někdy budete chtít změnit nebo úplně deaktivovat šablony emailů pro dané oddělení. Můžete definovat specifické šablony pro dané oddělení.",
    "schedule_task_desc"        => "Plánované úlohy slouží pro automatizaci různých procesů v SupportPal, včetně sběru tiketů na základě emailu.",
    "schedule_task_2"           => "Pro běh plánovaných úloh musí být vytvořen cron job. Interval každé úlohy může být upraven pomocí formuláře pro úpravu.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Vytvořte cron job na serveru podle níže uvedeného příkladu, aby úlohy běžely automaticky.",
    "ticket_channel_desc"       => "Kanály tiketů jsou způsoby, jak mohou být tikety vytvořeny. Lze je snadno rozšířit o vaše vlastní kanály, například tikety otevřené přes Instagram.",
    "user_desc"                 => "Uživatelé, kteří interagují se systémem, jsou zde zobrazeni. Můžete přidávat, upravovat a mazat uživatele dle potřeby.",
    "organisation_desc"         => "Uživatelé mohou být přiřazeni k organizacím, čímž získají přístup k tiketům otevřeným ostatními uživateli v jejich organizaci.",
    "operator_desc"             => "Další členy týmu lze přidat jako operátory a přiřadit jim oddělení, do kterých patří.",
    "ticket_desc"               => "Mřížka tiketů obsahuje všechny tikety relevantní pro vás.",
    "ticket_toolbar"            => "Nástroje pro tikety",
    "ticket_desc3"              => "Hromadné akce mohou být prováděny na tiketech pomocí nástrojů v panelu tiketu.",
    "tour_complete"             => "Prohlídka dokončena!",
    "tour_complete_desc"        => "Děkujeme, že používáte SupportPal.<br /><br />Doporučujeme vám nyní následovat průvodce začátkem pro konfiguraci vaší podpory.",

    // IP Ban
    "ip_ban_time_desc"          => "Pokud je zákaz trvalý nebo dočasný.",
    "expiry"                    => "Expirace",
    "expired"                   => "Expirace",
    "expiry_time"               => "Čas expirace",
    "expiry_time_desc"          => "Čas, kdy zákaz vyprší. Pokud není nastaven nebo je v minulosti, automaticky se nastaví na 24 hodin od nyní.",
    "permanent"                 => "Trvalý",

    // Languages
    "no_enabled_languages"      => "Nepodařilo se aktualizovat :item. Musí být vždy povolen alespoň jeden jazyk.",

    // General Settings
    "locale"                    => "Locale",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Složka administrátora",
    "admin_folder_desc"         => "Nastavte název složky pro panel operátora. Z bezpečnostního hlediska se doporučuje změnit výchozí název 'admin'.",
    "enable_ssl"                => "Povolit SSL",
    "maintenance_mode"          => "Režim údržby",
    "maintenance_mode_desc"     => "Deaktivuje veřejnou funkčnost podpory a zobrazí oznámení o údržbě. Upravit zprávu, která bude zobrazena uživatelům, najdete v resources/templates/frontend/[template]/core/maintenance.twig.",
    "default_user_country"      => "Výchozí země uživatele",
    "default_user_country_desc" => "Země, která bude vybrána jako výchozí při registraci uživatelů.",
    "system_timezone"           => "Časové pásmo systému",
    "system_timezone_desc"      => "Výchozí časové pásmo aplikované v celém systému. Operátoři mohou změnit své časové pásmo v osobním nastavení.",
    "date_format"               => "Formát data",
    "date_format_desc"          => "Formát data používaný globálně.",
    "time_format"               => "Formát času",
    "time_format_desc"          => "Formát času používaný globálně.",
    "simpleauth_key"            => "SimpleAuth klíč",
    "simpleauth_key_desc"       => "Klíč pro naši možnost jednotného přihlašování, minimálně 16 znaků.",
    "simpleauth_operators"      => "Povolit operátorům",
    "base_url"                  => "URL systému",
    "base_url_desc"             => "Zadejte úplnou webovou adresu vaší instalace, která se používá k generování URL, které jsou odesílány uživatelům.",
    "debug"                     => "Debug",
    "debug_mode"                => "Režim ladění",
    "pretty_urls"               => "Hezké URL",
    "pretty_urls_desc"          => "Povolením tohoto nastavení se odstraní index.php z URL, povolte pouze pokud můžete přistupovat k panelu operátora bez index.php. Zakázat, pokud nemáte nainstalovaný mod_rewrite, .htaccess soubory nejsou povoleny nebo pokud jste nepřevedli Apache .htaccess přepisovací pravidla pro práci s vaším alternativním webovým serverem.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgety",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Povolení této možnosti vynutí, aby celé frontendové a operátorské rozhraní používalo bezpečné připojení, což je doporučené nastavení. Ujistěte se, že HTTPS na vašem serveru správně funguje před povolením.",
    "unexpected_template_error" => "Došlo k neočekávané chybě při kontrole syntaxe šablony. Zkuste to prosím znovu.",
    "empty_template_preview"    => "Prosím poskytněte platnou šablonu, abyste mohli použít funkci náhledu.",
    "no_department_address"     => "Nepodařilo se najít adresu oddělení v seznamu příjemců.",
    "email_loop_detected"       => "Byl detekován smyčkový email - email odeslaný z adresy oddělení.",
    "email_ticket_locked"       => "Tiket je uzamčen. Uživatel byl požádán, aby otevřel nový tiket prostřednictvím emailu.",
    "email_no_body"             => "Nepodařilo se identifikovat tělo emailové zprávy.",
    "email_runtime_error"       => "Došlo k chybě při vytváření tiketu/odpovědi.",
    "email_reply_disabled"      => "Odpovědi uživatelů na emaily byly pro toto oddělení deaktivovány.",
    "email_throttled"           => "Příliš mnoho příchozích emailů od uživatele. Limit je :max_requests emailů každých :decay_time minut.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Upravte nastavení, která platí pro celý SupportPal. Pokud chcete upravit nastavení pro konkrétní sekci, např. Tikety, otevřete sekci v bočním panelu pro zobrazení dostupných nastavení pro tento modul. Nastavení týkající se vaší značky jsou k dispozici kliknutím na Brands v bočním panelu.",
    "brand"                     => "Značka|Značky",
    "brand_desc"                => "Značka je vaše veřejná identita v rámci SupportPal, umožňující několik komunikačních kanálů. Několik značek může být bezproblémově spravováno pod jedním sjednoceným operátorským panelem.",
    "default_brand"             => "Výchozí značka",
    "default_brand_desc"        => "Vyberte značku, která bude použita jako výchozí, když návštěvníci navštíví frontend a nebude nalezena odpovídající značka.",
    "brand_enabled_desc"        => "Přepněte pro povolení nebo zakázání značky. Zakázané značky nemohou být používány a nebudou počítány jako součást povolených značek ve vaší licenci, deaktivace může být použita k dočasnému skrytí značky a/nebo uchování informací. Smazání značky odstraní všechna data včetně uživatelů a tiketů souvisejících s touto značkou.",
    "inherit_global_setting"    => "Dědit globální nastavení",
    "brand_date_format_desc"    => "Formát data používaný pro tuto značku na frontendové části.",
    "brand_time_format_desc"    => "Formát času používaný pro tuto značku na frontendové části.",
    "brand_timezone"            => "Časové pásmo značky",
    "brand_timezone_desc"       => "Časové pásmo, které je výchozí pro frontend této značky, uživatelé budou mít možnost vybrat si vlastní časové pásmo.",
    "brand_default_lang_desc"   => "Jazyk, který je výchozí pro tuto značku na frontendové části.",
    "brand_lang_toggle_desc"    => "Pokud by se měl na frontendové části této značky zobrazovat přepínač jazyka.",
    "brand_groups_desc"         => "Operátoři v daných skupinách budou moci vytvářet, upravovat a mazat (v závislosti na oprávněních role) tikety a další obsah v této značce.",
    "select_brand"              => "Vyberte značku...",
    "add_another_language"      => "Přidat další jazyk...",
    "mass_email_brand_desc"     => "Vyberte značku, z které bude email odeslán. Bude použita pro nastavení jména a adresy odesílatele, načtení správné šablony emailu a v poli pro slučování. Pokud email posíláte do skupiny uživatelů, budou emaily odeslány pouze uživatelům patřícím k vybrané značce.",
    "brand_limit_exceeded"      => "Vaše licence povoluje současně použití pouze :allowed značek. Pro zakoupení dalších značek navštivte naši klientskou oblast.",
    "additional_brands"         => "Další značky",
    "purchase_more"             => "Zakoupit více",
    "brand_limit_allowed"       => "Vaše licence momentálně povoluje použití :allowed značky současně.|Vaše licence momentálně povoluje použití :allowed značek současně.",
    "brand_limit_purchase"      => "Pokud je to nesprávně, prosím <strong>obnovte</strong> svou licenci v naší <a href='http://www.supportpal.com/manage/' target='_blank'>klientské oblasti</a> a navštivte stránku <a href=':route'>Informace o licenci</a> pro synchronizaci vaší podpory s naším licenčním serverem.<br />Pro zakoupení dalších značek, prosím <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>upgradujte svou licenci</a>.",
    "support_expiry"            => "Vaše podpora a aktualizace je platná do :date.",
    "support_status_desc"       => "Pro získání poslední podpory a aktualizací, prosím <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>obnovte svou podporu</a>.",
    "ip_ban"                    => "IP Ban|IP Bany",
    "ip_whitelist"              => "IP Whitelist",
    "whitelisted_ip"            => "IP na whitelistu",
    "license_path"              => "Cesta k instalaci",
    "php_info"                  => "PHP informace",
    "log"                       => "Protokol|Protokoly",
    "invalid_department_brand"  => "Oddělení není přiřazeno k značce tiketu.",
    "incoming_rejected"         => "Příchozí (Zamítnuto)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Správce logů souborů",
    "file_manager_desc"         => "Níže můžete stáhnout nebo smazat logy, které byly během provozu uloženy systémem, mohou být použity pro ladicí účely. Logy jsou automaticky cyklovány, ukládají pouze posledních 5 dní záznamů.",
    "app_logs"                  => "Aplikační logy",
    "app_logs_desc"             => "Všechny varování a chyby z běžného používání podpory jsou zde zaznamenány. Můžete být požádáni o poskytnutí jednoho nebo více těchto logů při žádosti o podporu.",
    "email_logs"                => "Emailové logy",
    "email_logs_desc"           => "Podrobnosti o příchozích emailech jsou uloženy v těchto souborech při analýze a importu jako tikety.",
    
    /*
     * 2.1.2
     */
    "reply_to"                  => "Odpovědět na",
    "and_number_others"         => "a :number další|a :number další",
    "user_templates"            => "Šablony uživatele",
    "operator_templates"        => "Šablony operátora",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Cumulativní limit velikosti přílohy",
    "attachment_size_desc"      => "Maximální kumulativní velikost všech příloh, které jsou odesílány v jednom emailu. K dispozici jsou možnosti K (kilobajty) a M (megabajty), všechno ostatní znamená bajty. Příklad hodnoty: 5M pro 5 megabajtů. Nastavit na 0, pokud nechcete odesílat žádné přílohy přes email a požádat uživatele o stažení příloh prostřednictvím podpory.",
    "attachment_limit_reached"  => "Byl dosažen kumulativní limit souborů (:size). Zvažte odeslání souborů jiným způsobem (například prostřednictvím odkazu ke stažení).",
    "no_existing_translations"  => "Žádné existující překlady.",
    "add_translation"           => "Přidat překlad",
    "todo_list"                 => "Seznam úkolů",
    "version_check"             => "Kontrola verze",
    "system_overview"           => "Přehled systému",
    "getting_started"           => "Začínáme",
    "operator_notes"            => "Poznámky operátora",
    "simpleauth_operators_desc" => "Povolit operátorům přihlášení a odhlášení pomocí SimpleAuth, doporučujeme tuto možnost ponechat zakázanou, pokud ji konkrétně nepoužíváte.",
    "upgrade_and_reactivate"    => "Upgrade & Reactivace",
    "upgrade_pending"           => "Upgrade čeká",
    "locale_in_uri"             => "Zahrnout Locale v URI",
    "locale_in_uri_desc"        => "Zakázání odstraní locale z URI, například: http://support.mycompany.com/en/announcements stává se http://support.mycompany.com/announcements. Lze zakázat pouze v případě, že je v systému povolený pouze jeden jazyk.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Tento jazyk je aktuálně nastaven jako výchozí. Deaktivace jazyka nastaví jiný povolený jazyk jako výchozí.",
    
    /*
     * 2.3.1
     */
    "javascript_required"       => "Pro použití této stránky povolte JavaScript.",
    "go_to_dashboard"           => "Přejít na nástěnku",
    "brand_colour_desc"         => "Vyberte barvu pro svou značku, která bude použita pro barevné schéma na frontendové a operátorské šabloně. Nechte prázdné, pokud chcete použít výchozí barevné schéma.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "Ikona favicon se objeví na adresním řádku a slouží k identifikaci vaší webové stránky. Pro nejlepší výsledky zajistěte, aby ikona obsahovala různé velikosti od 32x32px do 310x310px, byla čtvercová a ve formátu ICO/PNG.",
    "view_original"             => "Zobrazit originál",
    "download_original"         => "Stáhnout originál",
    "consume_all"               => "Volitelně zadejte emailovou adresu oddělení s povoleným \"Consume All\".",
    "reprocess_email"           => "Znovu zpracovat email",
    "reprocess_email_desc"      => "Doporučujeme zkontrolovat, co původně blokovalo email, a provést potřebné změny před opětovným zpracováním.",
    "email_blocked_desc"        => "Email se nepodařilo odeslat několikrát, nyní musí být odeslán ručně.",
    "captcha_type"              => "Typ Captcha",
    "default_captcha"           => "Výchozí Captcha",
    "recaptcha_site_key"        => "Klíč k webu",
    "recaptcha_secret_key"      => "Tajný klíč",
    "recaptcha_desc"            => "Zaregistrujte nový web na <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, vyberte správný typ reCAPTCHA a zajistěte přidání každé domény značky. Zkopírujte klíč webu a tajný klíč výše.",
    "enter_code"                => "Zadejte kód",
    "export_data"               => "Exportovat data",
    "export_data_desc"          => "Vygenerujte stahovatelný export dat patřících k tomuto uživatelskému účtu.",
    "export_data_select"        => "Vyberte, jaká data chcete exportovat.",
    "export_data_scheduled"     => "Export je aktuálně generován, může to chvíli trvat. Po dokončení vám pošleme email s odkazem na stažení.",
    "database"                  => "Databáze",
    "database_desc"             => "Následující položky jsou uloženy v databázi.",
    "prune_users"               => "Neaktivní uživatelské záznamy mohou být automaticky zredukovány. Uživatel je považován za neaktivního, pokud se nepřihlásil nebo neměl žádnou jinou aktivitu po určitou dobu.",
    "prune_tickets"             => "Neaktivní tikety mohou být automaticky zredukovány. Tiket je považován za neaktivní, pokud je vyřešen a po určitou dobu neměl žádnou aktivitu.",
    "prune_organisations"       => "Neaktivní organizace mohou být automaticky zredukovány. Organizace je považována za neaktivní, pokud nemá žádné uživatele přidružené a po určitou dobu neměla žádnou aktivitu.",
    "prune_export"              => "Exportované uživatelské údaje jsou uloženy v souborovém systému, ale mohou zabírat místo. Můžete provést odstranění exportovaných souborů vytvořených před určitým datem.",
    "automatically_prune"       => "Automaticky smazat",
    "days_after_saved"          => "Záznamy po",
    "days_after_last_activity"  => "Neaktivní záznamy po",
    "record_permanent_delete"   => "Záznamy budou trvale smazány. To ovlivní reporty.",
    "record_delete_relations"   => "Záznamy budou trvale smazány spolu s následujícími souvisejícími daty: :relations. To ovlivní reporty.",
    "manually_prune"            => "Ruční smazání záznamů vytvořených před",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Pokud tuto možnost povolíte a stránka se nenačte správně, můžete být zablokováni z SupportPal!",
    "verify_frontend_loads"     => "Zkontrolujte, zda frontend načítá správně níže.",
    "twig_operator_reply_template"   => "Sloučené pole {{ operator.reply_template|raw }} bude zpracováno při běhu, takže náhled může být nesprávný.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Umožňuje spouštění dalších značek na vaší instalaci SupportPal.",
    "no_branding"               => "Bez brandingu",
    "no_branding_desc"          => "Odstraní branding SupportPal z klientského rozhraní podpory.",
    "multi_ip"                  => "Podpora více IP",
    "multi_ip_desc"             => "Umožňuje zamknout SupportPal na více interních/externích IP.",
    "purchase"                  => "Zakoupit",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Povolení režimu ladění zobrazuje chyby, používejte pouze pro ladění nebo pokud je to požadováno podporou. Chyby a jiné užitečné záznamy jsou jinak ukládány v aplikačních logech, které lze stáhnout v Nástrojích -> Logy -> Správce logů.",
    "record_trash_relations"    => "Záznamy budou přesunuty do koše a poté trvale smazány po :number dnech spolu s následujícími souvisejícími daty: :relations. To ovlivní reporty.",
    "uninstall_plugable_warning" => "Odinstalování :plugable smaže všechny související soubory a data. Doporučujeme místo toho deaktivovat :plugable.",
    "web_settings_desc"         => "Nastavení webového kanálu se vztahují na frontend. Tikety lze přistupovat každým, kdo zná unikátní URL tiketu. Možná budete chtít tuto možnost zakázat a požadovat, aby se uživatelé přihlásili, než mohou přistupovat k informacím o tiketu.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Zadejte řetězec (specifické slovo pro blokování nebo emailovou adresu), všechny řetězce jsou bez ohledu na velikost písmen.",
    "spam_is_regex_desc"        => "Pravidla mohou využívat regulární výrazy; pokud to zamýšlíte, povolte tuto možnost. Nepotřebujete zahrnovat oddělovače.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "Soubor(y) se nepodařilo nahrát kvůli chybě na straně serveru.",
    "insert_image"              => "Vložit obrázek",
    "quote"                     => "Citace",
    "code"                      => "Kód",
    "format"                    => "Formát",
    "paragraph"                 => "Odstavec",
    "heading1"                  => "Nadpis 1",
    "heading2"                  => "Nadpis 2",
    "heading3"                  => "Nadpis 3",
    "heading4"                  => "Nadpis 4",
    "heading5"                  => "Nadpis 5",
    "heading6"                  => "Nadpis 6",
    "upload"                    => "Nahrát",
    "more_formatting"           => "Více formátování",
    "clearformat"               => "Vymazat formátování",
    "bold"                      => "Tučné",
    "underline"                 => "Podtržené",
    "italic"                    => "Kurzíva",
    "strikethrough"             => "Přeškrtnuté",
    "font_color"                => "Barva písma",
    "insert_link"               => "Vložit odkaz",
    "edit_link"                 => "Upravit odkaz",
    "unlink"                    => "Zrušit odkaz",
    "orderedlist"               => "Seřazený seznam",
    "unorderedlist"             => "Neseřazený seznam",
    "outdent"                   => "Snížit odsazení",
    "indent"                    => "Odsazení",
    "lists"                     => "Seznamy",
    "edit_html"                 => "Upravit HTML",
    "sEmptyTable"               => "Žádná data dostupná v tabulce",
    "sInfo"                     => "Zobrazuji _START_ až _END_ z _TOTAL_ položek",
    "sInfoEmpty"                => "Zobrazuji 0 až 0 z 0 položek",
    "sInfoFiltered"             => "(filtrováno z _MAX_ celkových položek)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Zobrazit _MENU_ položek",
    "sLoadingRecords"           => "Načítání...",
    "sProcessing"               => "Zpracovávání...",
    "sSearchPlaceholder"        => "Hledat...",
    "sZeroRecords"              => "Žádné odpovídající záznamy nebyly nalezeny",
    "sSortAscending"            => ": aktivujte pro seřazení sloupce vzestupně",
    "sSortDescending"           => ": aktivujte pro seřazení sloupce sestupně",
    "incoming_auto_reply"       => "Příchozí (Automatická odpověď)",
    "logo_dark_mode"            => "Logo pro tmavý režim",
    "logo_dark_mode_desc"       => "Pokud bylo vaše logo navrženo pouze pro světlé pozadí, nastavte jiné logo pro tmavý režim. Pole může být buď cesta relativní k základnímu adresáři (doporučujeme uložit vaše logo do složky resources/assets/) nebo přímý URL k obrázku.",
    "template_mode"             => "Režim šablony",
    "template_mode_desc"        => "Nastavte výchozí světlou nebo tmavou šablonu pro rozhraní. Uživatelé si budou moci vybrat svou vlastní preferenci ve svém profilu.",
    "light_mode"                => "Světlý režim",
    "dark_mode"                 => "Tmavý režim",
    "logo"                      => "Logo",
    "logo_desc"                 => "Změňte výchozí logo pro tuto značku. Pole může být buď cesta relativní k základnímu adresáři (doporučujeme uložit vaše logo do složky resources/assets/) nebo přímý URL k obrázku.",
    "website_url"               => "URL webu",
    "website_url_desc"          => "Přidejte odkaz na vaši hlavní webovou stránku v záhlaví portálu podpory.",
    "back_to_website"           => "Zpět na web",
    "template"                  => "Šablona",
    "how_can_we_help"           => "Jak vám můžeme dnes pomoci?",
    "ticket_desc2"              => "Mřížka tiketů může být seřazena podle vaší preference a filtrována podle potřeby.",
    "zip_extension_required"    => "PHP rozšíření Zip není nainstalováno. Prosím nainstalujte ho a zkuste to znovu.",
    "zip_file_not_downloaded"   => "Soubor zip se nepodařilo stáhnout. Zkontrolujte, zda máte přístup k: :url",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Integrace třetích stran|Integrace třetích stran",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth data",
    "client_id"                 => "Client ID",
    "client_secret"             => "Client Secret",
    "create_credentials"        => "Vytvořte autentifikační přihlašovací údaje prostřednictvím stránky <a href=\":route\">Integrace třetí strany</a>.",
    "oauth_data_missing"        => "Client ID a/nebo tajný klíč nebyly nastaveny a jsou vyžadovány. Jakmile je nastavíte podle níže uvedených pokynů, zavřete vyskakovací okno a znovu ověřte.",
    "configure_after_brand_created" => "Toto může být nakonfigurováno po vytvoření značky.",
    "get_access_token"          => "Získat přístupový token",
    "reset_access_token"        => "Obnovit přístupový token",

    /*
     * 3.4.0
     */
    "brand_name"                => "Název značky",
    "brand_name_desc"           => "Název vaší značky je používán pro veškerou korespondenci s uživateli.",
    "supportpal_announcements"  => "Oznámení SupportPal",
    "add_selectize"             => "Přidat <strong>:item</strong>...",
    "general_settings"          => "Nastavení obecných nastavení",
    "configure_brand"           => "Nastavit značku",
    "configure_department"      => "Nastavit oddělení",
    "setup_cron"                => "Nastavit cron job",
    "channel_settings"          => "Aktualizovat nastavení kanálu tiketu",
    "add_user"                  => "Přidat nového uživatele",
    "open_ticket"               => "Otevřít nový tiket",
    "reply_ticket"              => "Odpovědět na tiket",
    "new_version_available"     => "Nová verze dostupná",
    "new_version_desc"          => "Byla vydána nová verze SupportPal, doporučujeme vždy udržovat vaši instalaci aktuální.<div class='description'>Potvrzením této zprávy ji skryjete až do vydání novější verze.</div>",
    "acknowledge"               => "Potvrdit",
    "running_latest_version"    => "Používáte nejnovější verzi.",
    "running_prerelease"        => "Používáte předběžnou verzi.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Výsledků na stránku",
    "class_name"                => "Název třídy",
    "possible_permission_issue" => "Spouštíte příkaz jako \":cli_user\", zatímco \":path\" je vlastněn \":path_user\", což může vést k problémům s oprávněními souborů.",
    "system_update"             => "Aktualizace systému",
    "system_update_desc"        => "Aktualizujte SupportPal na nejnovější verzi.",
    "update_available"          => "Aktualizace je k dispozici",
    "up_to_date"                => "Aktuální",
    "release_notes"             => "Poznámky k vydání",
    "about_to_update_to"        => "Chystáte se aktualizovat na verzi <strong>:version</strong>. Před aktualizací bude automaticky provedena úplná záloha systému.",
    "waiting_for_update_start"  => "Čekání na zahájení aktualizace... To může chvíli trvat.",
    "binary_paths"              => "Cesty k binárním souborům",
    "binary_paths_desc"         => "Proměnná prostředí PATH se používá k nalezení požadovaných binárních souborů. Pokud některý binární soubor nelze najít, můžete pro každý binární soubor specifikovat úplnou cestu.",
    "cron_makesure"             => "Pro pomoc při registraci cron jobu si prosím přečtěte <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Pomoc s cron jobem</a>.",
    "cron_must_run_for_update"  => "Cron job musí běžet pro použití této funkce.",
    "support_expired"           => "Podpora a aktualizace na vaší licenci vypršela.",
    "update_permitted_version"  => "Licence povoluje aktualizaci pouze na verzi :version.",
    "update_renew_support"      => "Pro aktualizaci na nejnovější verzi SupportPal, prosím obnovte vaši podporu a aktualizace.",
    "renew"                     => "Obnovit",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Úlohy na pozadí",
    "background_jobs_not_processing" => "Úlohy na pozadí momentálně nejsou zpracovávány, zkontrolujte <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>kroky pro řešení problémů</a>.",

    /*
     * 4.0.0
     */
    "addon"                     => "Doplňky|Doplňky",
    "addon_already_exists"      => "Doplňek již existuje na této cestě: :path",
    "addons_marketplace"        => "Marketplace",
    "addons_missing_valid_artifact" => "Doplňek nemá platný archiv.",
    "checksum_not_matched"      => "Stáhnutý soubor neprošel kontrolou checksum.",
    "invalid_archive_format"    => "Artifact by neměl obsahovat jiné adresáře než samotný doplněk.",
    "downloading_version"       => "Stahuji verzi doplňku :version do :path...",
    "extracting_addon"          => "Rozbaluji soubory doplňku...",
    "activating_addon"          => "Aktivuji doplňek...",
    "addon_install_success"     => "Doplňek byl úspěšně nainstalován.",
    "addon_install_error"       => "Doplňek se nepodařilo nainstalovat, prosím zkontrolujte aplikační logy pro více informací.",
    "addon_latest_version"      => "Doplňek již používá nejnovější verzi.",
    "addon_update_success"      => "Doplňek byl úspěšně aktualizován.",
    "addon_update_error"        => "Doplňek se nepodařilo aktualizovat a byl vrácen zpět, prosím zkontrolujte aplikační logy pro více informací.",
    "addon_basic_info"          => "Prosím poskytněte základní informace o doplňku.",
    "addon_author_name"         => "Jméno autora",
    "addon_author_uri"          => "Autorova URI (odkaz na vaši stránku)",
    "addon_author_uri_short"    => "Autorova URI",
    "addon_vendor_name"         => "Jméno dodavatele (název vaší společnosti, může být stejné jako jméno autora)",
    "addon_vendor_name_short"   => "Název dodavatele",
    "addon_name"                => "Název doplňku",
    "addon_description"         => "Popis doplňku",
    "addon_creating"            => "Vytvářím doplňek...",
    "addon_ready"               => "Doplňek je připraven v :directory! Vytvořte něco úžasného.",
    "addon_version_not_supported" => "Dostupná verze doplňku nepodporuje nainstalovanou verzi SupportPal.",
    "no_addons_found"           => "Nebyly nalezeny žádné doplňky.",
    "price"                     => "Cena",
    "one_time"                  => "Jednorázově",
    "monthly"                   => "Měsíčně",
    "quarterly"                 => "Čtvrtletně",
    "semiannually"              => "Půlročně",
    "annually"                  => "Ročně",
    "biennially"                => "Každé dva roky",
    "triennially"               => "Každé tři roky",
    "tag"                       => "Štítek|Štítky",
    "login_to_install"          => "<a href=':link'>Přihlaste se</a> k instalaci",
    "marketplace_login_error"   => "Přihlášení se nezdařilo. Prosím <a target='_blank' href='https://www.supportpal.com/manage/logout.php'>odhlaste se</a> a pak se ujistěte, že se přihlašujete na účet, který má vaši licenci SupportPal.",
    "payment_required"          => "Požadovaná platba",
    "addon_purchase_info"       => "Kliknutím na výše uvedené tlačítko bude váš účet naúčtován částkou podle vybraného fakturačního cyklu a souhlasíte s našimi <a href=':link' target='_blank'>podmínkami služby</a>.",
    "addon_cancel_info"         => "Zrušením okamžitě deaktivujete doplňek a zastavíte jakékoli další platby.",
    "system_health"             => "Zdraví systému",
    "system_health_desc"        => "Kontroly zdraví monitorují, že systém funguje správně a upozorní vás, když nastanou problémy.",
    "system_health_errors"      => "Jedna nebo více <a href=':link'>kontrol zdraví systému</a> selhává.",
    "app_log_check"             => "Počet chyb v aplikačním logu",
    "app_log_errors_exist"      => "Aplikační log pro dnešní den obsahuje chyby, prosím zkontrolujte logy v Nástrojích -> Logy -> Správce logů -> :filename",
    "redis_check"               => "Připojení k Redis",
    "web_server_check"          => "Webový server",
    "web_server_error"          => "Nelze se připojit k :url",
    "redirection_rules_check"   => "Pravidla přesměrování",
    "redirection_rule_error"    => "Pravidla přesměrování serveru musí odstranit /index.php z cesty. Jinak mohou útočníci potenciálně získat přístup k vašim souborům.",
    "cron_check"                => "Cron",
    "cron_check_error"          => "Cron nefunguje.",
    "cron_check_warning"        => "Následující úkoly: (:tasks) neprobíhají v očekávaných intervalech.",
    "database_check"            => "Připojení k databázi",
    "disk_usage_check"          => "Volné místo na disku",
    "email_queue_check"         => "Fronta odchozích emailů",
    "email_queue_warning"       => "Fronta emailů obsahuje :number emailů, které vyžadují ruční zásah.",
    "pipe_check"                => "Email Piping",
    "file_not_found"            => "Soubor ':path' nebyl nalezen.",
    "file_not_executable"       => "Soubor ':path' není spustitelný.",
    "dependency_resolution"     => "Nelze provést kontrolu zdraví systému.",
    "debug_mode_warning"        => "Režim ladění by měl být používán pouze dočasně.",
    "custom_colour"             => "Vlastní barva",
    "remove_colour"             => "Odstranit barvu",
    "background_colour"         => "Barva pozadí",
    "open_link"                 => "Otevřít odkaz",
    "open_link_in"              => "Otevřít odkaz v...",
    "new_window"                => "Nové okno",
    "current_window"            => "Aktuální okno",
    "edit_image"                => "Upravit obrázek...",
    "alternative_description"   => "Alternativní popis",
    "browse_image"              => "Procházet obrázky",
    "drop_image"                => "Sem přetáhněte obrázek",

    /*
     * 4.2.0
     */
    "keyboard_shortcuts"        => "Klávesové zkratky",
    "enable_keyboard_shortcuts" => "Povolit klávesové zkratky",
    "shortcut_global"           => "Globální zkratky",
    "shortcut_toggle"           => "Přepnout dialog klávesových zkratek",
    "shortcut_start_search"     => "Začít hledání",
    "shortcut_goto_new_ticket"  => "Přejít na stránku otevření nového tiketu",
    "shortcut_ticket_view"      => "Zkratky zobrazení tiketu",
    "shortcut_focus_reply"      => "Zaostřit na formulář odpovědi",
    "shortcut_focus_notes"      => "Zaostřit na formulář poznámek",
    "shortcut_focus_forward"    => "Zaostřit na formulář přeposlání",
    "shortcut_toggle_user_tab"  => "Přepnout kartu detailů uživatele v bočním panelu",
    "shortcut_take_ticket"      => "Převzít tiket",
    "shortcut_close_ticket"     => "Uzavřít tiket",
    "shortcut_lock_ticket"      => "Uzavřít a uzamknout tiket",
    "shortcut_unlock_ticket"    => "Odemknout tiket",
    "shortcut_trash_ticket"     => "Přesunout tiket do koše",
    "shortcut_block_user"       => "Zablokovat uživatele a přesunout tiket do koše",
    "shortcut_watch_ticket"     => "Sledovat tiket",
    "shortcut_unwatch_ticket"   => "Přestat sledovat tiket",
    "shortcut_merge_ticket"     => "Sloučit tiket",
    "shortcut_unmerge_ticket"   => "Zrušit sloučení tiketu",
    "shortcut_expand_all"       => "Rozbalit všechny zprávy",
    "shortcut_collapse_all"     => "Sbalit všechny zprávy",
    "shortcut_print_ticket"     => "Tisknout detaily tiketu a zprávy",

    /*
     * 4.3.0
     */
    "db_connection_error"       => "Chyba připojení k databázi, prosím zkontrolujte :path",

    /*
     * 5.0.0
     */
    "favicon_dark_mode"         => "Favicon pro tmavý režim",
    "favicon_dark_mode_desc"    => "Pokud bylo vaše favicon navrženo pouze pro světlé pozadí, nastavte jiné favicon pro tmavý režim. Tento bude použit pouze, pokud váš prohlížeč a/nebo operační systém běží v tmavém režimu.",
    "template_mode_system_desc" => "Výběr systému synchronizuje režim šablony na světlý nebo tmavý režim v závislosti na nastavení vašeho operačního systému.",

    /*
     * 5.0.1
     */
    "starttls_or_none"          => "STARTTLS / Žádný",

    /*
     * 5.1.0
     */
    "email_attempt_at_desc"     => "Email se nepodařilo odeslat. Pokus o opětovné odeslání :time.", // :time příklad, "za 5 minut"
    "websockets_connection"     => "Připojení k WebSocket",
    "websockets_not_running"    => "Nelze se připojit k serveru webových soketů.",
    "search_driver_check"       => "Ověření vyhledávacího ovladače",
    "search_driver_not_working" => "Konfigurovaný vyhledávací ovladač nefunguje správně.",

    /*
     * 5.2.0
     */
    "temporary_path"            => "Dočasná cesta",
    "temporary_path_desc"       => "Dočasná cesta se používá pro ukládání souborů během aktualizace. Výchozí systémová dočasná cesta je používána ve výchozím nastavení. Cesta musí mít alespoň 3 GB volného místa.",
    "background_jobs_desc"      => "Níže je seznam pozadí, které selhaly nedávno.",
    "failed_jobs"               => "Selhalé úlohy",
    "horizon_dashboard"         => "Horizon Dashboard",
    "job"                       => "Úloha|Úlohy",
    "job_payload"               => "Úloha Payload",
    "job_exception"             => "Výjimka úlohy",
    "failed_at"                 => "Selhalo v",
    "queue"                     => "Fronta",
    "exception"                 => "Výjimka",
    "data"                      => "Data",
    "failed_background_jobs"    => "Jedna nebo více <a target='_blank' href=':link'>úloh na pozadí</a> selhaly a vyžadují ruční zásah.",

    /*
     * 5.3.0
     */
    "incoming_duplicate"        => "Příchozí (Duplicitní)",

    /*
     * 5.4.0
     */
    "email_method_overridden"   => "Metoda emailu byla přepsána v <a href=':link' target='_blank'>nastavení výchozí značky</a>.",
    "addon_not_found"           => "Doplňek nenalezen.",
    "deactivating_addon"        => "Deaktivace doplňku...",
    "addon_already_activated"   => "Doplňek již aktivován.",
    "addon_already_deactivated" => "Doplňek již deaktivován.",
    "addon_cannot_deactivate"   => "Doplňek nelze deaktivovat.",
    "addon_activation_failed"   => "Aktivace doplňku selhala, zkontrolujte aplikační log pro více informací.",
    "addon_deactivation_failed" => "Deaktivace doplňku selhala, zkontrolujte aplikační log pro více informací.",
    "site_key"                  => "Klíč webu",
    "secret_key"                => "Tajný klíč",
    "turnstile_desc"            => "Zaregistrujte nový Turnstile widget na <a target='_blank' href=\"https://developers.cloudflare.com/turnstile/get-started/\">Cloudflare</a>. Zkopírujte klíč webu a tajný klíč výše.",
    "hcaptcha_desc"             => "Zaregistrujte se na <a target='_blank' href=\"https://hcaptcha.com/\">hCaptcha</a>. Zkopírujte klíč webu a tajný klíč výše.",
    "captcha_type_desc"         => "Vyberte Captcha, která bude použita v celém systému.",

    /*
     * 5.5.0
     */
    "ticket_channel_2"          => "Poskytujeme několik výchozích kanálů pro tikety. Další kanály a doplňky lze nainstalovat z Marketplace.",
    "selected_country_aria_label" => "Vybraná země",
    "no_country_selected"       => "Žádná země není vybrána",
    "country_list_aria_label"   => "Seznam zemí",
    "zero_search_results"       => "Žádné výsledky nenalezeny",
    "one_search_result"         => "1 výsledek nalezen",
    "multiple_search_results"   => "\${count} výsledků nalezeno", // ${count} je JS proměnná a neměla by být měněna.
    "advanced"                  => "Pokročilé",
    "table"                     => "Tabulka",
    "cell"                      => "Buňka",
    "cell_properties"           => "Vlastnosti buňky",
    "merge_cells"               => "Sloučit buňky",
    "split_cell"                => "Rozdělit buňku",
    "row"                       => "Řádek",
    "inset_row_before"          => "Vložit řádek před",
    "inset_row_after"           => "Vložit řádek za",
    "delete_row"                => "Smazat řádek",
    "row_properties"            => "Vlastnosti řádku",
    "cut_row"                   => "Vyjmout řádek",
    "copy_row"                  => "Kopírovat řádek",
    "paste_row_before"          => "Vložit řádek před",
    "paste_row_after"           => "Vložit řádek za",
    "column"                    => "Sloupec",
    "insert_column_before"      => "Vložit sloupec před",
    "insert_column_after"       => "Vložit sloupec za",
    "delete_column"             => "Smazat sloupec",
    "cut_column"                => "Vyjmout sloupec",
    "copy_column"               => "Kopírovat sloupec",
    "paste_column_before"       => "Vložit sloupec před",
    "paste_column_after"        => "Vložit sloupec za",
    "table_properties"          => "Vlastnosti tabulky",
    "delete_table"              => "Smazat tabulku",
    "width"                     => "Šířka",
    "height"                    => "Výška",
    "cell_spacing"              => "Mezera mezi buňkami",
    "cell_padding"              => "Vnitřní odsazení buňky",
    "border_width"              => "Šířka okraje",
    "caption"                   => "Popis",
    "show_caption"              => "Zobrazit popis",
    "alignment"                 => "Zarovnání",
    "border_style"              => "Styl okraje",
    "border_colour"             => "Barva okraje",
    "cell_type"                 => "Typ buňky",
    "scope"                     => "Rozsah",
    "horizontal_align"          => "Horizontální zarovnání",
    "vertical_align"            => "Vertikální zarovnání",
    "header_cell"               => "Hlavičková buňka",
    "row_group"                 => "Skupina řádků",
    "column_group"              => "Skupina sloupců",
    "left"                      => "Vlevo",
    "center"                    => "Na střed",
    "right"                     => "Vpravo",
    "top"                       => "Nahoru",
    "middle"                    => "Střed",
    "bottom"                    => "Dole",
    "anchor"                    => "Kotva",
    "example"                   => "Příklad",

    /*
     * 5.6.0
     */
    "email_template_enabled_desc" => "Deaktivace šablony emailu zabrání odesílání notifikací, které tuto šablonu používají.",
    "template_disabled"         => "Šablona deaktivována",
    "reset_email_template"      => "Toto obnoví editor na výchozí obsah šablony emailu. Jakékoliv předchozí změny budou ztraceny po uložení šablony.",

);