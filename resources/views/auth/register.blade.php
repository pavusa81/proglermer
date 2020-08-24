@extends('layouts.app')

@section('content')
    <div class="text-center m-4">
        <h1>新規登録</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group row">
                    {!! Form::label('name', 'お名前', ['class' => 'col-sm-4 col-form-label font-weight-bold']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control col-sm-8']) !!}
                </div>

                <div class="form-group row">
                    {!! Form::label('email', 'e-mail' , ['class' => 'col-sm-4 col-form-label font-weight-bold']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control col-sm-8']) !!}
                </div>

                <div class="form-group row">
                    {!! Form::label('password', 'パスワード' , ['class' => 'col-sm-4 col-form-label font-weight-bold']) !!}
                    {!! Form::password('password', ['class' => 'form-control col-sm-8']) !!}
                </div>

                <div class="form-group row">
                    {!! Form::label('password_confirmation', 'パスワード再入力' , ['class' => 'col-sm-4 col-form-label font-weight-bold']) !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control col-sm-8']) !!}
                </div>

                {!! Form::submit('送信', ['class' => 'btn btn-outline-dark logo-small rounded-pill btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection