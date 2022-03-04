<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
    	$loggedIn = Auth::user();

     $data = DB::table('admin')
       ->select(
        DB::raw('jenis_kelamin as jenis_kelamin'),
        DB::raw('count(*) as number'))
       ->groupBy('jenis_kelamin')
       ->get();
     $array[] = ['jenis_kelamin', 'number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->jenis_kelamin, $value->number];
     }
     return view('dashboards.index', compact('loggedIn'))->with('jenis_kelamin', json_encode( $array));
    }
}
