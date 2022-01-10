<?php

namespace App\Http\Controllers;

use App\Models\typeMachine;
use Illuminate\Http\Request;

class typeMachineController extends Controller
{
    public function store( Request $request){
        $data = $request->only('name','description');
        $typeMachine = typeMachine:: create($data);
        
        if(!$typeMachine) return response()->json('server error',500);

        return response()->json('type Machine create success',201);
    }

     
    public function update( Request $request, $id){
        $data = $request->only('name','description');

        $typeMachine = typeMachine::find($id);

        $typeMachine->update($data);

        if(!$typeMachine) return response()->json('server error',500);

        return response()->json('type Machine update success',200);
    }


    public function index(){
        $typeMachine = typeMachine::get();

        if(!$typeMachine) return response()->json('Server error',500);

        return response()->json($typeMachine,200);
    }

    
    public function getTypeMachine($id){
        $typeMachine = typeMachine::find($id);
        
        if(!$typeMachine) return response()->json('Server error',500);

        return response()->json($typeMachine,200);
    }

 
    public function remove($id){
        $typeMachine = typeMachine::find($id);
        
        if(!$typeMachine->delete()) return response()->json('Server error',500);

        return response()->json('type Machine delete success',200);
    }
}
