<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\order;
use App\Models\product;

class orderController extends Controller
{
    //
    function show()
    {
    //    $oData= order::all();
    //    return view('order', ['orders'=>$oData]);
        $query = "SELECT o.id, country, user_id, product_id, price FROM orders o, products p, user u WHERE p.id = o.product_id and u.id = o.user_id ";
        $oData = \DB::select($query);
        return $oData;//view('order', ['orders'=>$oData]);

    }
}
