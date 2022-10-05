<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CommentController extends Controller
{
public function index()
    {
        $comments = Comment::all();
        return view('backend.comments.index')->with('comments', $comments);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createComment(Request $request)
    {

        // dd($request->all());
        if ($request->isMethod('get')) {
            $blogs = Blog::all();
            return view('backend.comments.create')->with('blogs', $blogs);
        }

        $input = [
            'blog_id' => $request->blog_id,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
            'website' => $request->website,
            'status' => $request->status,
        ];
        Comment::create($input);
        return redirect()->back()->with([
            'flag_message' => 'success',
            'message' => 'Thêm người dùng thành công'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editComment(Request $request,$id)
    {
        $comment = Comment::where('id', $id)->first();
        if ($request->isMethod('get')) {
            $blogs = Blog::all();
            return view('backend.comments.edit')->with(['comment' => $comment,'blogs' => $blogs]);
        }

        // dd($request->all());
        $input = [
            'blog_id' => $request->blog_id,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
            'website' => $request->website,
            'status' => $request->status,
        ];

        $comment->update($input);

        return redirect()->back()->with([
            'flag_message' => 'success',
            'message' => 'Thêm người dùng thành công'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteComment($id)
    {

        $comment = Comment::find($id);
        if ($comment) {

            $comment->delete();
            return redirect("/admin/comments");
        }
    }




}
