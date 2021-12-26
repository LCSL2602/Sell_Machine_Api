<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vendorController extends Controller
{
    public function index( Request $request){
        var_dump('get all vendors');
    }

    public function store( Request $request){
        var_dump('Create vendor');
        var_dump($request->all());
    }

    public function getVendor( Request $request , $id){
        var_dump('get vendor '.$id );
    }

    public function update( Request $request, $id){
        var_dump('Update vendor '.$id );
    }

    public function remove( Request $request, $id){
        var_dump('Delete vendor '.$id );
    }
}
