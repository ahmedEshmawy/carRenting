@extends('backend.layouts.app')

@section('content')

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Cars </h3>
        
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
                            <div class="alert alert-success">
                                <p >{{Session::get('Success')}}</p>
                            </div>                            
                        @elseif(Session::has('Error'))
                            <div class="alert alert-danger">
                                <p >{{Session::get('Error')}}</p>
                            </div>                           
                        @endif
                    </div>
                    <div  class="col-md-3 table-toolbar-left">
                        <div class="form-group">
                            <a href="{{url('admin/cars/create')}}" class="btn btn-success">Add New Car</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        
                        <table  class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th >Model</th>
                                    <th >Type</th>
                                    <th >car image</th>
                                    <th >cost per kilometer</th>
                                    <th >content</th>
                                    <th >Availability.</th>
                                    <th >Active</th>
                                    <th >Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=> $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <th>{{$row->car_name}}</th>
                                    <th >{{$row->model}}</th>
                                    <th >{{$row->car_type}}</th>
                                    <th ><img src="{{ url($row->car_image) }}"  style="width:70px;height:70px"></th>
                                    <th >{{$row->cost_per_kilometer}}</th>
                                    <th >{{$row->content}}</th>
                                    <th >{!! App\car::getAvailable($row->availability)!!}</th>
                                    <th >{!! App\car::getActive($row->status)!!}</th>
                                    <th > 
                                    {!!Form::Open(['url'=>'admin/cars/destroy/'.$row->id])!!}
                                    <a href="{{ url('admin/cars/edit/'.$row->id) }}" class="btn btn-danger">Edit</a>
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
