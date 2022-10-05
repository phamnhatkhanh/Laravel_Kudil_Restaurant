<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Reservation;
class ReservationController extends Controller
{

public function index()
    {
        $reservations = Reservation::all();
        return view('backend.reservations.index')->with('reservations', $reservations);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createReservation(Request $request)
    {

        if ($request->isMethod('get')) {

            return view('backend.reservations.create');
        }
        $table = Table::where('status',1)->where('number_people','>',$request->number_people)->first();

        if($table){
            $input = [
                'table_id' => $table->id,
                'name_customer' => $request->name_customer,
                'phone' => $request->phone,
                'email' => $request->email,
                'number_people' => $request->number_people,
                'time' => $request->time,
                'date' => $request->date,
                'status' => $request->status,
            ];
            //  dd( $input);
        }
        Reservation::create($input);
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
    public function editReservation(Request $request,$id)
    {
        $reservation = Reservation::where('id', $id)->first();
        if ($request->isMethod('get')) {
            return view('backend.reservations.edit')->with(['reservation' => $reservation]);
        }
        $input = [
            'table_id' => $reservation->id,
            'name_customer' => $request->name_customer,
            'phone' => $request->phone,
            'email' => $request->email,
            'number_people' => $request->number_people,
            'time' => $request->time,
            'date' => $request->date,
            'status' => $request->status,
        ];

        $reservation->update($input);

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
    public function deleteReservation($id)
    {

        $reservation = Reservation::find($id);
        if ($reservation) {

            $reservation->delete();
            return redirect("/admin/reservations");
        }
    }

}
