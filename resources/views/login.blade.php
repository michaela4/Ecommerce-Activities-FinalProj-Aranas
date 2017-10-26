@extends('layout')

@section('content')

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>
@if(Session::has('error'))
<div class="alert-box success">
  <h2>{{ Session::get('error') }}</h2>
</div>
@endif

<div class="controls">
{{ Form::text('userName','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Please Enter your Username')) }}
<p class="errors">{{$errors->first('userName')}}</p>
</div>
<div class="controls">
{{ Form::password('passWord',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) }}
<p class="errors">{{$errors->first('passWord')}}</p>
</div>
<p>{{ Form::submit('Login', array('class'=>'send-btn')) }}</p>
{{ Form::close() }}

@endsection