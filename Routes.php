<?php
return [
    App\Core\Route ::get( '|^$|'                ,'Main'       ,'home'),
    App\Core\Route ::post( '|^$|'             ,'Main'     ,'postRecord'),
    App\Core\Route ::get( '|^admin?$|'          ,'Admin'     ,'getlogin'),
    App\Core\Route ::post('|^admin?$|'          ,'Admin'     ,'postLogin')

];