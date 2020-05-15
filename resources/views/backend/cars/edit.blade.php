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

                <div class="panel">

                    <div class="panel-heading col-md-6">
                        <h3 class="panel-title">Ubdate Car</h3>

                    </div>
                    <div class="panel-heading col-md-6">

                        @if(Session::has('Success'))
                        <p class="alert alert-success">{{Session::get('Success')}}</p>
                        @elseif(Session::has('Error'))
                        <p class="alert alert-danger">{{Session::get('Error')}}</p>
                        @endif

                    </div>
                    <div class="panel-body">
                        {!! Form::Open(['files'=>true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Car Name "
                                        value="{{$row->car_name}}" />
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" name="model" class="form-control" placeholder="Car Model"
                                        value="{{$row->model}}" />
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="type" class="form-control" value="{{$row->car_type}}">
                                        <option value="Economy(4)">Economy(4)</option>
                                        <option value="Family(7)">Family(7)</option>
                                        <option value="van(12)">van(12)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cost</label>
                                    <input type="text" name="cost" class="form-control"
                                        placeholder="Cost Per Kilometer " value="{{$row->cost_per_kilometer}}" />
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea rows="4" name="content" class="form-control"
                                        placeholder="Description ">{{$row->content}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Availability</label>
                                    <!-- <input type="text"  name="availability" class="form-control" placeholder="Availability" value="{{$row->availability}}"/> -->
                                    <select class="form-control" name="availability">
                                        <option value="0" @if($row->availability ==0)selected @endif>Not Available
                                        </option>
                                        <option value="1" @if($row->availability ==1)selected @endif>Available</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>status</label>
                                    <select class="form-control" name="active">
                                        <option value="0" @if($row->status == 0)selected @endif>Deactivated</option>
                                        <option value="1" @if($row->status == 1)selected @endif>Activated</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>car image</label>
                                <img src="{{ url($row->car_image)}}" id="preview"
                                    style="width:90%;height:250px;border:1px solid #ddd;">
                                <input type="file" id="img" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Update</button>
                            <a href="{{url('admin/cars')}}" class="btn btn-danger">Back</a>
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
@section('jsCode')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#img").change(function () {
        readURL(this);
    });

</script>
@stop
