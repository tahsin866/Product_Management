<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product_managementController extends Controller
{
    function index(){

        return view('pages/prodcut_management');
    }
}
