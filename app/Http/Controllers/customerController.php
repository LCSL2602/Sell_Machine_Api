<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index( Request $request){
        var_dump('get all customers');
    }

    public function store( Request $request){
        var_dump('Create customer');
        var_dump($request->all());
    }

    public function getUser( Request $request , $id){
        var_dump('get customer '.$id );
    }

    public function update( Request $request, $id){
        var_dump('Update customer '.$id );
    }

    public function remove( Request $request, $id){
        var_dump('Delete customer '.$id );
    }
}
