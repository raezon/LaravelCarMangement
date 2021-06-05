<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
       
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
      
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        
  
        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
     
        $request->validate([
            'matricule' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
      
           
        $data = $request->all();
        
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    protected function create(array $data)
    {
        return User::create([
            'matricule' => $data['matricule'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    

    public function dashboard()
    {

        if(Auth::check()){
            //Auth::user() 3ibara 3en model user
            if(Auth::user()->role_as==1)//0-user ,1-admin 
            {
                return view('dashboardAdmin');
            }else{
                return view('dashboard');
            }
        }
  
        return redirect("login")->withSuccess('You are not Authenticated');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}