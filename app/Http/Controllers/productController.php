<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;

class productController extends Controller
{
    //
    function show()
    {
//        $paData= product::all();
//        return view('product', ['products'=>$paData]);

        $qquery = "SELECT product_id , COUNT(o.product_id) FROM orders o, products p WHERE p.id = o.product_id GROUP BY o.product_id";
        $paData = \DB::select($qquery);
        return $paData;//view('order', ['orders'=>$oData]);





    }
  
}
