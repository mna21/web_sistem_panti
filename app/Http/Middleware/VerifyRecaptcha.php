<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VerifyRecaptcha
{
    public function handle(Request $request, Closure $next)
    {
        $recaptchaResponse = $request->input('g-recaptcha-response');

        if (!$recaptchaResponse) {
            return back()->withErrors(['recaptcha' => 'Harap verifikasi reCAPTCHA.']);
        }

        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret'   => env('RECAPTCHA_SECRET_KEY'),
                'response' => $recaptchaResponse,
            ]
        ]);

        $result = json_decode($response->getBody(), true);

        if (!$result['success']) {
            return back()->withErrors(['recaptcha' => 'Verifikasi reCAPTCHA gagal.']);
        }

        return $next($request);
    }
}
