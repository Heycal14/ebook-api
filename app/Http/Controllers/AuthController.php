<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119087',
            'Heycal Rahmandia Putra',
            'Laki-laki',
            '+62 812-2604-5893',
            'XII RPL 3'
        ]);
    }
}
