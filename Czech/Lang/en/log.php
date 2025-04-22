<?php

return array(

    // Standard messages
    "item_created"                      => "Vytvořen nový :item :rel.",
    "item_updated"                      => "Aktualizován :item :rel.",
    "item_deleted"                      => "Smazán :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Vytvořen nový zákaz pro IP :rel.",
    "ip_ban_updated"                    => "Aktualizován zákaz pro IP :rel.",
    "ip_ban_deleted"                    => "Smazán zákaz pro IP :rel.",
    "banned_ip_on_login"                => "Zablokována IP :rel na 15 minut.",

    "ip_whitelist_created"              => "Přidána IP :rel na bílou listinu.",
    "ip_whitelist_updated"              => "Aktualizována IP :rel na bílé listině.",
    "ip_whitelist_deleted"              => "Smazána IP :rel z bílé listiny.",

    "system_cleanup"                    => "Provedeno čištění systému na :rel.",

    "api_failed_login"                  => "IP :rel se nepodařilo autentizovat k API.",

    "user_successful_login"             => "Přihlášen k helpdesku.",
    "user_failed_login"                 => "Nepodařilo se autentizovat.",
    "user_successful_logout"            => "Odhlášen z helpdesku.",

    "user_registered"                   => "Registrován účet.",
    "user_confirmed"                    => "Potvrzen účet.",
    "user_password_set"                 => "Nastaveno heslo pro účet.",
    "user_password_reset"               => "Obnoveno heslo pro účet.",

    "user_added_to_organisation"        => "Uživatel :rel přidán do organizace :new_value.",
    "user_removed_from_organisation"    => "Uživatel :rel odstraněn z organizace :old_value.",
    "user_profile_updated"              => "Aktualizován profil účtu.",
    "user_left_organisation"            => "Opustil organizaci :rel.",
    "user_organisation_emptied"         => "Odstraněni všichni uživatelé z organizace :rel.",
    "user_organisation_updated"         => "Úroveň přístupu organizace :rel změněna z :old_value na :new_value.",
    "organisation_membership_updated"   => "Aktualizováno členství uživatele v organizaci :rel.",
    "organisation_profile_updated"      => "Aktualizován profil organizace :rel.",
    "organisation_owner_updated"        => "Převedeno vlastnictví organizace :rel na :new_value.",

    "mass_email_queued"                 => "Zařazeno :new_value e-mailů do fronty k odeslání.",
    "mass_email_sent"                   => "Odesláno :new_value e-mailů z fronty.",

    "email_queue_deleted"               => "Smazán e-mail z fronty pro :rel.",

    "scheduled_task_run"                => "Plánovaný úkol :rel byl spuštěn ručně.",

    "selfservice_article_upvoted"       => "Pozitivně ohodnocen článek :rel.",
    "selfservice_article_downvoted"     => "Negativně ohodnocen článek :rel.",
    "selfservice_comment_posted"        => "Publikován nový :rel.",
    "selfservice_comment_upvoted"       => "Hodnocení :rel zvýšeno z :old_value na :new_value.",
    "selfservice_comment_downvoted"     => "Hodnocení :rel sníženo z :old_value na :new_value.",

    "ticket_opened"                     => "Otevřen nový tiket #:rel.",
    "ticket_opened_on_behalf"           => "Otevřen nový tiket #:rel jménem :new_value.",
    "ticket_opened_email"               => "Importován e-mail jako nový tiket #:rel.",

    "ticket_message_reply"              => "Přidána nová odpověď na tiket #:rel.",
    "ticket_message_note"               => "Přidána nová poznámka k tiketu #:rel.",
    "ticket_message_deleted"            => "Smazána zpráva v tiketu #:rel.",

    "ticket_user_updated"               => "Aktualizován uživatel na tiketu #:rel z :old_value na :new_value.",
    "ticket_subject_updated"            => "Aktualizován předmět na tiketu #:rel.",
    "ticket_department_updated"         => "Aktualizováno oddělení na tiketu #:rel z :old_value na :new_value.",
    "ticket_status_updated"             => "Aktualizován stav na tiketu #:rel z :old_value na :new_value.",
    "ticket_priority_updated"           => "Aktualizována priorita na tiketu #:rel z :old_value na :new_value.",
    "ticket_tag_added"                  => "Přidán štítek :new_value k tiketu #:rel.",
    "ticket_tag_updated"                => "Aktualizovány štítky na tiketu #:rel.",
    "ticket_tag_removed"                => "Odstraněn štítek :new_value z tiketu #:rel.",
    "ticket_slaplan_updated"            => "Aktualizován plán SLA na tiketu #:rel z :old_value na :new_value.",
    "ticket_duetime_updated"            => "Aktualizován čas splatnosti na tiketu #:rel na :new_value.",
    "ticket_customfield_updated"        => "Aktualizována vlastní pole na tiketu #:rel.",
    "ticket_converted_user"             => "Převeden interní tiket #:rel na uživatelský tiket.",
    "ticket_converted_internal"         => "Převeden uživatelský tiket #:rel na interní tiket.",

    "ticket_assigned_operator"          => "Přiřazen :new_value k tiketu #:rel.",
    "ticket_unassigned_operator"        => "Odebrán :new_value z tiketu #:rel.",
    "ticket_assigned_self"              => "Přiřazen sám sobě k tiketu #:rel.",
    "ticket_assigned_updated"           => "Aktualizováni přiřazení operátoři na tiketu #:rel.",

    "ticket_locked"                     => "Zamčen tiket #:rel.",
    "ticket_unlocked"                   => "Odemčen tiket #:rel.",
    "ticket_locked_reply"               => "Odpověď nemohla být přidána k zamčenému tiketu #:rel.",

    "ticket_merged"                     => "Tiket(y) :new_value sloučeny do tiketu #:rel.",
    "ticket_unmerged"                   => "Tiket :rel byl rozdělen.",

    "ticket_user_blocked"               => "Blokován e-mail :new_value (od uživatele na tiketu #:rel).",

    "ticket_closed"                     => "Tiket #:rel byl uzavřen.",
    "ticket_inactive_closed"            => "Uzavřen neaktivní tiket #:rel ze stavu :old_value.",
    "ticket_awaiting_response"          => "Odeslán e-mail čekající na odpověď uživateli na tiketu #:rel.",

    "ticket_split_from"                 => "Zprávy rozděleny ze starého tiketu #:rel do nového tiketu #:new_value.",
    "ticket_split_to"                   => "Zprávy rozděleny ze starého tiketu #:old_value do nového tiketu #:rel.",

    "ticket_attachment_saved"           => "Přidána příloha k tiketu #:rel.",
    "ticket_attachment_deleted"         => "Smazána příloha z tiketu #:rel.",

    "ticket_throttled"                  => "Odmítnut nový tiket od :rel kvůli omezení.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Přidána příloha ':new_value' k článku ID :rel.",
    "selfservice_attachment_deleted"    => "Smazána příloha ':new_value' z článku ID :rel.",
    "ticket_unassigned_self"            => "Odebrán sám sobě z tiketu #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Odpověď nemohla být přidána, protože tiket patří k deaktivované značce #:rel.",
    "personal_signatures_updated"       => "Aktualizovány osobní podpisy.",
    "check_email_failed"                => "Chyba: Nepodařilo se stáhnout e-mail z účtu :old_value: ':rel'.",
    "ticket_added_cc"                   => "E-mail(y) :new_value přidány do seznamu CC pro tiket #:rel.",
    "ticket_removed_cc"                 => "E-mail(y) :old_value odstraněny ze seznamu CC pro tiket #:rel.",
    "invalid_department_brand"          => "Nepodařilo se nastavit oddělení na ':new_value' na tiketu #:rel, oddělení nepatří k značce tiketu.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Odeslán e-mail s předmětem ':extra_rel1' na :rel.",
    "sent_template_email_to"            => "Odeslán e-mail ':extra_rel1' na :rel.",
    "sent_ticket_email_to_user"         => "Odeslán e-mail ':extra_rel1' uživateli pro tiket #:rel.",
    "sent_email_to_operators"           => "Odeslán e-mail ':extra_rel1' operátorům.",
    "sent_ticket_email_to_operators"    => "Odeslán e-mail ':extra_rel1' operátorům pro tiket #:rel.",
    "sent_email_to_operator_group"      => "Odeslán e-mail ':extra_rel1' skupině operátorů ':new_value' pro tiket #:rel.",
    "ticket_macro_applied"              => "Makro ':new_value' bylo spuštěno na tiketu #:rel.",
    "ticket_macro_automatic"            => "Makro ':new_value' bylo automaticky spuštěno na tiketu #:rel.",
    "email_template_not_found"          => "Šablona e-mailu ID ':new_value' nebyla nalezena, odeslání e-mailu zrušeno.",
    "private_conversation_started"      => "Zahájena konverzace s :rel.",
    "private_message_sent"              => "Odeslána zpráva na :rel.",
    "not_imported_replies_disabled"     => "E-mail :extra_rel1 byl přijat pro tiket #:rel, ale nebyl importován, protože odpovědi na tiket e-mailem jsou deaktivovány.",
    "not_imported_ticket_locked"        => "E-mail :extra_rel1 byl přijat pro tiket #:rel, ale nebyl importován, protože tiket je zamčen.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Uživatel tiketu přidán do skupiny uživatelů :new_value.",
    "ticket_user_removed_from_group"    => "Uživatel tiketu odstraněn ze skupiny uživatelů :old_value.",
    "email_on_behalf"                   => "Přeposlán :extra_rel2 jménem ':extra_rel1' v tiketu #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Odeslán e-mail ':extra_rel1' na :new_value, oddělení nepřijímá e-maily od neregistrovaných uživatelů.",
    "deleted_user"                      => "Smazán :item ':rel' s e-mailem ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Propojen tiket #:rel s tiketem :extra_rel1.",
    "unlinked_ticket"                   => "Zrušeno propojení tiketu #:rel s tiketem :extra_rel1.",
    "email_queue_attachment_deleted"    => "Smazána příloha ':old_value' z e-mailu ve frontě ':rel'.",
    "forward_ticket_email"              => "Přeposlán tiket #:rel třetí straně, viz e-mail ':extra_rel1'.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Aktualizován :rel uživatelem :extra_rel1.",
    "selfservice_comment_status"        => "Změněn stav :rel uživatelem :extra_rel1 z :old_value na :new_value.",
    "selfservice_comment_deleted"       => "Smazán komentář uživatelem :extra_rel1.",
    "ticket_message_posted"             => "Přidána nová :extra_rel1 k tiketu #:rel.",
    "ticket_message_edited"             => "Upravena :extra_rel1 v tiketu #:rel.",
    "email_send_failed"                 => "Nepodařilo se odeslat e-mail.",
    "ticket_brand_updated"              => "Aktualizována značka na tiketu #:rel z :old_value na :new_value.",
    "export_scheduled"                  => "Export uživatele :rel byl naplánován.",
    "deleted_inactive_records"          => "Automaticky smazány :old_value neaktivní :rel.",
    "deleted_old_records"               => "Automaticky smazány staré záznamy :rel.",
    "sent_email_to_user_group"          => "Zařazen e-mail do fronty pro skupinu uživatelů ':new_value' pro tiket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Sledování tiketu #:rel.",
    "ticket_unwatching"                 => "Ukončeno sledování tiketu #:rel.",
    "ticket_watch_operator"             => "Nastaven :new_value ke sledování tiketu #:rel.",
    "ticket_unwatch_operator"           => "Zrušeno sledování tiketu #:rel pro :new_value.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Potvrzeno vlastnictví e-mailové adresy jménem uživatele :rel.",
    "ticket_department_email_updated"   => "Aktualizován e-mail oddělení na tiketu #:rel z :old_value na :new_value.",
    "ticket_watching_updated"           => "Aktualizováni sledující operátoři na tiketu #:rel.",
    "ticket_deleted"                    => "Trvale smazán tiket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Přesunut tiket #:rel do koše.",
    "ticket_restored"                   => "Obnoven tiket #:rel z koše.",
    "emptied_ticket_trash"              => "Automaticky vyčištěn koš tiketů s ':old_value' záznamy.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Nastaveno nové pokračování na tiketu #:rel.",
    "ticket_followup_updated"           => "Aktualizováno pokračování na tiketu #:rel.",
    "ticket_followup_deleted"           => "Smazáno pokračování na tiketu #:rel.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutrálně ohodnocen článek :rel.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "Uživatel :old_value sloučen do uživatele :rel.",
    "user_organisation_merged"          => "Organizace uživatele :old_value sloučena do organizace uživatele :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Aktualizovány šablony odpovědí pro :rel.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Aktivován :item (doplněk) :rel.",
    "addon_deactivated"                 => "Deaktivován :item (doplněk) :rel.",
    "addon_installed"                   => "Nainstalován :item (doplněk) :rel.",
    "addon_uninstalled"                 => "Odinstalován :item (doplněk) :rel.",
    "addon_cancelled"                   => "Zrušen :item (doplněk) :rel.",
    "addon_updated"                     => "Aktualizován :item (doplněk) :rel na verzi :new_value.",
    "ticket_reply_duetime_updated"      => "Aktualizován čas splatnosti odpovědi na tiketu #:rel na :new_value.",
    "ticket_resolve_duetime_updated"    => "Aktualizován čas splatnosti vyřešení na tiketu #:rel na :new_value.",
    "ticket_duetime_unset"              => "Zrušen čas splatnosti na tiketu #:rel.",
    "ticket_reply_duetime_unset"        => "Zrušen čas splatnosti odpovědi na tiketu #:rel.",
    "ticket_resolve_duetime_unset"      => "Zrušen čas splatnosti vyřešení na tiketu #:rel.",
    "ticket_duetime_paused"             => "Pozastaveny časy splatnosti na tiketu #:rel.",
    "ticket_duetime_unpaused"           => "Obnoveny časy splatnosti na tiketu #:rel.",
    "user_email_verified"               => "Ověřena jejich e-mailová adresa.",
    "marked_email_as_verified"          => "Ověřeno vlastnictví e-mailové adresy jménem uživatele :rel.",
    "user_invited_to_organisation"      => "Uživatel :rel pozván do organizace :extra_rel1.",
    "user_accepted_organisation_invite" => "Uživatel :rel přijal pozvání do organizace :extra_rel1.",
    "user_additional_email_verified"    => "Ověřena další e-mailová adresa (:new_value).",
    "export_generated"                  => "Export :new_value byl vygenerován a uložen v systému.",
    "export_deleted"                    => "Export :old_value byl smazán ze systému.",
    "user_export_generated"             => "Export :new_value uživatele :rel byl vygenerován a uložen v systému.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Aktualizovány jejich šablony odpovědí.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Smazána příloha ':old_value' z tiketu #:rel.",
    "user_added_to_group"               => "Uživatel :rel přidán do skupiny uživatelů :new_value.",
    "user_removed_from_group"           => "Uživatel :rel odstraněn ze skupiny uživatelů :old_value.",
    "operator_added_to_group"           => "Operátor :rel přidán do skupiny operátorů :new_value.",
    "operator_removed_from_group"       => "Operátor :rel odstraněn ze skupiny operátorů :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Smazána úloha na pozadí :rel.",
    "background_job_retried"            => "Znovu zkoušena úloha na pozadí :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Nastaveno heslo pro jejich účet.",
    "password_reset_sent"               => "Odkaz na obnovení hesla odeslán na :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Ohodnocen tiket #:rel jako :extra_rel1.", // Ohodnocen tiket #123 jako 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Uložena :extra_rel1 na tiketu #:rel.", // Uložena (níže uvedená zpětná vazba) na tiketu #123
    "selfservice_feedback_saved"        => "Uložena :extra_rel1 na článku :rel.", // Uložena (níže uvedená zpětná vazba) na článku 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => "Připnuta :extra_rel1 na tiketu #:rel.", // Připnuta zpráva (níže uvedená general.message) na tiketu #123.
    "ticket_unpinned_message"           => "Odepnuta :extra_rel1 na tiketu #:rel.", // Odepnuta zpráva (níže uvedená general.message) na tiketu #123.

);