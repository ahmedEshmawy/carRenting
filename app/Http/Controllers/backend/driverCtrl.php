<?php

namespace App\Http\Controllers\backend;
use Session;
use Redirect;
use App\driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class driverCtrl extends Controller
{
    public function index(){
        if(isset($_GET['q'])) {
            $q = $_GET['q'];
            $data = driver::where('name','LIKE','%'.$q.'%')->orderBy('id' ,'DESC')->paginate(5);
        }else{
            $data=driver::orderBy('id','DESC')->paginate(5);
        }
        
        return view('backend.drivers.list')->withdata($data);
       
    }
    public function Create(){
        return view('backend.drivers.create');
    }

    public function store(Request $request){
        try{
            $row = new driver;
           
            $row->name = $request->input('name');
            $row->address= $request->input('address');
            $row->gender = $request->input('gender');
            $row->birthdate = $request->input('birthdate');
            $row->license_id = $request->input('license_id');
            $row->status = $request->input('status');
            $row->save();
            Session::flash('Success','new Driver Added Successfully');
            return Redirect::to('admin/drivers');
        }catch(\Exception $e){
            dd($e);
            Session::flash('Error','driver data not Added');
            return Redirect::to('admin/drivers/create');
        }
        
    }

    public function edite($driverid){
        $row= driver::where('id',$driverid)->first();
        return view('backend.drivers.edit')->withrow($row);
    }

    public function Update($driverid,Request $request){
        try{
            $row = driver::where('id',$driverid)->first();
            $row->name = $request->input('name');
            $row->address= $request->input('address');
            $row->gender = $request->input('gender');
            $row->birthdate = $request->input('birthdate');
            $row->license_id = $request->input('license_id');
            $row->status = $request->input('status');
            $row->save();
            Session::flash('Success',' Driver updated Successfully');
            return Redirect::to('admin/drivers');
        }catch(\Exception $e){
            dd($e);
            Session::flash('Error','driver data not updated');
            return Redirect::to('admin/drivers/create');
        }
        
    }


    public function Destroy($driverid){
        try{
            driver::Where('id',$driverid)->delete();
            Session::flash('Success',' driver data deleted ');
        }catch(\Exception $e){
            Session::flash('Error',' driver data not deleted ');
        }
        return Redirect::to('admin/drivers');
    }


}
