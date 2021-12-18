<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index( Request $request){
        $Users = User::all();
        return $Users;
    }

    public function store(Request $request) {
        User::add($request);
        $createAt['create'] = True;
        return $createAt;
    }

    public function getUser( Request $request , $id){
       $user = User::where('id', $id)->get();
       return $user;
    }

    public function update( Request $request, $id){
        $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->lastname = $request->lastname;
            $user->rut = $request->rut;
           
            $user->save();
            $updateAt['update'] = True;
            return $updateAt ;
    
    }

    public function remove( Request $request, $id){
        $user = User::find($id);
        $user->delete();
        $daleteeAt['delete'] = True;
        return  $daleteeAt;
    }
}
