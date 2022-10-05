<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return view('backend.articles.index')->with('articles', $articles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createArticle(Request $request)
    {

        // dd($request->all());
        // $Article = Article::where('id', $id)->first();
        if ($request->isMethod('get')) {
            return view('backend.articles.create');
        }

        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/articles'), $newNameImage);

            if(File::exists(public_path("/images/articles/".$newNameImage))) {
                $link_image = "/images/articles/".$newNameImage;
            }else{
                $link_image = "";
            }

        } else {
            $link_image = "";
        }
        $input = [
            'user_id' => 21,
            'title' => $request->title,
            'image' => $link_image,
            'content' => $request->content,
            'country' => $request->country,
            'slug' => $request->slug,
            'status' => $request->status,
        ];
        Article::create($input);
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
    public function editArticle(Request $request,$id)
    {
        $article = Article::where('id', $id)->first();
        // dd($Article);
        if ($request->isMethod('get')) {
            return view('backend.articles.edit')->with('article', $article);
        }
        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/articles'), $newNameImage);
            $link_image = "/images/articles/".$newNameImage;
            if(File::exists(public_path($link_image))) {
                File::delete(public_path($article->image));
            }
        } else {
            $link_image = $article->image;
        }

        $input = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'image' => $link_image,
            'content' => $request->content,
            'country' => $request->country,
            'slug' => $request->slug,
            'status' => $request->status,
        ];

        $article->update($input);

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
    public function deleteArticle($id)
    {

        $article = Article::find($id);
        if ($article) {
            if(File::exists(public_path($article->image))){
                File::delete(public_path($article->image));
            }
            $article->delete();
            return redirect("/admin/articles");
        }
    }
}
