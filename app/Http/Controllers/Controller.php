<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
   
    public function indexp(Request $request){
  
        $searchvalue=$request->searchvalue;

     $user=User::search($searchvalue)->orderBy('id','name')->Pagiante($this->NUMBER_PAGES)->withQueryString();


    }
}
