<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function store(Request $request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validate(
          [
              'first_name' => 'required|string',
              'last_name' => 'required|string',
              'email' => 'required|string|email|unique:users',
              'password' => 'required|confirmed|min:8',
          ]
        );

        $user = new User();

        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        Auth::login($user);

        return redirect()->intended();
    }
}
