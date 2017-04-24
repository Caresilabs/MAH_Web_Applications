<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Review;

class ReviewsController extends Controller
{
    
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }
    
}