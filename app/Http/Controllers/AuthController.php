<?php

namespace App\Http\Controllers;

use App\Http\Requests\MobileRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function getMobile()
    {
        return view('auth.mobile');
    }

    public function checkMobile(MobileRequest $request)
    {
        $user = \App\Models\User::where('mobile','=',$request->get('mobile'))->first();

        if ($user) {
            $mobile = $user->mobile;

            if ($user->isActive == false)
            {
                return redirect()->back()->with('error','you have been deactivated by admin!');
            }

            return redirect()->route('getpassword',['mobile' => $mobile]);
        }
            $mobile = $request->get('mobile');
            session(['mobile'=>$mobile]);
            $code = rand(10000,99999);
            Log::info("$mobile: $code");
            Cache::put($mobile,$code,60);
            return redirect(route('getcode'));

    }

    public function getPassword(Request $request)
    {
        return view('auth.password')->with('mobile',$request->mobile);
    }

    public function checkPassword(Request $request)
    {
          $mobile = $request->get('mobile');
          $user = User::where('mobile', $mobile)->first();

        if (Auth::attempt(['mobile' => $mobile, 'password' => $request->get('password')]))
        {
            return view('posts.index')->with('user', $user);
        }

            return redirect()->back();
    }

    public function getCode()
    {
        return view('auth.code');
    }

    public function checkCode(Request $request)
    {
        $mobile = session('mobile');
        $cacheCode = Cache::get($mobile);
        $code = $request->get('code');
        if ($code == null || $cacheCode == null || $code != $cacheCode)
        {
            return redirect(route('getmobile'))->with('error','Please Try Again');
        }
            return redirect(route('register'));

    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => session('mobile'),
                'password' => $request->password,
        ]);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('getmobile');
    }


}
