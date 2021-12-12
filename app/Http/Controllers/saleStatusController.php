<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saleStatusController extends Controller
{
    
    public function index( Request $request){
        var_dump('get all sales statuses ');
    }

    public function store( Request $request){
        var_dump('Create sale status' );
        var_dump($request->all());
    }

    public function getUser( Request $request , $id){
        var_dump('get sale status '.$id );
    }

    public function update( Request $request, $id){
        var_dump('Update sale status '.$id );
    }

    public function remove( Request $request, $id){
        var_dump('Delete sale status '.$id );
    }
}
