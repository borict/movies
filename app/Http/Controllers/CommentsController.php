<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $id){
        $request->validate(Comment::STORE_RULES);
        $comment = new Comment();
        $comment->content = $request['content'];
        $comment->movie_id = $id;
        $comment->save();
        return redirect('/movies/' . $id);
    }
}
