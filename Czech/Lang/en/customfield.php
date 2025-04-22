<?php

return array(

    "customfield"               => "Vlastní pole|Vlastní pole",

    // Možnosti
    "boolean"                   => "Boolean (pravda/nepravda)",
    "checkbox"                  => "Zaškrtávací políčko",
    "checklist"                 => "Seznam kontrol",
    "date"                      => "Datum",
    "multiple"                  => "Více možností",
    "options"                   => "Možnosti",
    "radio"                     => "Rádio tlačítka",
    "rating"                    => "Hodnocení (1 až 5)",
    "text"                      => "Text",
    "textarea"                  => "Textová oblast",

    "public"                    => "Veřejné",
    "public_desc"               => "Pokud bude vlastní pole zobrazeno veřejně na frontendové stránce, nebo pokud je určeno pouze pro personál.",
    "encrypted"                 => "Šifrované",
    "purge_desc"                => "Pokud by mělo být hodnoty vlastního pole automaticky vymazány, když je tiket vyřešen.",
    "locked"                    => "Uzamčené",
    "locked_desc"               => "Pokud hodnota vlastního pole nemůže být změněna uživatelem, jakmile je nastavena.",
    "department_desc"           => "Vyberte, ve kterých odděleních bude pole dostupné.",

    /*
     * 2.0.2
     */
    "please_select"             => "Vyberte prosím...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Pomocný text, který se objeví pod vlastním polem a může být volitelně ponechán prázdný.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Vyberte, ve kterých značkách bude pole dostupné.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Smazání existujících možností vymaže všechna uložená pole, která mají tyto hodnoty vybrány.",
    "regex_basic_desc"          => "Volitelně specifikujte regulární výraz pro validaci hodnoty vlastního pole.",
    "regex_desc"                => "Regulární výraz je citlivý na velikost písmen, není potřeba specifikovat oddělovače regulárního výrazu a použití lomítek bude automaticky escapováno. Příklad: ^[a-z0-9_-]{6,18}$ by zajistil, že hodnota bude mít délku 6-18 znaků a bude obsahovat pouze kombinaci alfanumerických znaků, podtržítek a pomlček.",
    "regex_error_message"       => "Chybová zpráva pro validaci",
    "regex_error_message_desc"  => "Volitelně specifikujte vlastní chybovou zprávu, která se zobrazí, pokud hodnota nebude odpovídat validaci regulárního výrazu, jinak bude zobrazena generická zpráva. Zpráva bude zobrazena přesně tak, jak je zadána, proto doporučujeme zahrnout název vlastního pole, aby byla chybová zpráva jasnější.",
    "custom_field_values"       => "Hodnoty vlastního pole",
    "depends_on"                => "Závisí na",
    "depends_on_desc"           => "Pokud je vybráno, toto pole se zobrazí uživateli pouze v případě, že je vybrána specifikovaná hodnota pole. Viditelnost značky a oddělení bude automaticky děděna z pole, na kterém toto závisí.",
    "select_option"             => "Vyberte možnost...",
    "purge"                     => "Vymazat",
    "encrypted_desc"            => "Pokud je hodnota vlastního pole citlivá a měla by být uložena v databázi šifrovaná. To nelze změnit, jakmile bylo vlastní pole vytvořeno.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Pokud musí být vlastní pole vyplněno. U zaškrtávacích políček, seznamů kontrol nebo více možností bude uživatel muset vybrat alespoň jednu možnost.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** ŠIFROVÁNO **",
);