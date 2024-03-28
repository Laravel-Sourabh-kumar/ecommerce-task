<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
class UsersController extends Controller
{
    public function index()
    {
        $users =User::all();

        return view('users.index', compact('users'));
    }
    public function uiindex(){

        $products = Product::all();

        return view('frontend.users.index',compact('products'));
    }
}
