<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class typeMachineController extends Controller
{
    public function index( Request $request){
        var_dump('get all type machines');
    }

    public function store( Request $request){
        var_dump('Create type machine');
        var_dump($request->all());
    }

    public function getTypeMachine( Request $request , $id){
        var_dump('get type machine '.$id );
    }

    public function update( Request $request, $id){
        var_dump('Update type machine '.$id );
    }

    public function remove( Request $request, $id){
        var_dump('Delete type machine '.$id );
    }
}
