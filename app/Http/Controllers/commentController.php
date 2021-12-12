<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    
    public function index( Request $request){
        var_dump('get all comments');
    }

    public function store( Request $request){
        var_dump('Create comment');
        var_dump($request->all());
    }

    public function getUser( Request $request , $id){
        var_dump('get comment '.$id );
    }

    public function update( Request $request, $id){
        var_dump('Update comment '.$id );
    }

    public function remove( Request $request, $id){
        var_dump('Delete comment '.$id);
    }
}
