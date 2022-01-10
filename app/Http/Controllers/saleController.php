<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class saleController extends Controller
{
    public function store( Request $request){
        $data = $request->only('user_id','customer_id','vendor_id','sale_status_id','type_machine_id','spare_parts','detail_machine','price','aditional');
        $sale = Sale::create($data);
        if(!$sale) return response()->json('Server error',500);
    
        return response()->json($sale, 201);
    }


    public function update( Request $request, $id){
        $data = $request->only('user_id','customer_id','vendor_id','sale_status_id','type_machine_id','spare_parts','detail_machine','price','aditional');
        $sale = Sale::find($id);
        if(!$sale->update($data)) return response()->json('Server error',500);
    
        return response()->json($sale, 200);
    }

    public function index(){
        $data = Sale::get();
        if(!$data) return response()->json('Server error',500);
    
        return response()->json($data, 200);
    }

    public function getSale($id){
        $sale = Sale::find($id);

        if(!$sale) return response()->json('Server error',500);
    
        return response()->json($sale, 200);
    }

    public function remove($id){
        $sale = Sale::find($id);
        if(!$sale->delete()) return response()->json('Server error',500);
    
        return response()->json('Sale delete success', 200);
    }
}
