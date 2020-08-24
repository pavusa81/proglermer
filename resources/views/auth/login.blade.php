@extends('layouts.app')

@section('content')
    <div class="text-center m-4">
        <h1>ログイン</h1>
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
@endsection