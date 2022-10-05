<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {

        $users = User::all();
        // dd($users);
        return view('backend.users.index')->with('users', $users);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
        // dd($request->status);
        // $user = User::where('id', $id)->first();
        if ($request->isMethod('get')) {
            return view('backend.users.create');
        }

        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/users'), $newNameImage);

            if(File::exists(public_path("/images/users/".$newNameImage))) {
                $link_image = "/images/users/".$newNameImage;
            }else{
                $link_image = "";
            }

        } else {
            $link_image = "";
        }

        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'link_image' => $link_image,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ];
        User::create($input);
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
    public function editUser(Request $request,$id)
    {


        $user = User::where('id', $id)->first();
        if ($request->isMethod('get')) {
            return view('backend.users.edit')->with('user', $user);
        }
        if ($request->hasFile('image')) {
            $randomNumber = uniqid();
            $newNameImage = time() . '_' .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/users'), $newNameImage);
            $link_image = "/images/users/".$newNameImage;
            if(File::exists(public_path($link_image))) {
                File::delete(public_path($user->link_image));
            }

        } else {
            $link_image = $user->link_image;
        }

        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'link_image' => $link_image,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ];

        $user->update($input);

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
    public function deleteUser($id)
    {

        $user = User::find($id);
        if ($user) {
            if(File::exists(public_path($user->link_image))){
                File::delete(public_path($user->link_image));
            }
            $user->delete();
            return redirect("/admin/users");
        }
    }

}
