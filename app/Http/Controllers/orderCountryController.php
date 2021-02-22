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

        
        $tab = '<table style="width:100%" border="1">
                    <tr style="background-color:lightgray">
                        <th> Product ID    </th>
                        <th> Country    </th>
                        <th> User ID    </th>
                        <th> Product ID </th>
                        <th> Price      </th>
                        
                    </tr>
        ';
        foreach($ocData as $values){
            $tab.=<<<EOT
            <tr>
                <th>$values->id</th>
                <th>$values->country</th>
                <th>$values->user_id</th>
                <th>$values->product_id</th>
                <th>$values->price</th>
                
            </tr>
            EOT;

        }
        $tab.='</table>';
        



        return $tab;//view('order', ['orders'=>$oData]);

    }
}
