<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use App\Models\Blog;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id)
    {

        $page = Page::find($id);
        $blog = Blog::find(1);

        $item = $page->sections->where('priority',1)->first();
        // dd($page->sections->where('priority',1)->first());
        return view('backend.pages.home.index')->with(['sections' => $page->sections,'blog'=>$blog,'item'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSection(Request $request, $idPage,$idSection)
    {


        if ($request->isMethod('get')) {
            $section = Section::find($idSection);
            return view('backend.pages.home.edit')->with(['idPage'=>$idPage,'section' => $section]);
        }
        $data = [
            'name' => $request->name,
            'content' => json_decode($request->content),
            'status' => $request->status,
        ];

        Section::where("id", $idSection)->update($data);
        // Section::where("id", $idSection)->update(['content'=> json_decode($request->content)]);

        return  response()->json([
            'content' => $request->content,
            "mess" => "done update"

         ]);;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
