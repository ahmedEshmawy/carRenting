@extends('backend.layouts.app')

@section('content')

<div id="content-container">
                    <div class="pageheader hidden-xs">
                        <h3><i class="fa fa-home"></i> Users </h3>
                     
                    </div>
                    <!--Page content-->

                    <div id="page-content">
                       <div class="row">
                             <div class="col-md-12">

                                <div class="panel">
                                    <div class="panel-heading col-md-6">
                                        <h3 class="panel-title">Update  User</h3>
                                    </div>
                                    <div class="panel-heading col-md-6">
                                      
                                    @if(Session::has('Success'))
                                         <p class="alert alert-success">{{Session::get('Success')}}</p>
                                    @elseif(Session::has('Error'))
                                         <p class="alert alert-danger">{{Session::get('Error')}}</p>
                                    @endif

  
                                      </div>
                                 
                                    <div class="panel-body">
                              
    
                {!! Form::Open() !!}
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label >Name</label>
                                <input type="text" name="name" class="form-control" placeholder=" Name " value="{{$row->name}}"/>
                            </div>
                            
                            <div class="form-group">
                            <label >E_mail</label>
                                <input type="email" name="email" class="form-control" placeholder="E_mail" value="{{$row->email}}"/>
                            </div>  
                                                       
                            <div class="form-group">
                            <label >Role</label>
                            <select class="form-control" name="role_id">
                            <option value="1"  >Admin</option> 
                            <option value="0"   >User</option> 
                            </select>  
                            </div>    
                        </div>
                    </div>
                    <div class="form-group">
                            <button class="btn btn-success">update</button>
                            <a href="{{url('admin/users')}}" class="btn btn-danger">Back</a>
                        </div>
                    {!! Form::Close() !!}
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Row selection and deletion (multiple rows) -->
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>



@stop