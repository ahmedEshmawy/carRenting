@extends('backend.layouts.app')

@section('content')

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Users </h3>
        
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

                    <!--start session message -------------->
                    <div class=" pull-right">  
                        @if(Session::has('Success'))
                            <p class="alert alert-success">{{Session::get('Success')}}</p>
                        @elseif(Session::has('Error'))
                            <p class="alert alert-danger">{{Session::get('Error')}}</p>
                        @endif
                    </div>
                      <!--End session message -------------->
                      <!--Start search ------ -------------->
                      <div class="col-md-5 pull-right">
                            {!! Form::Open(['method'=>'GET']) !!}
                            <button class="btn btn-primary">search</button>
                            <input type="text" class="form-control" placeholder="Search" name="q" value="@if(isset($_GET['q'])) {{$_GET['q']}} @endif "style="display:inline; max-width:80%;">
                            {!! Form::Close() !!}
                    </div>
                    <div class="panel-body">
                        <table  class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th >#</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th >Role</th>
                                    <th >user_id</th>
                                    <th >Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=> $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{!! App\User::role($row->role_id) !!} </td>
                                    <td>{{$row->id}}</td>
                                    <td>
                                    
                                    {!!Form::Open(['url'=>'users/destroy/'.$row->id])!!}
                                        <button class="btn btn-success">Delete</button>
                                    {!!Form::Close()!!}
                                    </td>
                                    
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
