<?php

Route::get("/", function () {
    $nombre = "Luis Miguel";
    return view("welcome",['name' => $nombre]);
});

Route::get("/clients",function(){
    return view("clients.table");
});




