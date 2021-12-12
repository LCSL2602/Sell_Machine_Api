<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index( Request $request){
        var_dump('get all users');
    }

    public function store( Request $request){
        var_dump('Create user');
        var_dump($request->all());
    }

    public function getUser( Request $request , $id){
        var_dump('get user '.$id );
    }

    public function update( Request $request, $id){
        var_dump('Update user '.$id );
    }

    public function remove( Request $request, $id){
        var_dump('Delete user '.$id );
    }
}
