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
            <div class="col-md-12">
        <!-- Row selection and deletion (multiple rows) -->
        <!--===================================================-->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Data({{count($data)}})</h3>
                    </div>
                    
                    <div class="col-md-5 pull-right">
                        {!! Form::Open(['method'=>'GET']) !!}
                        <button class="btn btn-primary">search</button>
                        <input type="text" class="form-control" placeholder="Search" name="q" value="@if(isset($_GET['q'])) {{$_GET['q']}} @endif" style="display:inline; max-width:80%;">
                        {!! Form::Close() !!}
                    </div>
                    <div class="col-md-4 pull-right">
                        
                        @if(Session::has('Success'))
                            <p class="alert alert-success">{{Session::get('Success')}}</p>
                        @elseif(Session::has('Error'))
                            <p class="alert alert-danger">{{Session::get('Error')}}</p>
                        @endif

                        </div>
                    
                    <div  id="demo-custom-toolbar" class=" col-md-3 table-toolbar-left">
                        <div class="form-group">
                            <a href="{{url('drivers/create')}}" class="btn btn-success">Add New Driver</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Birthdate</th>
                                    <th>licence_id</th>
                                    <th>Status</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>{{$row->gender}}</td>
                                    <td>{{$row->birthdate}}</td>
                                    <td>{{$row->license_id}}</td>
                                    <td>{!! App\driver::getAvailable($row->status)!!}</td>
                                    <th > 
                                    {!!Form::Open(['url'=>'drivers/destroy/'.$row->id])!!}
                                    <a href="{{ url('drivers/edit/'.$row->id) }}" class="btn btn-danger">Edit</a>
                                    <button class="btn btn-success">Delete</button>
                                    {!!Form::Close()!!}
                                    </th>
                                </tr>
                            @endforeach




                            </tbody>
                        </table>
                        <div class="col-md-12">{!! $data->render() !!}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>

@stop
