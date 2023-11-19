<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donald Trump";
        $age = "75";

        // Create data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create a response with data and set cookie
        $response = new Response($data, 200);
        $response->cookie(
            $cookieName,
            $cookieValue,
            $cookieMinutes,
            $cookiePath,
            $cookieDomain,
            $cookieSecure,
            $cookieHttpOnly
        );

        return $response;
    }


    
}
