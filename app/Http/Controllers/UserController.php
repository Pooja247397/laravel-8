<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request,$users){
        // echo $id;
        echo '<pre>'; print_r($users);
    }
}
