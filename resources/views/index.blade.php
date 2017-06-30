@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('success'))
        <div class="alert-box success">
            <h2>{!! Session::get('success') !!}</h2>
        </div>
    @endif

        <div class="secure">Upload form</div>
        <div class="form-group">
        <h2> Simple MUltiple upload</h2>
            {!! Form::open(array('url'=>'upload/uploadFiles','method'=>'POST', 'files'=>true)) !!}
            {!! Form::file('images[]', array('multiple'=>true)) !!}
            <p class="errors">{!!$errors->first('images')!!}</p>
            @if(Session::has('error'))
                <p class="errors">{!! Session::get('error') !!}</p>
            @endif

            {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-4')) !!}
            {!! Form::close() !!}
        </div>



</div>
@endsection
