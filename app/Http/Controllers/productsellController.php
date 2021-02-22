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

        
        $tab = '<table style="width:100%" border="1">
                    <tr style="background-color:lightgray">
                        <th> Product ID    </th>
                        <th> Highest Selling   </th>
                    </tr>
        ';
        foreach($psData as $values){
            $tab.=<<<EOT
            <tr>
                <th>$values->product_id</th>
                <th>$values->Sold</th>
                
            </tr>
            EOT;

        }
        $tab.='</table>';
        



        return $tab;//view('productsell', ['products'=>$psData]);
    }
}
