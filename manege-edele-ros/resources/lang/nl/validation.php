<?php

return [
    'attributes' => [
        'agendaUsers' => 'gebruikers',
        'start_datum' => 'begin',
        'eind_datum' => 'einde',
    ],
    'required' => 'Het veld :attribute is verplicht.',
    'email' => 'Het veld :attribute moet een geldig e-mailadres bevatten.',
    'accepted' => 'Het :attribute moet geaccepteerd worden.',
    'active_url' => 'Het :attribute is geen geldige URL.',
    'after' => 'Het :attribute moet een datum zijn na :date.',
    'after_or_equal' => 'Het :attribute moet een datum zijn na of gelijk aan :date.',
    'alpha' => 'Het :attribute mag alleen letters bevatten.',
    'alpha_dash' => 'Het :attribute mag alleen letters, cijfers, streepjes en underscores bevatten.',
    'alpha_num' => 'Het :attribute mag alleen letters en cijfers bevatten.',
    'array' => 'Het :attribute moet een array zijn.',
    'before' => 'Het :attribute moet een datum zijn voor :date.',
    'before_or_equal' => 'Het :attribute moet een datum zijn voor of gelijk aan :date.',
    'between' => [
        'numeric' => 'Het :attribute moet tussen :min en :max liggen.',
        'file' => 'Het :attribute moet tussen :min en :max kilobytes groot zijn.',
        'string' => 'Het :attribute moet tussen :min en :max tekens bevatten.',
        'array' => 'Het :attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean' => 'Het :attribute veld moet waar of onwaar zijn.',
];

?>
