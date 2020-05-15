<?php

namespace App\Http\Controllers\backend;
use Session;
use Redirect;
use DateTime;
use App\booking;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bookingCtrl extends Controller
{
    public function index()
    {
        $data=booking::paginate(5);
        return view('backend.reservations.list')->withdata($data);
    }

    public function Create()
    {
        return view('backend.reservations.create');
    }

    //   public function Store(Request $request){
    // dd($request->input('total'));
    // }
    


    public function Store(Request $request)
    {
        try{
            $row = new booking;
            

            $date_from = $request->Fdate;
            $date_to = $request->Tdate;
            $first_datetime = new DateTime($date_from);
            $last_datetime = new DateTime($date_to);
            $interval = $first_datetime->diff($last_datetime);
            $final_days = $interval->format('%a');//and then print do whatever you like with $final_days
            
            $row->user_id = auth()->user()->id;
            $row->date_from = $request->input('date_from');
            $row->date_to= $request->input('date_to');
            //$row->total = $request->input('total');
            //$row->payment_type = $request->input('payment_type');
           
            $row->save();
            Session::flash('Success','new reservation Added Successfully');
            return Redirect::to('/');
        }catch(\Exception $e){
            dd($e);
            Session::flash('Error','reservation not Added');
            return Redirect::to('admin/reservations/create');
        }
    }


    public function Edite($booking_id){
        $row= booking::where('id',$booking_id)->first();
        return view('backend.reservations.edit')->withrow($row);
    }

    public function Update($booking_id,Request $request){
        try{
            $row = booking::where('id',$booking_id)->first();
            $row->date_from = $request->input('date_from');
            $row->date_to= $request->input('date_to');
            $row->total = $request->input('total');
            $row->payment_type = $request->input('payment_type');
            $row->save();
            Session::flash('Success',' reservation Updated Successfully');
            return Redirect::to('reservations');
        }catch(\Exception $e){
            Session::flash('Error','reservation not Updated');
            return Redirect::to('admin/reservations');
        }
        
    }

    public function Destroy($booking_id){
        try{
            booking::Where('id',$booking_id)->delete();
            Session::flash('Success',' Reservation deleted ');
        }catch(\Exception $e){
            Session::flash('Error',' Reservation not deleted ');
        }
        return Redirect::to('admin/reservations');
    }

}
