<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function inputUser(Request $request){
        return view('data.input-user');
    }

    public function outputUser(Request $request){

        $name = $request->name;
        $email = $request->email;
        $telephone = $request->telephone;
        $comments = $request->comments;

        return view('data.output-user')->with([
            'name' => $name,
            'email' => $email,
            'telephone' => $telephone,
            'comments' => $comments,
        ]);
    }
}
