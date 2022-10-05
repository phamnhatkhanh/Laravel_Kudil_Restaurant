<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('backend.tables.index')->with('tables', $tables);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createTable(Request $request)
    {
        // dd($request->all());
        if ($request->isMethod('get')) {
            return view('backend.tables.create');
        }

        $input = [
            'name' => $request->name,
            'number_people' => $request->number_people,
            'status' => $request->status,
        ];
        Table::create($input);
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
    public function editTable(Request $request,$id)
    {
        $table = Table::where('id', $id)->first();
        if ($request->isMethod('get')) {
            return view('backend.tables.edit')->with(['table' => $table]);
        }

        // dd($request->all());
        $input = [
            'name' => $request->name,
            'number_people' => $request->number_people,
            'status' => $request->status,
        ];

        $table->update($input);

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
    public function deleteTable($id)
    {

        $table = Table::find($id);
        if ($table) {
            $table->delete();
            return redirect("/admin/tables");
        }
    }

}
