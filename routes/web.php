<?php

Route::get("/", function () {
    $nombre = "Luis Miguel";
    return view("welcome",['name' => $nombre]);
});

Route::get('/clients',function(){
    return view("clients.index");
});

Route::get('/files',function(){
    return view('files.index');
});




