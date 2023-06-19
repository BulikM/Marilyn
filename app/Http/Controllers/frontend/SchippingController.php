<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchippingController extends Controller
{
    public function index()
    {


        return view ('cart-address');
    }
}
