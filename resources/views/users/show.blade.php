@extends('layouts.app')
@section('content')
@include('commons.navbar')
    <div class="row">
        <h5 class="mx-auto font-weight-bold mt-4 mb-4">学習者詳細</h5>
    </div>
    <div class="row">
        <div class="mx-auto mt-4 mb-4">
            <img class="mr-2 rounded-circle" src="{{ Gravatar::get($user->email, ['size' => 250]) }}" alt=""></h3>
        </div>  
    </div>
    <div class="row">
        <div class="mx-auto">
        @include('records.index')
        </div>
    </div>
@endsection