<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisteringRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function callback($provider)
    {
        $data = Socialite::driver($provider)->user();
        $user = User::query()
            ->where('email', $data->getEmail())
            ->first();
        $checkExist = true;
        if(is_null($user)) {
            $user = new User();
            $user->email = $data->getEmail();
            $checkExist = false;
        }
        $user->name = $data->getName();
        $user->avatar = $data->getAvatar();
        $user->save();

        Auth::login($user);
        if($checkExist) {
            return redirect()->route('admin.home');
        }
        return redirect()->route('register');
    }
    public function logining(Request $request) {
        try {
            $user = User::query()
            ->where('email', $request->get('email'))
            ->firstOrFail();
        if(!Hash::check($request->get('password'), $user->password)) {
            throw new Exception('Invalid password');
        }
        Auth::login($user);
        session()->put('id', $user->id);
        session()->put('name', $user->name);
        session()->put('avatar', $user->avatar);
        session()->put('role', $user->role);

        return redirect()->route('admin.home');
        } catch (\throwable $e) {
            return redirect()->route('login');
        }
    }
    public function registering(RegisteringRequest $request)
    {
        $password = Hash::make($request->password);
        if(auth()->check()){
            User::where('id', auth()->user()->id)
                ->update([
                    'password' => $password
                ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,       
            ]);
            Auth::login($user);
        }
        return redirect()->route('login');
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
    
}