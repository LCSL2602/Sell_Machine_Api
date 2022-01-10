<?php

namespace App\Http\Controllers;

use App\Models\SaleStatus;
use Illuminate\Http\Request;

class saleStatusController extends Controller
{
    public function store( Request $request){
        $data = $request->only('name','description');
        $saleStatus = SaleStatus:: create($data);
        
        if(!$saleStatus) return response()->json('server error',500);

        return response()->json('Sale status create success',201);
    }

    public function update( Request $request, $id){
        $data = $request->only('name','description');

        $saleStatus = SaleStatus::find($id);

        $saleStatus->update($data);

        if(!$saleStatus) return response()->json('server error',500);

        return response()->json('type Machine update success',200);
    }

    public function index(){
        $data = SaleStatus::get();
        
        if(!$data) return response()->json('server error',500);

        return response()->json($data);
    }

    public function getSaleStatus($id){
        $saleStatus = SaleStatus::find($id);
        
        if(!$saleStatus) return response()->json('server error',500);

        return response()->json($saleStatus);
    }

    public function remove($id){
        $saleStatus = SaleStatus::find($id);

        if(!$saleStatus->delete()) return response()->json('server error',500);

        return response()->json('Sale status delete success');
    }
}
