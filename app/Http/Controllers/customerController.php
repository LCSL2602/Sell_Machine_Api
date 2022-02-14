<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\Customer\storeRequest;
use App\Http\Requests\Customer\updateRequest;

class customerController extends Controller
{
    public function store(storeRequest $request){
        $data = $request->only('rut','direction','email','contact','phone_number');
        $customer = Customer:: create($data);
        
        if(!$customer) return response()->json('server error',500);

        return response()->json('customer create success',201);
    }

     
    public function update(updateRequest $request, $id){
        $data = $request->only('rut','direction','email','contact','phone_number');

        $customer = Customer::find($id);

        $customers = Customer::where('id', '!=', $id)->where('rut' ,$data['rut'])->get();
        if(count($customers) !== 0) return response()->json('Rut already exist', 400);

        $customers = Customer::where('email', $data['email'])->where('id', '!=', $id)->get();
        if(count($customers) !== 0) return response()->json('Email already exist', 400);

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
