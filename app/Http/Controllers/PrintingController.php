<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\printing;

class PrintingController extends Controller
{
    //
    public function insertPrinting(Request $request){
        printing::create([
            'printings_number' => $request->printings_number ,
            'totalPrice' => $request->printings_number
        ]);
    }
}
