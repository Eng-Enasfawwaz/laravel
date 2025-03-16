<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\phone;
use Illuminate\Http\Request;

class phonecontrollers extends Controller
{
    public function index(){
        $phone= Phone::findOrFail(1);
        return     $phone->users;
    }
}
