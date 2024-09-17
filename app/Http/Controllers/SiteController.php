<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function formHandler(Request $request){
        $request->validate([
            "name"=>"required|min:3|max:10",
            "email"=>"required|email",
            "message"=>"required"
        ]);
    }
}
