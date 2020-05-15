@extends('frontend.layouts.app')

@section('content')

<div class="col-md-6">
    <div class="registration-sec">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>SIGNUP Form</h1>
        {!! Form::Open() !!}
            <div class="field">
                <input type="text" name="name" placeholder="Your Name" />
            </div>
            <div class="field">
                <input type="text" name="email" placeholder="Your Email" />
            </div>
            <div class="field">
                <input type="password" name="password" placeholder="Type Password" />
            </div>
            <div class="field">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" />
            </div>
            

            <input type="submit" value="Singup Now" class="flat-btn" />
        {!! Form::Close() !!}
    </div><!-- Registration sec -->
</div>


@stop