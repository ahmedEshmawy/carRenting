@extends('backend.layouts.app')

@section('content')

<div id="content-container">
                    <div class="pageheader hidden-xs">
                        <h3><i class="fa fa-home"></i> Drivers </h3>
                     
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                       <div class="row">
                             <div class="col-md-6">
                        <!-- Row selection and deletion (multiple rows) -->
                        <!--===================================================-->
                                <div class="panel">
                                    <div class="panel-heading col-md-6">
                                        <h3 class="panel-title">Update Driver Data</h3>
                                    </div>
                                    <div class="panel-heading col-md-6">
                                      
                                    @if(Session::has('Success'))
                                         <p class="alert alert-success">{{Session::get('Success')}}</p>
                                    @elseif(Session::has('Error'))
                                         <p class="alert alert-danger">{{Session::get('Error')}}</p>
                                    @endif

                                    </div>

                                 
                                    <div class="panel-body">
                                    {!! Form::Open()!!}

                                    <!-- <div class="form-group">
                                           <label >ID</label>
                                           <input type="text" name="driver_id" class="form-control">
                                        </div> -->
                                        <div class="form-group">
                                           <label >Name</label>
                                           <input type="text" name="name" class="form-control" value="{{$row->name}}">
                                        </div>
                                        <div class="form-group">
                                           <label >Address</label>
                                           <input type="text"  name="address"class="form-control" value="{{$row->address}}">
                                        </div>
                                        <div class="form-group">
                                           <label >Gender</label>
                                           <input type="text" name="gender" class="form-control" value="{{$row->gender}}">
                                        </div>
                                        <div class="form-group">
                                           <label >Birthdate</label>
                                           <input type="date"  name="birthdate"class="form-control" value="{{$row->birthdate}}">
                                        </div>
                                        <div class="form-group">
                                           <label >License ID</label>
                                           <input type="text" name="license_id" class="form-control" value="{{$row->license_id}}">
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                           <label >status</label>
                                           <select class="form-control" name="status" >
                                           <option value="0" @if($row->status == 0)selected @endif> Available</option>
                                           <option value="1" @if($row->status == 1)selected @endif> Not Available</option>
                                           </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">update</button>
                                            <a href="{{url('admin/drivers')}}" class="btn btn-danger">Back</a>
                                        </div>
                                    {!! Form::Close()!!}
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
     



@stop