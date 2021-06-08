<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class homeController extends Controller
{
    public function index(){
        $home=Home::all();
        dd($home);
    }
}
