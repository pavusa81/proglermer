@extends('layouts.app')

@section('content')

    @if (Auth::check())
    @include('commons.navbar')
    <div class="container">
        <div class="row">
            <h5 class="mx-auto font-weight-bold mt-4 mb-4">学習記録一覧</h5>
        </div>
    </div>
        @include('records.index')
    @else
    <div class="container">
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
        <div class="row">
            <p class="mx-auto font-weight-bold para">Prog-leamerは、プログラミング学習を記録することによって、<br>
            初学者がどのくらい学習を積み重ねて来たか？
            を確認し<br>モチベーションを高めるきっかけになる為のアプリケーションです。
            </p>
        </div>
    </div>
    @endif
@endsection