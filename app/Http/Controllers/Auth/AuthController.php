<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Traits\UserTrait;
use Auth;
class AuthController extends Controller
{
    
    use UserTrait;
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('wallet_address');

         return authenticate($credentials);
    }

    public function store(Request $request)
    {
       
    }

    
    public function update(Request $request, $id)
    {
        
    }
  
    
   
}
