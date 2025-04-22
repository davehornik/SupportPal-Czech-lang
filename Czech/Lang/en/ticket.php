<?php

return array(
    // Obecné prvky
    'feedback_question'         => 'Otázka zobrazená uživateli',
    'open_new'                 => 'Vytvořit nový požadavek',
    'select_department'        => 'Vyberte oddělení',
    'select_department_desc'   => 'Vyberte oddělení odpovídající vašemu problému.',
    'no_departments'           => 'Žádná oddělení nenalezena.',
    'department_user_details'  => 'Údaje o oddělení a uživateli',
    'enter_your_details'       => 'Zadejte své údaje',
    'enter_ticket_details'     => 'Zadejte podrobnosti požadavku',
    'enter_subject_message'    => 'Zadejte předmět a zprávu',
    'invalid_user'             => 'Zadejte platné uživatelské údaje pro pokračování.',

    'registered_users'         => 'Pouze registrovaní uživatelé',

    // Požadavky
    'tickets'                  => 'Požadavky',
    'ticket'                   => 'Požadavek|Požadavky',
    'subject'                  => 'Předmět',
    'no_subject'               => 'Bez předmětu',
    'last_action'              => 'Poslední akce',
    'due_time'                 => 'Termín splnění',
    'created_time'             => 'Čas vytvoření',
    'submitted'                => 'Odesláno',
    'ticket_reply'             => 'Odpověď na požadavek',
    'ticket_note'              => 'Poznámka k požadavku',
    'ticket_type'              => 'Typ požadavku',

    // Uživatelské požadavky
    'user_ticket'              => 'Uživatelský požadavek',
    'user_ticket_desc'         => 'Vytvořit požadavek jménem nového nebo stávajícího uživatele.',
    'existing_user'            => 'Stávající uživatel',
    'new_user'                 => 'Nový uživatel',
    'internal'                 => 'Interní',
    'internal_ticket_desc'     => 'Vytvořit interní požadavek. Tento požadavek bude přiřazen vám, nikoli uživateli.',
    'ticket_opened'            => 'Váš požadavek byl úspěšně vytvořen.',
    'enter_user_details'       => 'Zadejte své údaje nebo se přihlaste k účtu.',
    'already_have_account'     => 'Máte účet? Přihlaste se a vytvořte požadavek. Pokud jste zapomněli heslo, použijte funkci obnovy.',

    'recent_tickets'           => 'Nedávné požadavky',
    'last_message_text'        => 'Text poslední zprávy',

    // Nastavení
    'settings'                 => 'Nastavení požadavků',

    // Priorita
    'priority'                 => 'Priorita|Priority',

    // Kanály a účty
    'channel'                  => 'Kanál|Kanály',
    'account'                  => 'Účet|Účty',

    // Operátoři
    'assign_operator'          => 'Přiřadit operátora',
    'assigned_operator'        => 'Přiřazení operátoři',
    'assigned_to'              => 'Přiřazeno',
    'assigned'                 => 'Přiřazeno',

    // Oddělení
    'department'               => 'Oddělení|Oddělení',
    'change_department_order'  => 'Přetáhněte řádky pro změnu pořadí, v jakém se oddělení zobrazují uživatelům při vytváření požadavku.',
    'department_applicable'    => 'Dostupná oddělení',
    'department_applicable_desc' => 'Oddělení, ve kterých bude priorita dostupná pro výběr uživateli. Platí pouze pro rozhraní, všechny priority budou dostupné operátorům pro všechna oddělení.',

    'send_now'                 => 'Odeslat nyní',

    // Štítky
    'tag'                      => 'Štítek|Štítky',

    // Sledování a zobrazení požadavku
    'track_ticket'             => 'Sledovat požadavek',
    'view_ticket'              => 'Zobrazit požadavek',

    // Nedávná aktivita
    'recent_activity'          => 'Nedávná aktivita',

    // Číslo požadavku
    'ticket_number'            => 'Číslo požadavku',
    'ticket_format'            => 'Formát čísla požadavku',

    // Oddělení - podrobnosti
    'department_public_desc'   => 'Zda je oddělení viditelné pro uživatele na webovém helpdesku.',
    'department_parent_desc'   => 'Pokud je oddělení pododdělením, vyberte nadřazené oddělení. Pododdělení jsou určena pro interní eskalaci a správu, takže nastavením této možnosti se omezí některé volby níže.',
    'department_priority'      => 'Priority oddělení',
    'department_priority_desc' => 'Priority dostupné uživatelům při vytváření požadavku v tomto oddělení. Musí být vybrána alespoň jedna. Ve výchozím nastavení jsou dostupné všechny priority.',
    'department_no_format'     => 'Volitelné, nastavte pouze pro přepsání výchozího formátu čísla požadavku, jinak ponechte prázdné.',
    'department_operator'      => 'Operátoři oddělení',
    'department_default_assign' => 'Výchozí přiřazení',
    'dept_default_assign_desc' => 'Pokud chcete, aby požadavky v tomto oddělení byly automaticky přiřazeny jednomu nebo více operátorům.',

    // E-maily oddělení
    'email_accounts_desc'      => 'Nastavte e-mailové adresy pro oddělení. Příchozí e-maily na tyto adresy vytvoří požadavky v tomto oddělení. První e-mailová adresa se použije jako výchozí odesílací adresa pro odchozí e-maily.',
    'department_port'          => 'Výchozí hodnoty jsou: 110 pro POP3, 995 pro zabezpečený POP3, 143 pro IMAP a 993 pro zabezpečený IMAP. Ponechte prázdné pro výchozí hodnotu.',
    'department_encryption'    => 'Někteří poskytovatelé e-mailů vyžadují šifrování SSL nebo TLS. Pokud si nejste jisti, ponechte nastavení na Žádné.',
    'department_delete_mail'   => 'Při použití IMAP můžete zvolit, zda se e-maily na serveru po importu jako požadavky nesmažou.',
    'protocol'                 => 'Protokol',
    'server'                   => 'E-mailový server',
    'port'                     => 'Port',
    'encryption'               => 'Šifrování',
    'delete_downloaded'        => 'Smazat stažené e-maily',
    'consume_all'              => 'Zpracovat všechny e-maily',
    'email_download'           => 'Stažení e-mailů',
    'email_piping'             => 'E-mailový piping',
    'email_piping_desc'        => 'Nastavte přesměrování e-mailů podle následujícího příkladu. Cesta k PHP executable se na vašem serveru může lišit.',
    'remote_email_piping'      => 'Vzdálený e-mailový piping',

    // Možnosti e-mailů oddělení
    'email_options'            => 'Možnosti e-mailů',
    'email_user_on_email'      => 'Upozornit uživatele na požadavky otevřené e-mailem',
    'email_user_on_email_desc' => 'Zda mají být uživatelé upozorněni e-mailem, když jejich e-mail vytvoří nový požadavek.',
    'email_operators'          => 'Upozornit operátory',
    'email_operators_desc'     => 'Zda přeposílat odpovědi operátorů ostatním operátorům. Ve výchozím nastavení je zaškrtnuta možnost „upozornit operátory“ v panelu operátora a automaticky se odesílá e-mail pro odpovědi operátorů e-mailem.',

    // Šablony e-mailů oddělení
    'new_ticket_opened'        => 'Nový požadavek vytvořen',
    'waiting_for_response'     => 'Čeká na odpověď',
    'ticket_auto_closed'       => 'Požadavek automaticky uzavřen',
    'closed_by_operator'       => 'Uzavřeno operátorem',

    // Zpětná vazba
    'feedback'                 => 'Zpětná vazba',
    'feedback_form'            => 'Formulář zpětné vazby|Formuláře zpětné vazby',
    'feedback_form_desc'       => 'Formuláře zpětné vazby se zpracovávají v pořadí, v jakém jsou zobrazeny. Přetáhněte řádky pro změnu pořadí a priority formulářů.',
    'view_feedback'            => 'Zobrazit zpětnou vazbu',
    'ticket_feedback'          => 'Zpětná vazba k požadavku',
    'feedback_fields_error'    => 'Při načítání polí zpětné vazby došlo k chybě.',
    'time_after_resolved'      => 'Čas po vyřešení',
    'time_after_resolved_desc' => 'Čas po označení požadavku jako vyřešeného, kdy se uživateli odešle formulář zpětné vazby.',
    'expires_after'            => 'Platnost vyprší po',
    'expires_after_desc'       => 'Čas, po kterém již nelze na formulář zpětné vazby odpovědět. Doporučujeme nastavit 7 dní, ale zadáním 0 do všech polí lze nastavit neomezenou platnost.',
    'form_conditions'          => 'Podmínky formuláře',
    'form_conditions_desc'     => 'Definujte podmínky, podle kterých se nově vyřešené požadavky kontrolují, zda spadají do tohoto formuláře. Pokud požadavek vyhovuje více formulářům, vybere se podle priority formuláře, kterou lze upravit v seznamu formulářů přetažením.',
    'form_fields'              => 'Pole formuláře',
    'rating'                   => 'Hodnocení',
    'feedback_desc'            => 'Děkujeme, že jste nás kontaktovali. Doufáme, že jsme váš požadavek vyřešili. Ohodnoťte prosím svou zkušenost níže.',
    'good_satisfied'           => 'Dobré, jsem spokojen',
    'bad_not_satisfied'        => 'Špatné, nejsem spokojen',
    'feedback_not_found'       => 'Vaši zpětnou vazbu nelze přijmout. Pokud chcete sdílet zpětnou vazbu, vytvořte nový požadavek.',
    'feedback_malformed_token' => 'Vaši zpětnou vazbu nelze přijmout kvůli chybnému tokenu. Pokud chcete sdílet zpětnou vazbu, vytvořte nový požadavek.',
    'feedback_expired'         => 'Požadavek byl vyřešen před delší dobou a již ho nelze ohodnotit.',
    'feedback_questions'       => 'Pokud máte chvilku, odpovězte na následující otázky, abychom mohli dále zlepšovat naši podporu.',
    'feedback_for_ticket'      => 'Zpětná vazba k požadavku č. :number',
    'feedback_rating_desc'     => 'Podpora poskytnutá k tomuto požadavku byla uživatelem ohodnocena jako <strong>:rating</strong>.',

    // Vlastní pole
    'customfield'              => 'Vlastní pole požadavku|Vlastní pole požadavků',
    'customfield_order'        => 'Přetáhněte řádky pro změnu pořadí, v jakém se vlastní pole zobrazují uživatelům při vytváření požadavků na webu.',

    // Předpřipravené odpovědi
    'cannedresponse'           => 'Předpřipravená odpověď|Předpřipravené odpovědi',

    // Filtry
    'filter'                   => 'Filtr|Filtry',
    'filter_condition'         => 'Podmínky filtru',
    'filter_condition_desc'    => 'Definujte podmínky, podle kterých se požadavky zobrazí pod tímto filtrem.',

    // Makra
    'macro'                    => 'Makro|Makra',
    'macro_condition'          => 'Podmínky makra',
    'macro_action'             => 'Akce makra',
    'macro_action_desc'        => 'Definujte akce, které se provedou při spuštění makra. Ujistěte se, že akce jsou platné pro oddělení, ve kterém je požadavek, jinak budou ignorovány.',

    // E-mailové adresy
    'from'                     => 'Od',
    'to'                       => 'Komu',
    'cc'                       => 'Kopie',

    // Povolené přílohy
    'allowed_files'            => 'Povolené typy příloh',

    // Koncepty
    'draft_saved'              => 'Koncept uložen v :time',
    'save_draft'               => 'Uložit koncept',
    'discard_draft'            => 'Zahodit koncept',

    // Zamčené požadavky
    'error_ticket_locked'      => 'Tento požadavek je zamčen a nelze ho aktualizovat. Pokud potřebujete další podporu, vytvořte nový požadavek.',

    // Následné akce
    'follow_up'                => 'Následná akce',
    'follow_up_status_desc'    => 'Nastavte požadavku jiný stav až do data následné akce.',
    'exact_date_time'          => 'Přesné datum a čas',
    'time_from_now'            => 'Čas od nynějška',

    // Plánování
    'schedule'                 => 'Plán|Plány',
    'business_hour'            => 'Pracovní doba',
    'business_hour_desc'       => 'Pracovní doba určuje časy, kdy jsou zaměstnanci dostupní pro odpovědi na požadavky v rámci plánu. Tyto časy se berou v úvahu při výpočtu termínů splnění požadavků.',

    // Svátky
    'holiday'                  => 'Svátek|Svátky',
    'holiday_or_on_the'        => 'nebo dne',
    'holiday_month_year_desc'  => 'Rok je volitelný, pokud je svátek pravidelný. Vyberte rok pouze tehdy, pokud se svátek koná v konkrétním roce.',

    // SLA plány
    'sla_plan'                 => 'SLA plán|SLA plány',
    'specific_schedule'        => 'Specifické plány',
    'calendar_hours_24'        => 'Kalendářní hodiny (24 hodin)',
    'plan'                     => 'Plán',
    'sla_condition'            => 'Podmínky SLA',
    'sla_condition_desc'       => 'Definujte podmínky, podle kterých se nové požadavky kontrolují, zda spadají do tohoto plánu. Pokud požadavek vyhovuje více SLA plánům, vybere se podle priority plánu, kterou lze upravit v seznamu plánů přetažením.',
    'escalation_rule'          => 'Pravidla eskalace',
    'escalation_rule_desc'     => 'Definujte akce, které se provedou, když je požadavek pod tímto SLA plánem blízko nebo po termínu splnění. Ujistěte se, že pravidla jsou platná pro oddělení požadavku, jinak budou ignorována.',
    'condition'                => 'Podmínka',
    'condition_group'          => 'Skupina podmínek',
    'all_groups'               => 'VŠECHNY skupiny musí být pravdivé',
    'any_group'                => 'JAKÁKOLI skupina může být pravdivá',
    'all_conditions'           => 'VŠECHNY podmínky ve skupině musí být pravdivé',
    'any_condition'            => 'JAKÁKOLI podmínka ve skupině může být pravdivá',
    'sla_plan_desc'            => 'SLA plány se zpracovávají v pořadí, v jakém jsou zobrazeny. Přetáhněte řádky pro změnu pořadí a priority plánů.',

    // Možnosti odpovědi
    'reply_options'             => 'Možnosti odpovědi',
    'send_email_to_users'       => 'Odeslat e-mail uživatelům',
    'send_email_to_operators'   => 'Odeslat e-mail operátorům',
    'back_to_grid'              => 'Zpět na seznam požadavků',
    'take'                      => 'Převzít',
    'take_ownership'            => 'Převzít vlastnictví',
    'pause_duetime'             => 'Pozastavit termín splnění',
    'add_to_canned_responses'   => 'Přidat k předpřipraveným odpovědím',
    'visible_to_all_operators'  => 'Zviditelnit všem operátorům',
    'set_status'                => 'Nastavit stav',
    'add_selfservice_link'      => 'Přidat odkaz na samoobsluhu',
    'search_selfservice'        => 'Vyhledat článek samoobsluhy',
    'search_canned'             => 'Vyhledat předpřipravenou odpověď',

    'mark_resolved'             => 'Označit jako vyřešené',

    'ticket_signature'          => 'Podpis požadavku',

    'default_open_status'       => 'Výchozí stav otevření',

    'default_resolve_status'    => 'Výchozí stav vyřešení',
    'default_resolve_status_desc' => 'Vyberte výchozí stav, který se použije pro požadavky, které byly vyřešeny.',

    'waiting_response_time'      => 'E-mail čekání na odpověď',
    'waiting_response_time_desc' => 'Čas, po kterém se uživatelům odešle e-mail u neaktivních požadavků s dotazem, zda považují požadavek za vyřešený. Nastavte na 0 pro vypnutí tohoto e-mailu.',

    'close_inactive_tickets'    => 'Uzavřít neaktivní požadavky',
    'close_inactive_tickets_desc' => 'Čas, po kterém se neaktivní požadavky automaticky uzavřou. Nastavte na 0, aby se požadavky nikdy neuzavíraly automaticky.',

    'ticket_reply_order'        => 'Pořadí odpovědí na požadavky',
    'ticket_reply_order_desc'   => 'Vyberte pořadí, ve kterém se zobrazují zprávy požadavku: vzestupně, kde je poslední zpráva poslední, nebo sestupně, kde je poslední zpráva první.',

    'ticket_notes_position'     => 'Pozice poznámek k požadavku',
    'ticket_notes_position_desc' => 'Vyberte, kde se v zobrazení požadavku zobrazují poznámky k požadavku.',
    'ticket_notes_top_messages' => 'Nahoře a ve zprávách',
    'ticket_notes_top'          => 'Pouze nahoře',
    'ticket_notes_messages'     => 'Pouze ve zprávách',

    'unregistered_only'         => 'Pouze neregistrovaní uživatelé',

    'allow_unauth_users'        => 'Povolit nepřihlášené uživatele',
    'allow_unauth_users_desc'   => 'Povolit nepřihlášeným uživatelům zobrazovat a odpovídat na požadavky. Vypnutím této možnosti se odstraní funkce sledování požadavku a uživatelé se budou muset zaregistrovat a přihlásit, aby mohli požadavky zobrazit.',

    'default_department'        => 'Výchozí oddělení',
    'default_department_desc'   => 'Výchozí oddělení nastavené pro všechny příchozí požadavky přes tento kanál.',

    'show_related_articles'     => 'Zobrazit související články',
    'show_related_articles_desc' => 'Když uživatel zadává předmět, mohou se mu zobrazit související články na základě zadaného textu. Vyžaduje aktivovaný modul samoobsluhy a MySQL 5.6+.',

    // Nastavení e-mailového kanálu
    'default_priority'          => 'Výchozí priorita',
    'default_priority_desc'     => 'Výchozí priorita nastavená pro všechny příchozí požadavky přes tento kanál.',

    'last_reply'                => 'Poslední odpověď',
    'opened_at'                 => 'Otevřeno',

    'change_department'         => 'Změnit oddělení',
    'change_status'             => 'Změnit stav',
    'no_statuses'               => 'Žádné stavy nenalezeny. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'no_priorities'             => 'Žádné priority nenalezeny. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'no_templates'              => 'Žádné vlastní e-mailové šablony nenalezeny. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'no_tags'                   => 'Žádné štítky požadavků nenalezeny. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'no_departments_found'      => 'Žádná oddělení nenalezena. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'no_operators_found'        => 'Žádní operátoři nenalezeni. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'change_priority'           => 'Změnit prioritu',
    'add_tag'                   => 'Přidat štítek',

    'unlock'                    => 'Odemknout',
    'merged'                    => 'Sloučeno',
    'unmerge'                   => 'Oddělit',
    'close_and_lock'            => 'Uzavřít a zamknout',

    'mass_reply'                => 'Hromadná odpověď',

    'due_today'                 => 'Splatné dnes',
    'overdue'                   => 'Po termínu',
    'unassigned'                => 'Nepřiřazeno',

    'pause_duetime_desc'        => 'Pokud je na požadavku aktivní SLA plán, pozastaví se zbývající termín splnění do data následné akce. Termín splnění se znovu spustí, jakmile bude přidána odpověď nebo poznámka (včetně následné akce).',

    'add_cc'                    => 'Přidat kopii (CC)',
    'reply_above_line'          => 'Odpovězte prosím nad touto čárou',

    'email_settings'            => 'Nastavení e-mailu',
    'web_settings'              => 'Nastavení webu',
    'split_selected_replies'    => 'Rozdělit vybrané odpovědi',

    'track_ticket_not_found'    => 'Požadavek s uvedeným číslem a e-mailovou adresou uživatele nebyl nalezen.',

    'type_in_tags'              => 'Zadejte štítky',

    /*
     * 2.0.1
     */
    'allowed_files_desc'        => 'Seznam povolených přípon souborů oddělených znakem |, které lze přiložit. Například: txt|png|jpg. Pro povolení všech příloh zadejte: ?.*',

    /*
     * 2.0.2
     */
    'no_operator_groups'        => 'Žádné skupiny operátorů nenalezeny. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'no_user_groups'            => 'Žádné skupiny uživatelů nenalezeny. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'remote_email_piping_desc'  => 'Stáhněte si <a href=\'http://www.supportpal.com/manage/dl.php?type=d&id=8\' target=\'_blank\'>skript pro vzdálený e-mailový piping</a> a postupujte podle <a href=\'https://docs.supportpal.com/current/Remote+Email+Piping\' target=\'_blank\'>dokumentace</a> pro jeho nastavení na vašem e-mailovém serveru.',

    /*
     * 2.0.3
     */
    'department_consume_all'    => 'Ve výchozím nastavení SupportPal podporuje e-mailové aliasy a kontroluje adresu v poli Komu, aby určil, do kterého oddělení má požadavek patřit. Pokud není nalezena odpovídající e-mailová adresa oddělení, požadavek se nevytvoří. Aktivací této možnosti budou všechny e-maily bez odpovídající adresy oddělení importovány jako požadavky v tomto oddělení.',
    'default_reply_options'     => 'Výchozí možnosti odpovědi',
    'default_reply_options_desc' => 'Vyberte výchozí možnosti odpovědi, které se nastaví při vytváření nebo odpovídání na požadavek. Možnost \':reply_option\' bude zaškrtnuta na základě nastavení oddělení \':department_option\'.',
    'associate_response_tag'    => 'Přiřadit předpřipravenou odpověď ke štítku...',
    'canned_response_tags_desc' => 'Přidejte štítky, které mohou pomoci při vyhledávání předpřipravené odpovědi při odpovídání na požadavek.',
    'append_ip_address'         => 'Připojit IP adresu',
    'append_ip_address_desc'    => 'Připojit IP adresu uživatelů k jejich zprávám při vytváření a odpovídání na požadavky z webového rozhraní.',
    'unassign_operator'         => 'Odebrat operátora',
    'remove_tag'                => 'Odebrat štítek',
    'message_clipped'           => '[Zpráva oříznuta]',
    'view_entire_message'       => 'Zobrazit celou zprávu',
    'no_custom_fields'          => 'Žádná vlastní pole nenalezena. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'follow_up_active'          => 'Na tomto požadavku je aktuálně aktivní <a class=\'view-followup\' style=\'text-decoration: underline;\'>následná akce</a>, která se spustí <strong>:time</strong>.',
    'disable_user_email_replies' => 'Zakázat odpovědi uživatelů e-mailem',

    /*
     * 2.1.0
     */
    'default_ticket_filter'     => 'Výchozí filtr požadavků',
    'default_ticket_filter_desc' => 'Výchozí filtr požadavků použitý při kliknutí na odkaz \'Správa požadavků\'. Lze nastavit na \'Žádný\', což je výchozí možnost, která zobrazí všechny nevyřešené požadavky.',
    'recent_filters'            => 'Nedávné filtry',
    'inactive_tickets'          => 'Neaktivní požadavky',
    'default_open_status_desc'  => 'Vyberte výchozí stav, který se automaticky nastaví, když uživatel vytvoří nový požadavek nebo odpoví na požadavek bez odpovědi operátora.',
    'default_reply_status'      => 'Výchozí stav odpovědi',
    'default_reply_status_desc' => 'Vyberte výchozí stav, který se automaticky nastaví, když uživatel odpoví na požadavek. Platí pouze po odpovědi operátora.',
    'ticket_reply_order_default' => 'Výchozí systém použije hodnotu aktuálně vybranou v obecném nastavení požadavků.',
    'select_a_parent'           => 'Vyberte nadřazené oddělení...',
    'select_a_department'       => 'Vyberte oddělení...',
    'department_operator_desc'  => 'Můžete také přiřadit jednotlivé operátory k oddělení. Tito operátoři budou přidáni k přiřazeným skupinám výše.',
    'department_group'          => 'Skupiny oddělení',
    'department_group_desc'     => 'Můžete přiřadit celé skupiny operátorů k oddělení, což je doporučeno, pokud je seznam operátorů rozsáhlý nebo se často mění.',
    'ticket_other_brands'       => 'Požadavky v jiných značkách',
    'add_for_department'        => 'Přidat pro oddělení...',
    'record_order'              => 'Přetáhněte řádky pro změnu pořadí záznamů.',
    'reply_all'                 => 'Odpovědět všem',
    'reply_without_cc'          => 'Odpovědět (bez kopie)',
    'email_accounts'            => 'E-mailové účty',
    'add_another_email'         => 'Přidat další e-mailovou adresu',
    'follow_up_date'            => 'Datum následné akce',
    'post_reply'                => 'Odeslat odpověď',
    'post_note'                 => 'Odeslat poznámku',
    'ticket_details'            => 'Podrobnosti požadavku',
    'organisation_tickets'      => 'Požadavky organizace',
    'manage_tickets'            => 'Správa požadavků',
    'via_channel'               => 'přes :channel',
    'department_parent'         => 'Nadřazené oddělení',
    'department_brands'         => 'Značky oddělení',
    'email_item'                => 'E-mail :item',
    'from_name'                 => 'Jméno odesílatele',
    'from_address'              => 'Adresa odesílatele',

    /*
     * 2.1.1
     */
    'edited_message'            => ':user v :date',
    'prioritise_reply-to'       => 'Upřednostnit Reply-To',
    'prioritise_reply-to_desc'  => 'Přepněte pro upřednostnění hlavičky Reply-To před hlavičkou From. Pokud je povoleno, požadavky otevřené e-mailem budou vytvořeny jménem jména a adresy z Reply-To.',
    'note_options'              => 'Možnosti poznámky',
    'escalation_rules_desc'     => 'Níže uvedená pravidla eskalace SLA plánu jsou naplánována na spuštění po uvedených časech. Tyto časy se mohou změnit nebo pravidla mohou být odstraněna, pokud operátor na požadavek odpoví.',

    /*
     * 2.1.2
     */
    'not_registered_user'       => 'Není registrovaný uživatel. Nastavení e-mailového kanálu umožňuje import pouze e-mailů od registrovaných uživatelů.',
    'display_name'              => 'Zobrazované jméno e-mailu',
    'display_name_desc'         => 'Volitelné, nastavte pouze pro přepsání zobrazovaného jména použitého pro odchozí e-maily z tohoto oddělení, jinak ponechte prázdné.',
    'display_name_options'      => 'Lze použít následující Twig proměnné:<br>{{ brand.name }} - Název značky<br>{{ department.name }} - Název oddělení<br>{{ department.frontend_name }} - Zobrazí název nadřazeného oddělení, pokud požadavek patří pododdělení.<br>{{ operator.formatted_name }} - Jméno operátora<br><em>Jméno operátora není vždy dostupné, proto jej zabalte do podmínky \'not empty\', např. {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>',
    'attachment_rejected'       => 'Příloha odmítnuta',
    'enable_subaddresses'       => 'Povolit podadresy',
    'enable_subaddresses_desc'  => 'Přepněte pro povolení použití e-mailových podadres pro všechna oddělení. Pro každý požadavek se vytvoří unikátní podadresa, která bude nastavena jako Reply-To adresa ve všech odchozích e-mailech. Váš e-mailový server musí podporovat podadresování; při použití e-mailového pipingu mohou být nutné další kroky, aby e-maily na tyto adresy byly správně přesměrovány. Povolením této možnosti můžete odstranit číslo požadavku z předmětu e-mailových šablon.',
    'email_replies_disabled'    => 'Odpovědi e-mailem zakázány',
    'disable_user_email_replies_desc' => 'Povolením se zablokují odpovědi uživatelů e-mailem a odstraní se čára pro oříznutí odpovědi z odchozích e-mailů požadavku. Ve výchozím nastavení se e-mail tiše ignoruje, ale můžete nastavit e-mail, který se odešle uživateli, změnou vybrané e-mailové šablony pro možnost \'Odpovědi e-mailem zakázány\' níže.',
    'bcc'                       => 'Skrytá kopie (BCC)',
    'assigned_to_ticket'        => 'Přiřazeno k požadavku',
    'user_ticket_reply'         => 'Odpověď uživatele na požadavek',
    'new_internal_ticket'       => 'Nový interní požadavek',
    'department_changed'        => 'Oddělení změněno',
    'operator_ticket_reply'     => 'Odpověď operátora na požadavek',
    'new_ticket_note'           => 'Nová poznámka k požadavku',
    'email_template_desc'       => 'Můžete vybrat jinou e-mailovou šablonu než výchozí, která se odešle uživatelům nebo operátorům pro některou z níže uvedených akcí. Tato šablona se stane výchozí pouze pro toto oddělení.',
    'create_new_user'           => 'Vytvořit nového uživatele',
    'user_reply_internal_ticket' => 'Nejste operátor. Na interní požadavky mohou odpovídat pouze operátoři.',
    'enter_email_address'       => 'Zadejte e-mailovou adresu...',
    'email_user_frontend'       => 'Upozornit uživatele na požadavky otevřené na webu',
    'email_user_frontend_desc'  => 'Vyberte, zda mají být uživatelé upozorněni e-mailem, když si sami otevřou požadavek na webovém rozhraní.',
    'department_template_disabled' => 'Příslušná e-mailová šablona oddělení je zakázána, takže tento e-mail nelze odeslat.',

    /*
     * 2.2.0
     */
    'user_ticket_existing_desc' => 'Vytvořit nový požadavek jménem stávajícího uživatele.',
    'canned_response_tag'       => 'Štítek předpřipravené odpovědi|Štítky předpřipravené odpovědi',
    'response'                  => 'Odpověď|Odpovědi',
    'response_desc'             => 'Předpřipravená odpověď může být napsána v několika jazycích. Odpovídající odpověď se automaticky použije na základě jazykových preferencí uživatele.',
    'no_slaplans'               => 'Žádné SLA plány nenalezeny. Klikněte <a href=\':route\'>zde</a> pro vytvoření.',
    'filter_performance'        => 'Důležité informace a doporučení k výkonu filtrů',
    'filter_performance_desc'   => '<li>Filtry, které odpovídají více požadavkům, budou pomalejší. Většinou se snažte vyloučit vyřešené požadavky.</li><li>Filtry používající podmínky \'není\' budou obvykle pomalejší než podmínky \'je\'.</li><li>Filtry kontrolující hodnoty NULL (např. Štítek požadavku je Žádný) budou pomalejší.</li><li>Vyhněte se více podmínkám zahrnujícím kontrolu řetězců/slov, protože zvyšují složitost.</li><li>Filtry používající podmínky \'začíná\' nebo \'obsahuje\' budou obecně pomalejší než podmínky \'rovná se\' nebo \'končí\'.</li><li>Vyřešené požadavky nejsou zahrnuty v počtech zobrazených na bočním panelu.</li>',
    'run_macro'                 => 'Spustit makro',
    'run_macro_desc'            => '<strong>:macro</strong><br /><em>:description</em>',

    /*
     * 2.3.0
     */
    'registered_users_desc'     => 'Přepněte pro zobrazení oddělení pouze přihlášeným uživatelům a přijímání e-mailů pouze od aktivně registrovaných uživatelů v helpdesku. Pokud je povoleno, neregistrovaným uživatelům, kteří pošlou e-mail tomuto oddělení, bude odeslán zpětný e-mail. Chcete-li změnit nebo vypnout tento e-mail, podívejte se na možnost šablony \'Pouze registrovaní uživatelé\' níže.',
    'form_fields_desc'          => 'Pokud chcete při zpětné vazbě od uživatele shromáždit další informace, můžete zde nastavit vlastní pole, která se zobrazí ve formuláři. Typ pole bude uzamčen, jakmile uživatel formulář vyplní.',
    'email_and_other_accounts'  => 'E-mailové a další účty kanálů',
    'delete_message'            => 'Smazat zprávu',
    'linked_tickets'            => 'Propojené požadavky',
    'add_linked_ticket'         => 'Přidat propojený požadavek',
    'create_linked_ticket'      => 'Vytvořit propojený požadavek',
    'copy_link'                 => 'Kopírovat odkaz',
    'forward_message'           => 'Přeposlat tuto zprávu',
    'forward_from_here'         => 'Přeposlat požadavek odtud',
    'forward'                   => 'Přeposlat',
    'forward_options'           => 'Možnosti přeposlání',
    'forwarded_to'              => 'Přeposláno na',
    'new_operator_reply'        => 'Nová odpověď operátora',
    'new_user_reply'            => 'Nová odpověď uživatele',
    'add_bcc'                   => 'Přidat skrytou kopii (BCC)',
    'at_least_one_recipient'    => 'Zadejte alespoň jednoho příjemce.',
    'forwarded_message'         => '---------- Přeposlaná zpráva ----------',

    /*
     * 2.3.1
     */
    'inactive_ticket_note'      => 'Poznámka: týká se pouze požadavků patřících do stavu s povolenou možností \'Uzavřít neaktivní požadavky\'.',
    'close_inactive_status_desc' => 'Přepněte pro povolení/zakázání automatického uzavírání neaktivních požadavků a e-mailových připomínek neaktivity (šablony \'Čeká na odpověď\' a \'Požadavek automaticky uzavřen\'). Pokud je povoleno, čas před odesláním připomínek lze nastavit v obecných nastaveních požadavků.',
    'from_header_missing'       => 'Chybí hlavička Od: v e-mailu.',
    'move_ticket'               => 'Přesunout požadavek',
    'move_ticket_step1'         => 'Krok 1: Vyberte novou značku, do které se požadavek přesune',
    'move_ticket_step2'         => 'Krok 2: Vyberte oddělení z nové značky',
    'current_record'            => 'Aktuální :record',
    'new_record'                => 'Nový :record',
    'department_email'          => 'E-mail oddělení',
    'select_a_department_email' => 'Vyberte e-mail oddělení...',
    'record_public_desc'        => 'Přepněte, aby byl :record přístupný pouze vám.',
    'record_group_desc'         => 'Pokud chcete, aby byl :record viditelný pouze pro určité skupiny operátorů. Ponechte prázdné pro zobrazení všem operátorům.',

    /*
     * 2.4.0
     */
    'macro_enabled_desc'        => 'Přepněte pro zakázání makra a zabránění jeho automatického spuštění nebo zobrazení v rozhraní požadavku.',
    'macro_order_drag'          => 'Přetáhněte řádky pro změnu pořadí maker.',
    'macro_order_processed'     => 'Makro typu :type jsou zpracovávána v pořadí, v jakém jsou zobrazena.',
    'macro_type'                => 'Typ makra',
    'macro_type_desc'           => 'K dispozici jsou tři typy maker. Manuální makra lze spustit pouze z pohledu požadavku nebo seznamu, automatická makra běží na nevyřešených požadavcích každou hodinu a makra typu hook se spouštějí při určitých událostech požadavku. Automatická a hook makra lze nastavit tak, aby běžela pouze v konkrétních plánech. Akce maker typu hook nespustí další makra typu hook, aby se předešlo riziku smyček.',
    'macro_run_at_most'         => 'Spustit maximálně',
    'macro_run_times'           => 'krát',
    'macro_run_at_most_desc'    => 'Omezte, kolikrát může automatické makro běžet na jednom požadavku. Ponechte prázdné pro neomezený počet spuštění.',
    'macro_events_desc'         => 'Vyberte jednu nebo více událostí, při kterých se má makro spustit. Podmínky nastavené níže budou zkontrolovány před spuštěním makra.',
    'macro_schedules_desc'      => 'Ve výchozím nastavení makro běží 24/7, ale můžete vybrat jeden nebo více plánů helpdesku, aby makro bylo aktivní pouze během těchto časů.',
    'macro_condition_desc'      => 'Definujte podmínky, pro které požadavky bude toto makro dostupné. Ve výchozím nastavení, bez podmínek, se použije na všechny požadavky. Pro automatická makra musí být definována alespoň jedna podmínka.',
    'add_remove_headers'        => 'Přidat/Odebrat hlavičky',
    'webhook_merge_fields'      => 'Slučovací pole lze použít v URL a obsahu pole, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">více informací</a>.',
    'webhook_ticket_required'   => 'Pro tuto funkci musí existovat požadavek.',
    'not_permitted'             => 'Litujeme, nemáte oprávnění zobrazit požadovaný požadavek(y). Pokud si myslíte, že se jedná o chybu, kontaktujte svého administrátora.',
    'watch'                     => 'Sledovat',
    'unwatch'                   => 'Přestat sledovat',
    'watching'                  => 'Sledováno',
    'internal_ticket'           => 'Interní požadavek|Interní požadavky',

    /*
     * 2.4.1
     */
    'downloading'               => 'Stahování...',
    'downloading_desc'          => 'Pokud stahování nezačne automaticky během několika sekund, klikněte prosím <a href=\':href\'>zde</a> pro přímý přístup k URL stahování.',

    /*
     * 2.5.0
     */
    'belonging_to'              => '(Patří k :name)',
    'block_user'                => 'Blokovat uživatele',
    'merge_tickets'             => 'Sloučit požadavky',

    /*
     * 2.6.0
     */
    'follow_ups'                => 'Následné akce',
    'follow_up_multiple_active' => 'Na tomto požadavku jsou aktuálně aktivní více <a class=\'view-followup\' style=\'text-decoration: underline;\'>následných akcí</a> a další naplánovaná se spustí <strong>:time</strong>.',
    'follow_up_no_actions'      => 'Následná akce nemá nastaveny žádné akce, potvrďte prosím, zda chcete pokračovat.',
    'status_after_running'      => 'Stav po spuštění',
    'older_messages'            => ':count starších zpráv',
    'holiday_single_day'        => 'Jeden den',
    'holiday_date_range'        => 'Rozsah datumů',

    /*
     * 3.0.0
     */
    'merge_tickets_into'        => 'Vyberte požadavek, do kterého se mají sloučit',
    'im_not_sure'               => 'Nejsem si jist',
    'auto_reply_detected'       => 'Zjištěna automatická odpověď – uživatel(é) nebudou upozorněni.',
    'cc_desc'                   => 'Do tohoto požadavku můžete přidat další osoby do kopie (CC) zadáním jejich e-mailových adres zde.',

    /*
     * 3.2.0
     */
    'drafting_message'          => '<strong>:name</strong> připravoval(a) zprávu',

    /*
     * 3.3.0
     */
    'email_setup_manually'      => 'Nastavit ručně',
    'unresolved'                => 'Nevyřešené',
    'resolved'                  => 'Vyřešené',
    'manage_oauth_options'      => 'Chcete-li přidat nebo spravovat možnosti OAuth, navštivte stránku <a href=\":route\">Integrace třetích stran</a>.',

    /*
     * 3.4.0
     */
    'feedback_saved'            => 'Vaše zpětná vazba byla uložena.',
    'how_was_the_help'          => 'Jaká byla poskytnutá podpora?',
    'update_feedback'           => 'Aktualizovat zpětnou vazbu',
    'verify_user'               => 'Ověřte prosím pravost uživatele.',
    'web_channel_name'          => 'Web',
    'web_channel_desc'          => 'Požadavky otevřené přes webové rozhraní uživateli nebo panel operátora pro operátory.',
    'email_channel_name'        => 'E-mail',
    'email_channel_desc'        => 'Požadavky otevřené ze zpracování příchozích e-mailů.',
    'api_channel_name'          => 'API',
    'api_channel_desc'          => 'Požadavky a odpovědi odeslané přes API.',

    /*
     * 4.0.0
     */
    'on_behalf_of'              => 'Vytvořeno jménem',
    'reply_canned_be_posted'    => 'Na tento požadavek aktuálně nelze odpovědět; kanál nebo účet kanálu může být zakázán.',

    /*
     * 4.1.0
     */
    'ticket_format_desc'        => 'Může obsahovat alfanumerické znaky a speciální znaky <code>-_.+!*,</code><br />Lze použít následující proměnné: %S pro sekvenční číslo | %N pro náhodné číslo | %L pro náhodné písmeno<br />Použijte {number} pro opakování <strong>pouze</strong> po %N nebo %L, např. %N{4} znamená 4 náhodná čísla, %L{3} znamená 3 náhodná písmena<br />Následující <a href=\'http://php.net/manual/en/function.date.php\' target=\'_blank\'>PHP Date</a> parametry s předponou % Y,y,m,d,z,j,g,G,h,H,i,s',

    'append_ip_address_api_desc' => 'Připojit IP adresu uživatele na konec zpráv požadavku (vyžaduje poskytnutí údaje user_ip_address).',
    'check_spam'                => 'Kontrolovat pravidla spamu',
    'check_spam_api_desc'       => 'Blokovat zprávy, které odpovídají pravidlům spamu.',
    'captcha_desc'              => 'Kdy se má uživatelům zobrazit captcha při vytváření nových požadavků nebo použití funkce sledování požadavku.',

    /*
     * 5.0.0
     */
    'also_viewing'              => 'Také prohlíží požadavek:',
    'mark_as_read'              => 'Označit jako přečtené',
    'mark_as_unread'            => 'Označit jako nepřečtené',
    'sla_targets'               => 'Cíl SLA|Cíle SLA',
    'sla_targets_desc'          => 'Nastavte cílové časy, do kterých musí být požadavek zodpovězen a vyřešen podle priority. Čas se počítá pouze během pracovní doby podle vybraného plánu, lze použít desetinné hodnoty. Ponechte hodnotu prázdnou, pokud nechcete nastavit cíl pro danou prioritu.',
    'first_reply_time'          => 'Čas první odpovědi',
    'next_reply_time'           => 'Čas další odpovědi',
    'resolution_time'           => 'Čas vyřešení',
    'reply_due_in'              => 'Odpověď splatná :time',
    'resolve_in'                => 'Vyřešit :time',
    'paused_ago'                => 'Pozastaveno :time',
    'reply_due_time'            => 'Čas splatnosti odpovědi',
    'resolution_due_time'       => 'Čas splatnosti vyřešení',
    'set_reply_due_time'        => 'Nastavit čas splatnosti odpovědi',
    'set_resolution_due_time'   => 'Nastavit čas splatnosti vyřešení',

    /*
     * 5.2.0
     */
    'block_user_desc'           => 'Uživatel nebude moci vytvořit další požadavky a požadavek bude přesunut do koše.',

    /*
     * 5.3.0
     */
    'reject_duplicate_emails'   => 'Odmítnout duplicitní e-maily',
    'reject_duplicate_emails_desc' => 'Zabránit vícenásobnému importu e-mailů, detekováno na základě hlavičky Message-ID.',
    'duplicate_email_detected'  => 'Duplicitní e-mail, který již byl importován.',

    /*
     * 5.5.0
     */
    'rate_limiting'             => 'Omezení rychlosti',
    'max_requests'              => 'Maximální počet požadavků',
    'max_requests_desc'         => 'Nastavte maximální počet požadavků, než bude uživatel omezen.',
    'decay_time'                => 'Doba obnovy',
    'decay_time_desc'           => 'Počet minut, než se dostupné pokusy resetují.',
    'exclude_addresses'         => 'Vyloučené adresy',
    'exclude_addresses_desc'    => 'Seznam e-mailových adres, které jsou vyloučeny z omezení rychlosti.',
    'enable_throttling'         => 'Povolit omezení rychlosti',
    'enable_throttling_api_desc' => 'Omezit počet požadavků a zpráv, které mohou uživatelé odeslat během určitého časového období, poté budou omezeni. Limity lze upravit v nastavení webového kanálu.',
    'close_without_notify'      => 'Uzavřít (bez upozornění)',
    'lock'                      => 'Zamknout',
    'pin'                       => 'Připnout',
    'unpin'                     => 'Odepnout',

    /*
     * 5.6.0
     */
    'copy_to_new_filter'        => 'Kopírovat do nového filtru',
    'alias_support'             => 'Podpora aliasů',
    'alias_support_desc'        => 'Podpora aliasů analyzuje adresy příjemců příchozích e-mailů, aby určila, do kterého oddělení má být e-mail zařazen. Zakázáním podpory aliasů budou všechny e-maily otevřeny v oddělení, ze kterého byly načteny, bez ohledu na adresy příjemců.',
);