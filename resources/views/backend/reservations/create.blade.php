@extends('backend.layouts.app')

@section('content')

<div id="content-container">
                    <div class="pageheader hidden-xs">
                        <h3><i class="fa fa-home"></i> Reservations </h3>
                     
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                       <div class="row">
                             <div class="col-md-12">
                        <!-- Row selection and deletion (multiple rows) -->
                        <!--===================================================-->
                                <div class="panel">
                                    <div class="panel-heading col-md-6">
                                        <h3 class="panel-title">Add New Reservation</h3>
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
                            <label >date_from</label>
                                <input type="date" name="date_from" class="form-control" placeholder=" date_from " value=""/>
                            </div>
                            
                            <div class="form-group">
                            <label >date_to</label>
                                <input type="date" name="date_to" class="form-control" placeholder="date_to" value=""/>
                            </div>                            

                            <div class="form-group">
                            <label >Total</label>
                                <input type="text"  name="total" class="form-control" placeholder="Total" value=""/>
                            </div>
                            <div class="form-group">
                            <label >payment type</label>
                                <input type="text"  name="payment_type" class="form-control" placeholder="payment type" value=""/>
                            </div>
                            <div class="form-group">
                            <label >customer_id</label>
                                <input type="text"  name="customer_id" class="form-control" placeholder="customer id" value=""/>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                            <button class="btn btn-success">save</button>
                            <a href="{{url('admin/reservations')}}" class="btn btn-danger">Back</a>
                        </div>
                    {!! Form::Close() !!}
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>



@stop