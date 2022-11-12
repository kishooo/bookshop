<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

//use Illuminate\Routing\Controller as BaseController;

class CasherController extends Controller
{
  public function index(){
    return view('index');
  }
  public function taswer(){
    return view('taswer');
  }
  public function recipte(){
    $recipte =DB::select('SELECT * FROM receipt');
    return view('recipte',['reciptes'=>$recipte]);
  }
  public function taswer1(Request $request){
    print_r($request->Input('copy'));
    redirect('/');
  }
}
