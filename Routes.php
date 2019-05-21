<?php
return [
    App\Core\Route::get('|^category/([0-9]+)/delete/?$|','Main', 'home'),
    App\Core\Route ::any('|^.*$|','Main','home')
];