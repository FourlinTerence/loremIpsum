<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SuscribRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): View { 
        
        $categories = Category::all();
        return view('auth.index', [
            'categories' => $categories    
    ]);
    }

    public function logout(){

        Auth::logout();
        return to_route('auth.login');
    }

    public function dologin(LoginRequest $request){
        
        $credentials = $request->validated();
       
       if (Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->route('index');
       
       }
       
       return to_route('auth.login')->withErrors([
        'email'=>'Email invalide'
       ])->onlyInput('email');
    
    }

    public function suscrib(SuscribRequest $request){
        
        $data = $request->validated(); 
  
        $user = User::create($data); 
    
        return redirect()
            ->route('index')
            ->with('success', "L'abbonement est reussi");
    }
    
        
}
