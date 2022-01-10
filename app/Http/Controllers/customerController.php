<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function store( Request $request){
        $data = $request->only('rut','direction','email','contact','phone_number');
        $customer = Customer:: create($data);
        
        if(!$customer) return response()->json('server error',500);

        return response()->json('customer create success',201);
    }

     
    public function update( Request $request, $id){
        $data = $request->only('rut','direction','email','contact','phone_number');

        $customer = Customer::find($id);

        $customer->update($data);

        if(!$customer) return response()->json('server error',500);

        return response()->json('Customer update success',200);
    }


    public function index(){
        $customers = Customer::get();

        if(!$customers) return response()->json('Server error',500);

        return response()->json($customers,200);
    }

    
    public function getCustomer($id){
        $customer = Customer::find($id);
        
        if(!$customer) return response()->json('Server error',500);

        return response()->json($customer,200);
    }

 
    public function remove($id){
        $customer = Customer::find($id);
        
        if(!$customer->delete()) return response()->json('Server error',500);

        return response()->json('Customer delete success',200);
    }
}
