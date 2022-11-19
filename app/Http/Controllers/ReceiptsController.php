<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;

class ReceiptsController extends Controller
{
    //
   // public function calculatePrice($copies, $printings){return $printings * 2 + $copies ;}

    public function insertReceipt(Request $request){
        $copies = $request->copies_number != null ? $request->copies_number : 0 ;
        $printings = $request->printing_number != null ? $request->printing_number : 0 ;
        Receipt::create([
            'copies_number' => $copies ,
            'printing_number' => $printings,
            'total_price' => $printings * 2 + $copies 
        ]);
    }

    
}
