<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | Validační jazykové řetězce
    |--------------------------------------------------------------------------
    |
    | Následující jazykové řetězce obsahují výchozí chybové zprávy používané
    | třídou validátoru. Některá pravidla mají více verzí, například pravidla
    | pro velikost. Tyto zprávy zde můžete libovolně upravit.
    |
    */

    'accepted'                  => 'Pole :attribute musí být přijato.',
    'active_url'                => 'Hodnota :attribute není platná URL adresa.',
    'after'                     => 'Pole :attribute musí být datum po :date.',
    'alpha'                     => 'Pole :attribute může obsahovat pouze písmena.',
    'alpha_dash'                => 'Pole :attribute může obsahovat pouze písmena, čísla, pomlčky a podtržítka.',
    'alpha_num'                 => 'Pole :attribute může obsahovat pouze písmena a čísla.',
    'array'                     => 'Pole :attribute musí být pole.',
    'before'                    => 'Pole :attribute musí být datum před :date.',
    'between'                   => array(
        'numeric' => 'Hodnota :attribute musí být mezi :min a :max.',
        'file'    => 'Soubor :attribute musí mít velikost mezi :min a :max kilobajty.',
        'string'  => 'Pole :attribute musí mít délku mezi :min a :max znaky.',
        'array'   => 'Pole :attribute musí obsahovat mezi :min a :max položkami.',
    ),
    'boolean'                   => 'Pole :attribute musí být true nebo false.',
    'confirmed'                 => 'Potvrzení pole :attribute se neshoduje.',
    'date'                      => 'Hodnota :attribute není platné datum.',
    'date_format'               => 'Hodnota :attribute neodpovídá formátu :format.',
    'different'                 => 'Pole :attribute a :other musí být různé.',
    'digits'                    => 'Pole :attribute musí mít :digits číslic.',
    'digits_between'            => 'Pole :attribute musí mít mezi :min a :max číslicemi.',
    'email'                     => 'Pole :attribute musí být platná e-mailová adresa.',
    'exists'                    => 'Vybraná hodnota :attribute je neplatná.',
    'image'                     => 'Pole :attribute musí být obrázek.',
    'in'                        => 'Vybraná hodnota :attribute je neplatná.',
    'integer'                   => 'Pole :attribute musí být celé číslo.',
    'ip'                        => 'Pole :attribute musí být platná IP adresa.',
    'max'                       => array(
        'numeric' => 'Hodnota :attribute nesmí být větší než :max.',
        'file'    => 'Soubor :attribute nesmí být větší než :max kilobajtů.',
        'string'  => 'Pole :attribute nesmí mít více než :max znaků.',
        'array'   => 'Pole :attribute nesmí obsahovat více než :max položek.',
    ),
    'mimes'                     => 'Pole :attribute musí být soubor typu: :values.',
    'min'                       => array(
        'numeric' => 'Hodnota :attribute musí být alespoň :min.',
        'file'    => 'Soubor :attribute musí mít alespoň :min kilobajtů.',
        'string'  => 'Pole :attribute musí mít alespoň :min znaků.',
        'array'   => 'Pole :attribute musí obsahovat alespoň :min položek.',
    ),
    'not_in'                    => 'Vybraná hodnota :attribute je neplatná.',
    'numeric'                   => 'Pole :attribute musí být číslo.',
    'regex'                     => 'Formát pole :attribute je neplatný.',
    'required'                  => 'Pole :attribute je povinné.',
    'required_if'               => 'Pole :attribute je povinné, pokud :other je :value.',
    'required_with'             => 'Pole :attribute je povinné, pokud je přítomno :values.',
    'required_with_all'         => 'Pole :attribute je povinné, pokud jsou přítomny všechny :values.',
    'required_without'          => 'Pole :attribute je povinné, pokud není přítomno :values.',
    'required_without_all'      => 'Pole :attribute je povinné, pokud nejsou přítomny žádné z :values.',
    'same'                      => 'Pole :attribute a :other se musí shodovat.',
    'size'                      => array(
        'numeric' => 'Hodnota :attribute musí být :size.',
        'file'    => 'Soubor :attribute musí mít :size kilobajtů.',
        'string'  => 'Pole :attribute musí mít :size znaků.',
        'array'   => 'Pole :attribute musí obsahovat :size položek.',
    ),
    'unique'                    => 'Hodnota :attribute již byla použita.',
    'url'                       => 'Formát pole :attribute je neplatný.',
    'template_exists'           => 'Vybraná hodnota :attribute je neplatná.',
    'is_valid_captcha'          => 'Zadaný kód captcha je neplatný nebo nesprávný, zkuste to prosím znovu.',
    'user_password_strength'    => 'Pole :attribute musí obsahovat: :user_password_strength.',
    'operator_password_strength' => 'Pole :attribute musí obsahovat: :operator_password_strength.',

    /*
     * 2.1.0
     */
    'logo'                      => 'Logo musí odkazovat na platný soubor obrázku (přímá URL nebo relativní cesta k základnímu adresáři).',

    /*
     * 2.2.0
     */
    'required_with_translation' => 'Překlad :translation pro pole :attribute je povinný, pokud je přítomno :values.',
    'max_translation'           => 'Překlad :translation pro pole :attribute nesmí mít více než :max znaků.',
    'unique_translation'        => 'Překlad :translation pro pole :attribute již byl použit.',

    /*
     * 2.3.0
     */
    'required_translation'      => 'Překlad :translation pro pole :attribute je povinný.',
    'customfield_not_cyclic'    => 'Pole nemůže záviset na jednom ze svých podřízených polí.',

    /*
     * 2.3.1
     */
    'is_slug'                   => 'Pole slug může obsahovat pouze alfanumerické znaky, speciální znaky prosím zakódujte procenty.',
    'article_slug_unique'       => 'Slug již byl použit.',
    'captcha_required'          => 'Captcha je povinná.',
    'ticket_number_format'      => 'Formát čísla požadavku je neplatný.',

    /*
     * 2.4.0
     */
    'after_or_equal'            => 'Pole :attribute musí být datum po nebo rovno :date.',
    'before_or_equal'           => 'Pole :attribute musí být datum před nebo rovno :date.',
    'dimensions'                => 'Pole :attribute má neplatné rozměry obrázku.',
    'distinct'                  => 'Pole :attribute obsahuje duplicitní hodnotu.',
    'file'                      => 'Pole :attribute musí být soubor.',
    'filled'                    => 'Pole :attribute musí mít hodnotu.',
    'gt'                        => array(
        'numeric' => 'Hodnota :attribute musí být větší než :value.',
        'file'    => 'Soubor :attribute musí být větší než :value kilobajtů.',
        'string'  => 'Pole :attribute musí mít více než :value znaků.',
        'array'   => 'Pole :attribute musí obsahovat více než :value矫 položek.',
    ),
    'gte'                       => array(
        'numeric' => 'Hodnota :attribute musí být větší nebo rovna :value.',
        'file'    => 'Soubor :attribute musí být větší nebo roven :value kilobajtům.',
        'string'  => 'Pole :attribute musí mít :value znaků nebo více.',
        'array'   => 'Pole :attribute musí obsahovat :value položek nebo více.',
    ),
    'in_array'                  => 'Pole :attribute neexistuje v :other.',
    'ipv4'                      => 'Pole :attribute musí být platná IPv4 adresa.',
    'ipv6'                      => 'Pole :attribute musí být platná IPv6 adresa.',
    'json'                      => 'Pole :attribute musí být platný JSON řetězec.',
    'lt'                        => array(
        'numeric' => 'Hodnota :attribute musí být menší než :value.',
        'file'    => 'Soubor :attribute musí být menší než :value kilobajtů.',
        'string'  => 'Pole :attribute musí mít méně než :value znaků.',
        'array'   => 'Pole :attribute musí obsahovat méně než :value položek.',
    ),
    'lte'                       => array(
        'numeric' => 'Hodnota :attribute musí být menší nebo rovna :value.',
        'file'    => 'Soubor :attribute musí být menší nebo roven :value kilobajtům.',
        'string'  => 'Pole :attribute musí mít :value znaků nebo méně.',
        'array'   => 'Pole :attribute nesmí obsahovat více než :value položek.',
    ),
    'mimetypes'                 => 'Pole :attribute musí být soubor typu: :values.',
    'not_regex'                 => 'Formát pole :attribute je neplatný.',
    'present'                   => 'Pole :attribute musí být přítomno.',
    'required_unless'           => 'Pole :attribute je povinné, pokud :other není v :values.',
    'string'                    => 'Pole :attribute musí být řetězec.',
    'timezone'                  => 'Pole :attribute musí být platná časová zóna.',
    'uploaded'                  => 'Soubor :attribute se nepodařilo nahrát.',

    /*
     * 2.5.0
     */
    'domain'                    => 'Jedna nebo více doménových jmen nejsou platné.',

    /*
     * 2.5.1
     */
    'valid_twig'                => 'Hodnota :attribute je neplatná. Pro podrobnosti o chybě použijte tlačítko „Náhled“.',

    /*
     * 3.0.0
     */
    'embed_image'               => 'Pole :attribute musí být soubor typu: jpeg, png nebo gif.',
    'starts_with'               => 'Pole :attribute musí začínat jednou z následujících hodnot: :values.',

    /*
     * 3.5.0
     */
    'phone'                     => 'Zadané telefonní číslo je neplatné.',

    /*
     * 4.3.0
     */
    'is_invalid'                => 'Hodnota :attribute je neplatná.',

    /*
     * 5.0.0
     */
    'current_password'           => 'Heslo je nesprávné.',
    'department_email_per_brand' => 'Pro každou značku přiřazenou tomuto oddělení musí existovat e-mailový účet.',
    'department_has_a_priority'  => 'Oddělení :departments jsou veřejná a musí být přiřazena alespoň jedné prioritě.',

    /*
    |--------------------------------------------------------------------------
    | Vlastní validační jazykové řetězce
    |--------------------------------------------------------------------------
    |
    | Zde můžete určit vlastní validační zprávy pro atributy pomocí konvence
    | „atribut.pravidlo“ pro pojmenování řetězců. To umožňuje rychle zadat
    | specifický vlastní jazykový řetězec pro dané pravidlo atributu.
    |
    */

    'custom' => array(
        'roles.*' => array(
            'exists' => 'Vybraná role je neplatná.',
        ),
        'category.*.type' => array(
            'required' => 'Musí být vybrán jeden nebo více typů samoobsluhy.',
        ),
        'category.*.categories' => array(
            'required' => 'Pokud byl vybrán typ samoobsluhy, je vyžadována jedna nebo více kategorií.',
            'exists'   => 'Jedna nebo více vybraných kategorií je neplatná.',
        ),
        'brand.*' => array(
            'exists' => 'Vybraná značka je neplatná.',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Vlastní validační atributy
    |--------------------------------------------------------------------------
    |
    | Následující jazykové řetězce slouží k nahrazení zástupných symbolů atributů
    | něčím čitelnějším, například „E-mailová adresa“ místo „email“. To nám
    | pomáhá vytvářet zprávy trochu přehlednější.
    |
    */

    'attributes' => array(),
);