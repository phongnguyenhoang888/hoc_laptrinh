<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function GetLogin(){
        return view('login');

    }

    public function PostLogin(Request $request){
        // echo $request->username."--------";
        // echo $request->password;


        $biena = $request->all();
        dd($biena);
    }


}



?>