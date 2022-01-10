<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    
    public function store( Request $request){
        $data = $request->only('user_id','sale_id','comment');

        $comment = Comment::create($data);
        if(!$comment) return response()->json('Server error', 500);

        return response()->json($comment,200);
    }

    public function update( Request $request, $id){
        $data = $request->only('sale_id','comment');

        $comment = Comment::find($id);
        if(!$comment->update($data)) return response()->json('Server error', 500);

        return response()->json($comment,200);
    }

    public function index(){
        $comments = Comment::get();
        if(!$comments) return response()->json('Server error', 500);

        return response()->json($comments,200);
    }

    public function getComment($id){
        $comment = Comment::find($id);
        if(!$comment) return response()->json('Server error', 500);

        return response()->json($comment,200);
    }

    public function remove($id){
        $comment = Comment::find($id);
        if(!$comment->delete($id)) return response()->json('Server error', 500);

        return response()->json('delete success',200);
    }
}
