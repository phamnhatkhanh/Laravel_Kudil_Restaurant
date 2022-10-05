<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.products.index')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createProduct(Request $request)
    {


        if ($request->isMethod('get')) {
            return view('backend.products.create');
        }

        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/products'), $newNameImage);

            if(File::exists(public_path("/images/products/".$newNameImage))) {
                $link_image = "/images/products/".$newNameImage;
            }else{
                $link_image = "";
            }

        } else {
            $link_image = "";
        }

        $input = [
            'user_id' => 21,
            'name' => $request->name,
            'image' => $link_image,
            'price' => $request->price,
            'quantify' => $request->quantify,
            'description' => $request->description,
            'content' => $request->content,
            'slug' => $request->slug,
            'status' => $request->status,
        ];
        Product::create($input);
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
    public function editProduct(Request $request,$id)
    {
        $product = Product::where('id', $id)->first();
        // dd($product);
        if ($request->isMethod('get')) {
            return view('backend.products.edit')->with('product', $product);
        }
        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/products'), $newNameImage);
            $link_image = "/images/products/".$newNameImage;
            if(File::exists(public_path($link_image))) {
                File::delete(public_path($product->image));
            }
        } else {
            $link_image = $product->image;
        }

        $input = [
            'user_id' => 21,
            'name' => $request->name,
            'image' => $link_image,
            'price' => $request->price,
            'quantify' => $request->quantify,
            'description' => $request->description,
            'content' => $request->content,
            'slug' => $request->slug,
            'status' => $request->status,
        ];

        $product->update($input);

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
    public function deleteProduct($id)
    {

        $product = Product::find($id);
        if ($product) {
            if(File::exists(public_path($product->image))){
                File::delete(public_path($product->image));
            }
            $product->delete();
            return redirect("/admin/products");
        }
    }
}
