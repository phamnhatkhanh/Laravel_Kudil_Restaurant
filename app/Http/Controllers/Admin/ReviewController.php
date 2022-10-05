<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('backend.reviews.index')->with('reviews', $reviews);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createReview(Request $request)
    {

        // dd($request->all());
        if ($request->isMethod('get')) {
            $products = Product::all();
            return view('backend.reviews.create')->with('products', $products);
        }

        $input = [
            'product_id' => $request->product_id,
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'content' => $request->content,
            'status' => $request->status,
        ];
        Review::create($input);
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
    public function editReview(Request $request,$id)
    {
        $review = Review::where('id', $id)->first();
        if ($request->isMethod('get')) {
            $products = Product::all();
            return view('backend.reviews.edit')->with(['review' => $review,'products' => $products]);
        }

        // dd($request->all());
        $input = [
            'product_id' => $request->product_id,
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'content' => $request->content,
            'status' => $request->status,
        ];

        $review->update($input);

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
    public function deleteReview($id)
    {

        $review = Review::find($id);
        if ($review) {

            $review->delete();
            return redirect("/admin/reviews");
        }
    }

}
