<?php

// $patch1 = "top10milliondomains.txt";

// $patch2 = "top10milliondomains.csv";

$patch = "input/small";

return (object)[
    // Application bootstrap options
    'bootstrap' => (object)[
        'classes' => "Components/Readers/%s.php",
    ],
    // Input file settings
    'input' => (object)[
        'dir' => $patch,
    ],
];