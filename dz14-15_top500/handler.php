<?php

require_once __DIR__."/config.php";

$txt = new Raiting_txt($patch1);

$csv = new Raiting_csv($patch2);

$top = new File_rider($txt->reading(), $csv->reading());