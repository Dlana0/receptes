<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {    
        $first='Diana Ozolina';
        
        return view ('pages.about')->with('first', $first);
    }
    
        public function contact()
        {
          return view ('pages.contact');      
    }
}
