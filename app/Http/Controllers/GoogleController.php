<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->id)->orWhere('email',$user->email)->first();
       
            if($finduser){
       
                Auth::login($finduser, true);
                // return Auth::user()->name;
                return redirect()->intended('feed');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                    'username' => strtolower(str_replace(' ', '', $user->name))
                ]);
      
                Auth::login($newUser, true);
      
                return redirect()->intended('feed');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
