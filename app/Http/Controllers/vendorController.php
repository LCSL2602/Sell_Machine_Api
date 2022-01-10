<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    public function store( Request $request){
        $data = $request->only('name','description');

        $vendor = Vendor::create($data);
        if(!$vendor) return response()->json('Server error', 500);

        return response()->json('created vendor success', 201);
    }

    public function update( Request $request, $id){
        $data = $request->only('name','description');
        $vendor = Vendor::find($id);

        if(!$vendor->update($data)) return response()->json('server error',500);

        return response()->json('Vendor update success', 200);
    }


    public function index(){
       $data = Vendor::get();
       if(!$data) return response()->json('server error',500);

       return response()->json( $data , 200);
    }

    public function getVendor($id){
        $data = Vendor::find($id);
        if(!$data) return response()->json('server error',500);

        return response()->json( $data , 200);
    }

   
    public function remove($id){
        $vendor = Vendor::find($id);

        if(!$vendor->delete($vendor)) return response()->json('server error',500);

        return response()->json('Vendor delete success', 200);
    }
}
