<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\productsell;
use App\Models\order;
use App\Models\search;

class searchController extends Controller
{
    //
    function search(Request $request)
    {

//    $request-> validate([
//            'query'=>'required', 

//        ]);
//        $query = $request->input('query');
      //dd($query);
        $query = $request->get('query');
        //dd($query);
        $posts= DB::table('orders')->where('id','=',"$query")->get();
        //->orwhere('products','=',"$query")->get();
        //dd($posts);

        $emp= '<table style="width:100%">';
        foreach($posts as $values){
            $emp.=<<<EOT
            <tr>
                <th>$values->id</th>
                <th>$values->user_id</th>
                <th>$values->product_id</th>
            </tr>
            EOT;

        }
        $emp.='</table>';
        


        return $emp;
    //    return view('/search',compact('posts'));



//    $order=\DB::table('order')->get();
//    foreach ($order as $value){
//        $value->products = DB::table('products')->where('id','=',$value->user_id)->get();
        
//    }

    return $value;


    }
}




//        $search_test = $_GET['queryy'];
  //      $products = search::where('product_id','LIKE', '%'.$search_test.'%') -> with('category') ->get();
//
  //      return view('search',compact('products'));





