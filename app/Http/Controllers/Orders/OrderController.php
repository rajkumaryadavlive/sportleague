<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trait\UserTrait;
class OrderController extends Controller
{
    use UserTrait;
    public function index()
    {
        
    }

    
  

    public function store(Request $request)
    {
        authenticate($wallet_address);
    }

    
    public function show($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
}
