<?php

namespace App\Http\Utility;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController {

    public static function setCookie(Request $request) {
        $minutes = 1;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('status', 'loggedin', $minutes));
        return $response;

    }

    public static function getCookie(Request $request) {
        $value = $request->cookie('status');
        return $value;
    }
}
