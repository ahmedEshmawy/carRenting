<?php

namespace App\Http\Controllers\backend;
use Session;
use Redirect;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userCtrl extends Controller
{
    public function index(){
        if(isset($_GET['q'])) {
            $q = $_GET['q'];
            $data = User::where('name','LIKE','%'.$q.'%')->orderBy('id' ,'DESC')->paginate(5);
        }else{
            $data=User::orderBy('id','DESC')->paginate(5);
        }
        
        return view('backend.users.list')->withdata($data);
        
   
    }

    public function Edite($userid){
        $row= User::where('id',$userid)->first();
        return view('backend.users.edit')->withrow($row);
    }

    public function Update($userid,Request $request){
        try{
            $row = User::where('id',$userid)->first();
            $row->name = $request->input('name');
            $row->email= $request->input('email');
            $row->role_id= $request->input('Role');
            
            $row->save();
            
            Session::flash('Success',' User Updated Successfully');
            return Redirect::to('users');
        }catch(\Exception $e){
            Session::flash('Error','user not Updated');
            return Redirect::to('admin/users/create');
        }
        
    }

    public function Destroy($userid){
        try{
            User::Where('id',$userid)->delete();
            Session::flash('Success',' User deleted ');
        }catch(\Exception $e){
            Session::flash('Error',' User not deleted ');
        }
        return Redirect::to('admin/users');
    }
  
}
