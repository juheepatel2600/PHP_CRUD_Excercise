<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request)
{
    if ($request->input('pin') === env('PIN')) {
        $request->session()->put('authenticated', time());
        return redirect()->intended('success');
    }

    return view('auth.login', [
        'message' => 'Provided PIN is invalid. ',
    ]);
    
}
}
