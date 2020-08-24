@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="logo-posi mt-5 head-border logo-midium">Prog-leamer</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    
            
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3 mt-3">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-outline-dark logo-small rounded-pill btn-block']) !!}</div>
            <div class="col-sm-3 mt-3">{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-outline-dark logo-small rounded-pill btn-block']) !!}</div>
            <div class="col-sm-3"></div>
        </div>
@endsection