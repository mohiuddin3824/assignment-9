<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
<<<<<<< HEAD
    function index($id=1254)
=======
    function index($id)
>>>>>>> 8b4faf9f5a700158ed257cc2ddeeaa8b5849e9c0
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            [
                "id"=> $id,
                "name" => $name,
                "age" => $age,
            ],
        ];

        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response()->json(["status"=>"cocki set success", "data"=>$data],200)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        
    }
}
