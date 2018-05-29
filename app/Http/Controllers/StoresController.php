<?php

namespace App\Http\Controllers;
use App\Store;
use Illuminate\Support\Facades\DB;
class StoresController extends Controller
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
    $stores = Store::all();
    return response()->json($stores);
  }

}
