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
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Data({{count($data)}})</h3>
                    </div>
                    <div class="pull-right ">

                        @if(Session::has('Success'))
                        <p class="alert alert-success">{{Session::get('Success')}}</p>
                        @elseif(Session::has('Error'))
                        <p class="alert alert-danger">{{Session::get('Error')}}</p>
                        @endif

                    </div>

                    <div class="col-md-4 pull-right">
                        {!! Form::Open(['method'=>'GET']) !!}

                        <input type="text" class="form-control" placeholder="Search" name="q"
                            value="@if(isset($_GET['q'])) {{$_GET['q']}} @endif">

                        {!! Form::Close() !!}
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>user_id</th>
                                    <th>date from</th>
                                    <th>date to</th>
                                    <th>total</th>
                                    <th>payment type</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($data as $key=> $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->user_id}}</td>
                                    <td>{{explode(' ',$row->date_from)[0]}}</td>
                                    <td>{{explode(' ',$row->date_to)[0]}}</td>
                                    <td>{{$row->total}}</td>
                                    <td>{{$row->payment_type}}</td>

                                    <td>
                                        {!!Form::Open(['url'=>'admin/reservations/destroy/'.$row->id])!!}
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
        <!-- End Row selection and deletion (multiple rows) -->
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>

@stop
