<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Registered;





class AuthenticationController extends Controller
{

    
    // protected function authenticated(Request $request, $user)
    // {
       
    //     Session::flash('popup', true);

    //     return redirect()->intended($this->redirectPath());
    // }
   
    public function register(Request $request){

        try{
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
          
            'password' => 'required|string|min:6|max:20',
            
        ]);
   

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            
            'password' => Hash::make($request->password),
         
        ]);

        return redirect()->route('login');



        
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal Daftar!',
                'error' => $e->getMessage()
            ], 409);
        }
    }
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:20',
        ]);

        if (Auth::attempt($credentials)) {
          
            return redirect()->to('listteacher');
        }
//        return redirect()->to('home')->with('success', 'Berhasil Login!' .$user->name . '!');
    }
    public function getUsername()
    {
    if (Auth::check()) {
        return Auth::user()->name;
    }
    return null;
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
