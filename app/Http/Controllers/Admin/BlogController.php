<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blogs.index')->with('blogs', $blogs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createBlog(Request $request)
    {

        // $blog = blog::where('id', $id)->first();
        if ($request->isMethod('get')) {
            return view('backend.blogs.create');
        }

        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/blogs'), $newNameImage);

            if(File::exists(public_path("/images/blogs/".$newNameImage))) {
                $link_image = "/images/blogs/".$newNameImage;
            }else{
                $link_image = "";
            }

        } else {
            $link_image = "";
        }
        $input = [
            'user_id' => 21,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $link_image,
            'number_view' => 0,
            'number_like' => 0,
            'slug' => $request->slug,
            'status' => $request->status,
        ];
        Blog::create($input);
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
    public function editBlog(Request $request,$id)
    {
        $blog = Blog::where('id', $id)->first();
        // dd($blog);
        if ($request->isMethod('get')) {
            return view('backend.blogs.edit')->with('blog', $blog);
        }
        // dd($request->all());
        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/blogs'), $newNameImage);
            $link_image = "/images/blogs/".$newNameImage;
            if(File::exists(public_path($link_image))) {
                File::delete(public_path($blog->image));
            }
        } else {
            $link_image = $blog->image;
        }

        $input = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $link_image,
            'number_view' => $request->number_view,
            'number_like' => $request->number_like,
            'slug' => $request->slug,
            'status' => $request->status,
        ];

        $blog->update($input);

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
    public function deleteBlog($id)
    {

        $blog = Blog::find($id);
        if ($blog) {
            if(File::exists(public_path($blog->image))){
                File::delete(public_path($blog->image));
            }
            $blog->delete();
            return redirect("/admin/blogs");
        }
    }
}
