<?php

return [
    'plugin' => [
        'name'        => 'Lapas',
        'description' => 'Lapu un izvēļņu funkcijas.',
    ],
    'page' => [
        'menu_label'            => 'Lapas',
        'delete_confirmation'   => 'Vai tu tiešām vēlies dzēst izvēlētās lapas? Šī operācija izdzēsīs arī apakšlapas (ja tādas ir).',
        'no_records'            => 'Neviena lapa netika atrasta',
        'delete_confirm_single' => 'Vai tu tiešām vēlies dzēst izvēlēto lapu? Šī operācija izdzēsīs arī apakšlapas (ja tādas ir).',
        'new'                   => 'Jauna lapa',
        'add_subpage'           => 'Pievienot apakšlapu',
        'invalid_url'           => 'Nekorekts saites formāts. Saitei vajadzētu sākties ar slīpsvītru un tā var saturēt ciparus, latīnu alfabēta burtus, slīpsvītras un sekojošos sibolus: _-/.',
        'url_not_unique'        => 'Šādu saiti izmanto jau kāda cita lapa.',
        'layout'                => 'Izkārtojums',
        'layouts_not_found'     => 'Izkārtojumi netika atrasti',
        'saved'                 => 'Lapa tika veiksmīgi saglabāta.',
        'tab'                   => 'Lapas',
        'manage_pages'          => 'Pieeja labot statiskās lapas',
        'manage_menus'          => 'Pieeja labot statiskās izvēlnes',
        'access_snippets'       => 'Pieeja koda fragmentiem',
        'manage_content'        => 'Pieeja labot statisko saturu',
    ],
    'menu' => [
        'menu_label'            => 'Izvēlnes',
        'delete_confirmation'   => 'Vai tu tiešām vēlies dzēst izvēlētās izvēlnes?',
        'no_records'            => 'Izvēlnes netika atrastas',
        'new'                   => 'Jauna izvēlne',
        'new_name'              => 'Jauna izvēlne',
        'new_code'              => 'jauna-izvelne',
        'delete_confirm_single' => 'Vai tu tiešām vēlies dzēst šo izvēlni?',
        'saved'                 => 'Izvēlne tika veiksmīgi saglabāta',
        'name'                  => 'Vārds',
        'code'                  => 'Kods',
        'items'                 => 'Izvēlnes priekšmeti',
        'add_subitem'           => 'Pievienot apakšpriekšmetu',
        'code_required'         => 'Kods ir obligāts lauks.',
        'invalid_code'          => 'Nepreaizs koda formāts. Kods var saturēt ciparus, latīnu alfabēta burtus un sekojošos simbolus: _-',
    ],
    'menuitem' => [
        'title'                      => 'Nosaukums',
        'editor_title'               => 'Labot izvēlnes priekšmetu',
        'type'                       => 'Tips',
        'allow_nested_items'         => 'Atļaut iegultos priekšmetus',
        'allow_nested_items_comment' => 'Iegultie priekšmeti var tikt dinamiski ģenerēti',
        'url'                        => 'Saite',
        'reference'                  => 'Atsauce',
        'title_required'             => 'Nosaukuma lauks ir obligāts',
        'unknown_type'               => 'Nezināms izvēlnes tips',
        'unnamed'                    => 'Izvēlnes priekšmets bez nosaukums',
        'add_item'                   => 'Pievienot Pr<u>i</u>ekšmetu',
        'new_item'                   => 'Jauns izvēlnes priekšmets',
        'replace'                    => 'Aizvietot šo priekšmetu ar tā ģenerētajiem bērniem',
        'cms_page'                   => 'CMS lapa',
        'cms_page_comment'           => 'Izvēlies lapu, kas atvērsies, kad tiks noklikšķiāts uz šī izvēlnes priekšmeta.',
        'reference_required'         => 'Izvēlnes priekšmeta atsauce ir obligāts lauks.',
        'url_required'               => 'Saite ir obligāti jāievada',
        'cms_page_required'          => 'Lūdzu, izvēlies CMS lapu',
        'code'                       => 'Kods',
        'code_comment'               => 'Ievadi izvēlnes priekšmeta kodu, ja tam vēlies piekļūt izmantojot API.',
        'static_page'                => 'Statiska lapa',
        'all_static_pages'           => 'Visas statiskās lapas',
    ],
    'content' => [
        'menu_label'       => 'Saturs',
        'cant_save_to_dir' => 'Satura failu saglabāšana statisko lapu direktorijā nav atļauta.S',
    ],
    'sidebar' => [
        'add'    => 'Pievienot',
        'search' => 'Meklēt...',
    ],
    'object' => [
        'invalid_type' => 'Nezināms objekta tips',
        'not_found'    => 'Pieprasītais objekts netika atrasts.',
    ],
    'editor' => [
        'title'                     => 'Nosaukums',
        'new_title'                 => 'Jaunās lapas nosaukums',
        'content'                   => 'Saturs',
        'url'                       => 'Saite',
        'filename'                  => 'Faila nosaukums',
        'layout'                    => 'Izkārtojums',
        'description'               => 'Skaidrojums',
        'preview'                   => 'Priekšskats',
        'enter_fullscreen'          => 'Atvērt pilnekrāna režīmu',
        'exit_fullscreen'           => 'Aizvērt pilnekrāna režīmu',
        'hidden'                    => 'Paslēpts',
        'hidden_comment'            => 'Paslēptās lapas varēs redzēt tikai ielogojušies back-end lietotāji.',
        'navigation_hidden'         => 'Paslēpt navigācijā',
        'navigation_hidden_comment' => 'Atķeksē šo kasti, lai automātiski ģenerētu izvēlnes un breadcrumbus.',
    ],
    'snippet' => [
        'partialtab'            => 'Koda fragmenti',
        'code'                  => 'Koda fragmenta kods',
        'code_comment'          => 'Ievadi kodu, lai padarītu šo partialu par koda fragmentu.',
        'name'                  => 'Nosaukums',
        'name_comment'          => 'Nosaukums tiks rādīts koda fragmentu sarakstā.',
        'no_records'            => 'Koda fragmenti netika atrasti',
        'menu_label'            => 'Koda fragmenti',
        'column_property'       => 'Nosaukums',
        'column_type'           => 'Tips',
        'column_code'           => 'Kods',
        'column_default'        => 'Noklusējuma vērtība',
        'column_options'        => 'Opcijas',
        'column_type_string'    => 'Teksts',
        'column_type_checkbox'  => 'Checkboksis',
        'column_type_dropdown'  => 'Dropdowns',
        'not_found'             => 'Koda fragments ar pieprasīto kodu :code netika atrasts tēmā.',
        'property_format_error' => 'Kodam vajadzētu sākties ar latīņu alfabēta burtu un tas var saturēt latīņu alfabēta burtus un ciparus',
        'invalid_option_key'    => 'Nekorekta dropdowna vērtība: :key.',
    ],
    'component' => [
        'static_page_description'        => 'Izvada statisku lapu CMS iegultnē.',
        'static_menu_description'        => 'Izvada izvēlni CMS iegultnē.',
        'static_menu_menu_code'          => 'Specificē komponentes kodu, ko izvadīt',
        'static_breadcrumbs_description' => 'Izvada breadcrumbus CMS iegultnē.',
    ],
];