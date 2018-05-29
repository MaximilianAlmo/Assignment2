<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Support\Facades\DB;
class ReviewsController extends Controller
{
  /*
  public function index(){
    $movies = DB::table('movies')->get();
    return response()->json($movies);
  }
  public function show($id){
    $movie = DB::table('movies')->find($id);
    return response()->json($movie);
  }
  */

  public function index(){
    $reviews = Review::all();
    return response()->json($reviews);
  }
}
