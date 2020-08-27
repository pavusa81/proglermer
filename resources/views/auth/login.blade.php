@extends('layouts.app')
@section('content')
@include('commons.navbar')
@include('commons.error_messages')
<div class="container">
    <div class="row">
        <h5 class="mx-auto font-weight-bold mt-4 mb-4">ログイン</h5>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group row m-3">
                    {!! Form::label('email', 'e-mail' , ['class' => 'col-sm-4 col-form-label font-weight-bold']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control col-sm-8']) !!}
                </div>
                <div class="form-group row m-3">
                    {!! Form::label('password', 'パスワード' , ['class' => 'col-sm-4 col-form-label font-weight-bold']) !!}
                    {!! Form::password('password', ['class' => 'form-control col-sm-8']) !!}
                </div>
                {!! Form::submit('送信', ['class' => 'btn btn-outline-dark logo-small rounded-pill btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection