<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function register(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');

            $response = Http::attach('img', file_get_contents($image), $image->getClientOriginalName())
                ->post(env('API') . '/register', [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                    'password_confirmation' => $request->input('password_confirmation'),
                    'phone' => $request->input('phone'),
                    'address' => $request->input('address'),
                    'image' => $request->file('image')->store('public/images'),
                ]);
        } else {
            $response = Http::post(env('API') . '/register', $request->all());
        }

        $response = $response->json();
        // dd($response);

        return redirect('/login')->with('success', $response['message']);
    }

    public function loginUser(Request $request)
    {
        // Make request to external API
        $response = Http::post(env('API') . '/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $response = $response->json();
        // dd($response);

        if ($response['status'] == 'success') {
            // Get user credentials from API response
            $credentials = [
                'email' => $response['user']['email'],
                'password' => $request->input('password')
            ];

            // Attempt to login the user
            if (auth()->attempt($credentials)) {
                $request->session()->put('user', $response['user']);
                // set cookie
                // Get token from db
                $token = DB::table('user_tokens')->where('user_id', $response['user']['id'])->first();
                // dd($token);
                return redirect('/')->with('success', $response['message'])->cookie('token', $token->token, time() + (86400 * 30), "/");
            }
        }
            return redirect('/login')->with('error', 'Invalid credentials');
    }

    public function loginAdmin(Request $request)
    {
        // Make request to external API
        $response = Http::post(env('API') . '/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $response = $response->json();
        // dd($response);

        if ($response['status'] == 'success') {
            // Get user credentials from API response
            $credentials = [
                'email' => $response['user']['email'],
                'password' => $request->input('password')
            ];

            // Attempt to login the user
            if (auth()->attempt($credentials)) {
                $request->session()->put('user', $response['user']);
                // set cookie
                // Get token from db
                $token = DB::table('user_tokens')->where('user_id', $response['user']['id'])->first();
                // dd($token);
                return redirect('/admindash')->with('success', $response['message'])->cookie('token', $token->token, time() + (86400 * 30), "/");
            }
        }

        return redirect('/login')->with('error', 'Invalid credentials');
    }

    public function logoutUser()
    {
        Session::flush();
        Auth::logout();

        return redirect('/')->with('success', 'Logout Success');
    }

    public function profile(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => $request->cookie('token')
        ])->get(env('API') . '/user/profile');
        $response = $response->object();
        // get user data
        // then pass to frontend as user
        $user = $response->data;
        // dd($user);
        $balance = DB::table('user_balances')->where('user_id', $user->id)->first();
        // check if use balance is exist in database
        // if not, create new balance
        if (!$balance) {
            DB::table('user_balances')->insert([
                // generate uuid
                'id' => \Illuminate\Support\Str::uuid(),
                'user_id' => $user->id,
                'balance' => 10000,
            ]);
        }
        $user_balance = $balance->balance;

        if ($user_balance == 0) {
            $user_balance = 1000;
        } else {
            $user_balance = $balance->balance;
        }

        // dd($user);
        return view('profileview', compact('user', 'user_balance'));
    }

    public function updateProfile(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');

            $response = Http::withHeaders([
                'Authorization' => $request->cookie('token'),
            ])->attach('img', file_get_contents($image), $image->getClientOriginalName())
                ->put(env('API') . '/user/profile', [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'address' => $request->input('address'),
                    'image' => $request->file('image')->store('public/images'),
                ]);
        } else {
            $response = Http::withHeaders([
                'Authorization' => $request->cookie('token'),
            ])->put(env('API') . '/user/profile', $request->all());
        }

        $response = $response->json();
        dd($response);

        if ($response['status'] == 'success') {
            return redirect('/login')->with('success', $response['message']);
        }

        return view('/profileview')->with('success', $response['message']);
    }
}
