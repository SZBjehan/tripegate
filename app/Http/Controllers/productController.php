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

        $qquery = "SELECT product_id , COUNT(o.product_id) as HighestAmount FROM orders o, products p WHERE p.id = o.product_id GROUP BY o.product_id";
        $paData = \DB::select($qquery);

        $tab = '<table style="width:100%" border="1">
                    <tr style="background-color:lightgray">
                        <th> Product ID    </th>
                        <th> Highest Amount   </th>
                    </tr>
        ';
        foreach($paData as $values){
            $tab.=<<<EOT
            <tr>
                <th>$values->product_id</th>
                <th>$values->HighestAmount</th>
                
            </tr>
            EOT;

        }
        $tab.='</table>';
             


        return $tab;//view('order', ['orders'=>$oData]);





    }
  
}
 