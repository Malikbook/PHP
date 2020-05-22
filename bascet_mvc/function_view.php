<?php

function return_view ($page, array $data = []){
    $data['View'] = $page;
    extract ($data);
    require_once __DIR__."/views/page/view_page.php";
}