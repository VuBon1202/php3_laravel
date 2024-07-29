<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\SanPham;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request, SanPham $sanpham)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $sanpham->comments()->create([
            'user_id' => auth()->id(),
            'body' => $request->body,
            'bl_id' => $sanpham->bl_id,
        ]);

        return back()->with('success', 'Comment added successfully.');
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully.');
    }
}
