<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tag;

class CatagoryController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('backend.tags.index')->with('tags', $tags);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createTag(Request $request)
    {

        // $tag = Tag::where('id', $id)->first();
        if ($request->isMethod('get')) {
            return view('backend.tags.create');
        }

        $input = [
            'name' => $request->name,
            'status' => $request->status,
        ];
        Tag::create($input);

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
    public function editTag(Request $request,$id)
    {
        $tag = Tag::where('id', $id)->first();
        // dd($tag);
        if ($request->isMethod('get')) {
            return view('backend.tags.edit')->with('tag', $tag);
        }

        $input = [
            'name' => $request->name,
            'status' => $request->status,
        ];

        $tag->update($input);

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
    public function deletetag($id)
    {

        $tag = Tag::find($id);
        if ($tag) {
            $tag->delete();
            return redirect("/admin/tags");
        }
    }
}
