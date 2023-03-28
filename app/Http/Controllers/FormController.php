<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function form () {
        $name="hi thare how are u";
        return view('form.form',["form" => $name]);
    }
}
