<?php
return [
    'mode'                  => 'utf-8',
    'format'                => 'A4',
    'author'                => '',
    'subject'               => '',
    'keywords'              => '',
    'creator'               => '',
    'display_mode'          => 'fullpage',
    'margin_left' => 0,
    'margin_right' => 0,
    'margin_top' => 0,
    'margin_bottom' => 0,
    'margin_header' => 0,
    'margin_footer' => 0,
    'font_path' => public_path('assets/fonts/'),
    'font_data' => [
        'dinnext' => [
            'R'  => 'bahij-thesansarabic-bold.ttf',    // regular font
            'B'  => 'ArbFONTS-DINNextLTArabic-Bold-2.ttf',       // optional: bold font
            'I'  => 'ArbFONTS-DINNextLTArabic-UltraLight-2.ttf',     // optional: italic font
            'BI' => 'ArbFONTS-DINNextLTArabic-Black-2.ttf', // optional: bold-italic font
            'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ]
    ],
    'tempDir'               => base_path('../temp/')

];
