<?php

namespace App\Http\Controllers\backend;
use File;
use Session;
use Redirect;
use App\car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class carCtrl extends Controller
{
    public function cars(){

        if(isset($_GET['q'])) {
            $q = $_GET['q'];
            $data = car::where('car_name','LIKE','%'.$q.'%')->orderBy('id' ,'DESC')->paginate(5);
        }else{
            $data=car::orderBy('id','DESC')->paginate(5);
        }
        
        return view('backend.cars.list')->withdata($data);
    }

    public function carsCreate(){
        return view('backend.cars.create');
    }

    public function carsStore(Request $request){
           // dd($request->all());
        try{
            $row = new car;
            //variable for image from input type file
            $file = $request->file('image');
            // the place to uploade image 
            $path = 'upload/cars/';
            //image name + extension
            $filename = date('Y-m-d-h-i-s').'.'.$file->getClientOriginalExtension();
            //move function
            $file->move(public_path().'/'.$path,$filename);

            $row->car_image = $path.$filename;
            $row->car_name = $request->input('name');
            $row->model= $request->input('model');
            $row->car_type = $request->input('type');
            $row->cost_per_kilometer = $request->input('cost');
            $row->content =$request->input('content');
            $row->availability = $request->input('availability');
            $row->status = $request->input('active');
            $row->save();
            Session::flash('Success','new car Added Successfully');
            return Redirect::to('admin/cars');
        }catch(\Exception $e){
            Session::flash('Error','car not Added'.$e);
            return Redirect::back();
        }
        
    }
    
  /*  public function carsStore(Request $request){
    dd($request->input('name'));
    }
    */

    public function carsEdite($carid){
        if(!$carid || car::Where('id',$carid)->count() == 0) {
            return App::abort(404);
        }else{
            $row = car::Where('id',$carid)->first();
            return view('backend.cars.edit', compact('row'));
        }
        
    }

    public function carsUpdate(Request $request, $carid){
        if(!$carid || car::Where('id',$carid)->count() == 0) {
            return App::abort(404);
        }else{
           try{
            $row = car::where('id',$carid)->first();
            $row->car_name = $request->input('name');
            $row->model= $request->input('model');
            $row->car_type = $request->input('type');


            if($request->hasFile('image')){
                File::Delete($row->car_image);
                $file = $request->file('image');
                // the place to uploade image 
                $path = 'upload/cars/';
                //image name + extension
                $filename = date('Y-m-d-h-i-s').'.'.$file->getClientOriginalExtension();
                //move function
                $file->move(public_path().'/'.$path,$filename);

                $row->car_image = $path.$filename;
            }
            $row->cost_per_kilometer = $request->input('cost');
            $row->content =$request->input('content');
            $row->availability = $request->input('availability');
            $row->status = $request->input('active');
            $row->save();
            Session::flash('Success',' car Updated Successfully');
            return Redirect::to('admin/cars');
        }catch(\Exception $e){
            Session::flash('Error','car not Updated'.$e);
            return Redirect::back();
        }
    }
        
    }





    public function carsDestroy($carid){
        try{
            if(!$carid || car::Where('id',$carid)->count() == 0) {
                return App::abort(404);
            }else{
                $row = car::Where('id',$carid)->first();
                File::Delete($row->car_image);
                $row->delete();
            }
            Session::flash('Success',' car deleted ');
        }catch(\Exception $e){
            Session::flash('Error',' car not deleted '.$e);
        }
        return Redirect::to('admin/cars');
    }
}
