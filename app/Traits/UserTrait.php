<?php
namespace App\Traits;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use App\Models\User;
use Auth;
trait UserTrait {
    
    public function authenticate($wallet_address)
    {
        $credentials =$wallet_address;

        if (Auth::attempt($credentials)) {
            // Authentication passed...

            return response()->json(['id' =>auth->user()->id, 'isLogin' =>true]);

          }
        else
        {
           $email=$wallet_address."@gmail.com";

             User::create([
                'name' =>$wallet_address,
                'email' => $email,
                'role'=>'user',
                'wallet_address'=>$wallet_address,
                'password' => Hash::make("Test@123")
            ]);

            if (Auth::attempt($credentials)) {
                // Authentication passed...
    
                return response()->json(['id' =>auth->user()->id, 'isLogin' =>true]);
    
              }

        }
    }


    
}