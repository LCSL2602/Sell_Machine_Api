<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saleController extends Controller
{
    
    public function index( Request $request){
        var_dump('get all sales');
    }

    public function store( Request $request){
        var_dump('Create sale');
        var_dump($request->all());
    }

    public function getUser( Request $request , $id){
        var_dump('get sale '.$id );
    }

    public function update( Request $request, $id){
        var_dump('Update sale '.$id );
    }

    public function remove( Request $request, $id){
        var_dump('Delete sale '.$id );
    }
}
