<?php

namespace App\Http\Controllers;

use App\Rsa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ApiController extends Controller
{
    public function getRsaKey($identifier, Rsa $rsa)
    {
        // generate their id and a random string first
        $random = rand();

        $preGenerated = $random.$identifier;
       
    	// generate an RSA key based on their identifier
    	$key = Crypt::encrypt($preGenerated);

    	$rsa->generate($random, $identifier, $key);

    	return response()->json([
            'rsa' => $key,
            'url' => urldecode(action('PayController@getPayment', $identifier))
        ]);
    }
}
