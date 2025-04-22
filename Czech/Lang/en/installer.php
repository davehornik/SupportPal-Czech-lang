<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Systémové požadavky nesplněny",

    // Index
    "supportpal_installer"      => "Instalátor SupportPal",
    "select_language"           => "Vybrat jazyk",
    "install_type"              => "Typ instalace",
    "install"                   => "Čistá instalace",
    "upgrade"                   => "Aktualizace existující instalace",
    "support"                   => "Licenční kód použitý pro tuto instalaci nemá platné předplatné podpory a aktualizací, a proto není způsobilý k instalaci této verze SupportPal. Prosím <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>obnovte</a> vaše předplatné podpory a aktualizací nebo vraťte instalační soubory zpět.",

    // Upgrade
    "successfully_updated"      => "Gratulujeme, SupportPal byl úspěšně aktualizován.",

    // Install
    // Step 1
    "step_1"                    => "Krok 1 z 7: Přijetí EULA",
    "step_1_desc"               => "Prosím, přečtěte si naši licenční smlouvu na software níže. Pokračováním souhlasíte s licencí.",
    "i_accept_and_continue"     => "Přijímám a pokračuji",

    // Step 2
    "step_2"                    => "Krok 2 z 7: Systémové požadavky",
    "not_available"             => "Není k dispozici",
    "php_version"               => "Verze PHP",
    "php_version_not_found"     => "Není k dispozici, nalezena verze PHP: :version",
    "php_extensions"            => "Rozšíření PHP",
    "file_writeable"            => "Oprávnění souborů",
    "file_writeable_desc"       => "Vše níže uvedené by mělo být zapisovatelné webovým serverem. Doporučujeme používat oprávnění souborů 755, i když některé systémy mohou vyžadovat 777, pokud soubory nejsou vlastněny uživatelem webového serveru. Složky by měly být zapisovatelné rekurzivně.",

    // Step 3
    "step_3"                    => "Krok 3 z 7: Databáze",
    "step_3_desc"               => "Zadejte podrobnosti o databázi, kterou jste pro SupportPal nastavili.",
    "hostname"                  => "Název hostitele",
    "port"                      => "Port",
    "port_desc"                 => "(Změňte pouze pokud není výchozí port 3306)",
    "database"                  => "Databáze",
    "database_not_empty"        => "Databáze nesmí obsahovat žádné tabulky.",

    // Step 4
    "step_4"                    => "Krok 4 z 7: Vytvoření tabulek",
    "step_4_desc"               => "Migrace bude provedena na pozadí a podrobný záznam bude zapsán níže, což může trvat několik minut. Po dokončení klikněte na tlačítko pokračovat, které se objeví.",

    // Step 5
    "step_5"                    => "Krok 5 z 7: Účet operátora",
    "step_5_desc"               => "SupportPal vyžaduje platnou licenci k fungování, zadejte ji níže.",
    "license_desc"              => "Váš licenční klíč SupportPal má 23 znaků a začíná na SP-",
    "operator_desc"             => "Vytvořte účet administrátora pro panel operátora zadáním všech podrobností níže.",
    "validating_license"        => "Ověřování licence...",

    // Step 6
    "step_6"                    => "Krok 6 z 7: Rychlé nastavení",
    "step_6_desc"               => "Zadejte podrobnosti o vaší společnosti a webové stránce níže.",
    "locale_desc"               => "Nastavte místní nastavení pro váš systém.",
    "operator_success"          => "Váš účet administrátora byl vytvořen.",

    // Step 7
    "step_7"                    => "Krok 7 z 7: Nainstalováno!",
    "successfully_installed"    => "Gratulujeme, SupportPal byl úspěšně nainstalován.",
    "operator_panel"            => "Panel operátora",
    "help_desc"                 => "Pokud potřebujete pomoc s konfigurací nebo používáním SupportPal, máme dva hlavní zdroje informací:",
    "submit_a_ticket"           => "Odeslat tiket",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Splňujete :required z :total požadovaných požadavků.",
    "optional_requirements"     => "Splňujete :optional z :total volitelných požadavků.",
    "both_requirements"         => "Splňujete :required z :total_required požadovaných požadavků a :optional z :total_optional volitelných požadavků.",
    "php_version_is"            => "Vaše verze PHP je :version.",
    "enabled"                   => "Povoleno",
    "disabled"                  => "Zakázáno",
    "php_settings"              => "Nastavení PHP",
    "ipv6_support"              => "Podpora IPv6",
    "memory_limit"              => ">= 128 MB paměti",
    "memory_limit_error"        => "Váš limit paměti je ':limit'.",
    "permission_denied"         => "Oprávnění odepřeno",
    "writable"                  => "Zapisovatelné",
    "help_php_version"          => "Pro pomoc s instalací nové verze PHP kontaktujte svého poskytovatele hostingu nebo administrátora serveru.",
    "help_php_extensions"       => "Rozšíření PHP se liší v závislosti na vašem serveru, hostiteli a dalších systémových proměnných. Pro pomoc s instalací chybějících rozšíření kontaktujte svého poskytovatele hostingu nebo administrátora serveru.",
    "help_php_settings"         => "Pro další pomoc si přečtěte <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Nápovědu k nastavení PHP</a>.",
    "disabled_functions"        => "Zakázané funkce",
    "help_mysql_version"        => "Pro pomoc s instalací nové verze MySQL kontaktujte svého poskytovatele hostingu nebo administrátora serveru.",
    "mysql_version"             => "Verze MySQL",
    "mysql_version_not_found"   => "Není k dispozici, nalezena verze MySQL: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Pokud váš server podporuje síťovou komunikaci IPv6, nainstalujte rozšíření php-sockets.",
    "email_address_desc"        => "Zadejte hlavní e-mailovou adresu vaší společnosti, tato bude nastavena jako výchozí odesílací e-mailová adresa a e-mailová adresa pro vaše první oddělení. Další e-mailové adresy budete moci přidat později.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "Verze ionCube Loaders :required nebo vyšší je vyžadována. Nalezeno: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "Podpora PNG a JPEG",
    "allow_url_fopen"           => "'allow_url_fopen' povoleno",
    "allow_url_fopen_failure"   => "Povolte 'allow_url_fopen' v souboru php.ini pro použití Gravataru a dalších funkcí.",
    "allowed_methods"           => "Povolené metody HTTP",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Verze serveru >= :min",
    "mysql_server_version_desc" => "Pro spuštění SupportPal je vyžadován MySQL :min nebo vyšší. Nalezeno: ':version'.",

    "upgrade_step"              => "Krok :num z :total: ",
    "accept_eula"               => "Přijmout EULA",
    "system_requirements"       => "Systémové požadavky",
    "update_database"           => "Aktualizovat databázi",
    "upgrade_complete"          => "Aktualizace dokončena",

    "upgrade_support"           => "Pokud narazíte na nějaké problémy nebo potřebujete pomoc s používáním nových funkcí v SupportPal, přečtěte si naši dokumentaci nebo si u nás otevřete tiket.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Pro zahájení stiskněte tlačítko níže.",
    "locked"                    => "Instalace/aktualizace probíhá",

    "error_and_empty_database"  => "Došlo k chybě. Před opětovným spuštěním může být potřeba vyprázdnit databázi.",
    "login_with_details"        => "Můžete se přihlásit pomocí údajů zadaných dříve.",
    "command_not_available"     => "Příkaz není k dispozici. Pokud si myslíte, že se jedná o chybu, spusťte 'php artisan cache:clear' a poté tento příkaz znovu.",
    "read_upgrade_guide"        => "Náš průvodce aktualizací obsahuje užitečné informace o změnách a osvědčených postupech pro aktualizaci:\nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[VAROVÁNÍ] Před pokračováním se ujistěte, že jste vytvořili zálohu databáze SupportPal a aplikačních souborů.\nProsím, potvrďte, že jste vytvořili zálohu, ověřili, že není poškozená, a jste připraveni pokračovat.",
    "error_and_revert_database" => "Došlo k chybě. Před opětovným spuštěním vraťte databázi do zálohy.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "Konfigurační soubor databáze již existuje. Pokud jste si jisti, že aplikace ještě není nainstalována, smažte /config/:environment/database.php a začněte znovu.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Děkujeme, že jste si vybrali SupportPal. Ověřte, zda je níže uvedený typ instalace správný, a poté klikněte na pokračovat.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Vkládání dat",
    "seeded"                    => "Data vložena",
    "migrating"                 => "Migrace",
    "migrated"                  => "Migrace dokončena",
    "database_setup_complete"   => "Nastavení databáze dokončeno.",
    "created_repository"        => "Úspěšně vytvořen repozitář ':name'.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Příkaz není k dispozici. Spusťte app:update pro stažení a aktualizaci na nejnovější dostupnou verzi: %s.",
    "suggest_run_upgrade"       => "Aktualizace již probíhá. Spusťte místo toho app:upgrade.",
    "failed_to_download"        => "Nepodařilo se stáhnout soubor: :message",
    "backup_failed_abort"       => "Záloha selhala. Aktualizace se přerušuje.",
    "command_failed"            => "Příkaz :command selhal s výstupem: :message.",
    "already_latest_version"    => "Již používáte nejnovější verzi (:version).",
    "update_not_supported"      => "Automatická aktualizace na nejnovější verzi (:version) není podporována.",
    "current_and_new_version"   => "Máte verzi :current_version. Nejnovější dostupná verze je :new_version.",
    "update_to_version"         => "Máte verzi :current_version. Chcete aktualizovat na :new_version?",
    "downloading_version"       => "Stahování verze :version do :path...",
    "checksum_not_matched"      => "Stažený soubor neprošel ověřením kontrolního součtu.",

    "check_readiness"           => "Kontrola, zda je aplikace připravena na aktualizaci...",
    "read_only"                 => "Systém souborů na \":path\" je pouze pro čtení. Aktualizace nemohou být aplikovány na systém souborů pouze pro čtení.",
    "file_ownership"            => "Soubor \":path\" je vlastněn uživatelem \":owner\", ale PHP běží jako \":actual\". Vlastník souboru a uživatel PHP musí být během aktualizace stejný pro všechny soubory aplikace.",
    "minimum_disk_space"        => "Adresář \":path\" má nedostatek místa. Musí být k dispozici alespoň :space megabajtů volného místa.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Detekováno nasazení přes Docker. Pro aktualizaci postupujte podle https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Získat tipy pro řešení problémů",

    /*
     * 4.2.0
     */
    "app_manager_version_not_supported" => "Správce aplikací (:version) není podporován.",
    "running_upgrade"           => "Probíhá aktualizace aplikace",
    "upgrade_complete_success"  => "Aktualizace aplikace byla úspěšně dokončena.",
    "app_manager_requires_update" => "Před spuštěním aktualizace helpdesku je nutné aktualizovat app-manager. :command",

    /*
     * 5.0.0
     */
    "mysql_client_version"      => "Verze klienta >= :min",
    "mysql_client_version_desc" => "Pro spuštění SupportPal je vyžadována verze klienta MySQL :min nebo vyšší. Nalezeno: ':version'.",
    "post_install"              => "Aby systém fungoval správně, musí být nastaven cron job. Přečtěte si naši <a href='https://docs.supportpal.com/current/Administration'>dokumentaci</a> pro podrobnosti o tomto a dalších doporučených krocích ke zlepšení funkčnosti a bezpečnosti.",
    "help_allowed_methods"      => "Váš webový server musí povolit všechny níže uvedené metody HTTP. Prosím, přečtěte si naši dokumentaci k <a href='https://docs.supportpal.com/current/System+Requirements#WebServer' target='_blank'>nové instalaci</a> pro více informací.",

    /*
     * 5.3.0
     */
    "check_file_permissions"    => "Kontrola oprávnění souborů...",

);