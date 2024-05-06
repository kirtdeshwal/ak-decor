<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\{
    User,
    RoleUser
};
use Auth;

class AccountController extends Controller
{
    // User login process
    public function user_login(Request $request)
    {
        $request->validate([
            'email'    => 'bail|required',
            'password' => 'bail|required'
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        $auth = Auth::attempt($credentials, $remember );

        if($auth) {
            $request->session()->regenerate();
            $status = 'success';
        } else {
            $status = 'failed';
        }

        return response()->json([
            'status' => $status
        ], 200);
    }

    // User registration process
    public function user_registration(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'country_code' => ['required'],
            'phone' => ['required', 'string', 'max:13', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'first_name' => ucwords($request->first_name),
            'last_name' => ucwords($request->last_name),
            'email' => strtolower($request->email),
            'country_code' => $request->country_code,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'slug' => Str::slug(strtolower($request->email))
        ]);

        if($user)
        {
            RoleUser::create([
                'user_id' => $user->id,
                'role_id' => 2
            ]);
        }

        Auth::login($user);

        return response()->json([
            'status' => 'success'
        ], 200);
    }
}
