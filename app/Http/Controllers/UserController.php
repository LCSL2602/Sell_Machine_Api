<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    

    public function store(Request $request) {
       // Get Data 
       $data = $request->only('name','lastname','rut','email','password');
        
       // Emcryp 
       $data['password'] = Hash::make($data['password']);
       
       // Create User
       $user = User::create($data);
       if(!$user) return response()->json('Server Error', 500);

       return response()->json($user, 200);
    }

   

    public function update( Request $request, $id){
        $data = $request->only('name','lastname','rut','email');

        $user = User::find($id);

        $users = User::where('id', '!=', $id)->where('rut' ,$data['rut'])->get();
        if(count($users) !== 0) return response()->json('Rut already exist', 400);

        $users = User::where('email', $data['email'])->where('id', '!=', $id)->get();
        if(count($users) !== 0) return response()->json('Email already exist', 400);

        
        if(!$user->update($data)) return response()->json('Server Error', 500);

        return response()->json($user, 200);   
    }

    public function index(){
        $users = User::get();
        if(!$users) return response()->json('Server Error', 500);

        return response()->json($users, 200);
    }

    public function getUser($id){
        $user = User::find($id);
        if(!$user) return response()->json('User not found', 404);

        return response()->json($user, 200);
    }

    public function remove($id){
        $user = User::find($id);
        if(!$user->delete()) return response()->json('Server Error', 500);

        return response()->json('User remove success', 200); 
    }
}
