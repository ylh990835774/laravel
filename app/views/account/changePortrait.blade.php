@extends('l.account', array('active' => 'changePortrait'))

@section('title') @parent 更改头像 @stop

@section('style')
    @parent
    .form
    {
        width: 530px;
        margin: 0 auto;
        padding-bottom: 2em;
    }
    .form input, .form button
    {
        margin-top: 10px;
    }
    .form strong.error{
        color: #b94a48;
    }
@stop

@section('container')

    {{ Form::open(array('method' => 'PUT', 'files' => true, 'class' => 'form')) }}
        <h2 class="form-register-heading">更改您的头像</h2>
        <img class="img-thumbnail" width="220" height="220" src="{{ Auth::user()->portrait_large }}" alt="头像（大）">
        <img class="img-thumbnail" width="128" height="128" src="{{ Auth::user()->portrait_medium }}" alt="头像（中）">
        <img class="img-thumbnail" width="64" height="64" src="{{ Auth::user()->portrait_small }}" alt="头像（小）">
        {{ Form::file('portrait') }}
        @include('w.notification')
        <button class="btn btn-lg btn-primary btn-block" type="submit">上传头像</button>
    {{ Form::close() }}

@stop
