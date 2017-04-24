<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Store;

class StoresController extends Controller
{
    
    public function index()
    {
        $stores = Store::all();
        return response()->json($stores);
    }
    
}