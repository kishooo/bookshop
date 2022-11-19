<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\copying;

class CopyController extends Controller
{
    //
    public function insertCopy(Request $request){
        copying::create([
        'copies_number' => $request ->copies_number ,
        'totalPrice' => $request ->copies_number *0.5
        ]);
    }
}
