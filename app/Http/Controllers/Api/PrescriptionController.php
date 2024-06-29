<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PrescriptionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'member_id' => 'required',
            'ref_by' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
       
        $comment = new Comment();
        $comment->member_id = $request->member_id;
        $comment->medicine = json_encode($request->medicine);
        $comment->test =  json_encode($request->test);
        $comment->c_c = $request->c_c;
        $comment->o_e = $request->o_e;
        $comment->adv = $request->adv;
        $comment->comment = $request->comment;
        $comment->ref_by = $request->ref_by;
        $comment->created_by = Auth::id();

        $comment->save();

        return response()->json(['message' => 'Comment created successfully', 'comment' => $comment], 201);
    }
    
    public function getCommentsByMemberId($member_id)
    {
        $comments = Comment::where('member_id', $member_id)->get();

        if ($comments->isEmpty()) {
            return response()->json(['message' => 'No comments found for this member'], 404);
        }

        return response()->json(['comments' => $comments], 200);
    }
    
    public function getCommentById($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        return response()->json(['comment' => $comment], 200);
    }
}
