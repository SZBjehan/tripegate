<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productsell;
use App\Models\order;

class productsellController extends Controller
{
    //
    function show()
    {
        $query = "SELECT product_id, COUNT(o.product_id) * p.price as Sold FROM orders o, products p WHERE p.id = o.product_id GROUP BY o.product_id, p.price ORDER BY Sold DESC";
        $psData= \DB::select($query);
        return $psData;//view('productsell', ['products'=>$psData]);
    }
}
