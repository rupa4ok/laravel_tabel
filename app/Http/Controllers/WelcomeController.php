<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $items = BlogPost::paginate(20);
        
        return view('welcome', compact('items'));
    }
    
}
