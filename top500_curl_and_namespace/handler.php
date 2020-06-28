<?php

// require_once __DIR__."/config.php";


// $csv = new Raiting_csv($patch2);

// var_dump ($config->input );
$top = new Core\File_rider( $config->input );

$txt = new Core\Reader\Raiting_txt($top->create_dataname(), $top->patch());

$csv = new Core\Reader\Raiting_csv($top->create_dataname(), $top->patch());