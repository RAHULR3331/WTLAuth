<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authentication;

class AuthController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function ind(){
        return view ('user.index');
    }
}
