<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productsell;
use App\Models\order;
use App\Models\orderCountry;

use App\Models\search;

class orderCountryController extends Controller
{
    //
    function show()
    {
    //    $oData= order::all();
    //    return view('order', ['orders'=>$oData]);
        $query = "SELECT o.id, country, user_id, product_id, price FROM orders o, products p, user u WHERE p.id = o.product_id and u.id = o.user_id";
        $ocData = \DB::select($query);
        return $ocData;//view('order', ['orders'=>$oData]);

    }
}
