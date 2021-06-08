<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class contactController extends Controller
{
    public function getContact(){
    	$contacts= Contact::all();
    	dd($contacts);
    }
}
