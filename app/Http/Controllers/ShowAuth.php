<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post;
use App\Slider;
class ShowAuth extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
     }
     public function index()
    {
        return redirect('/')->with('success','Now Your Account is Verified Successfully');
    }
}
