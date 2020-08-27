@extends('layouts.app')
@section('content')
@include('commons.navbar')
@include('commons.error_messages')
<div class="container">
    <div class="row">
        <h5 class="mx-auto font-weight-bold mt-4 mb-4">新規投稿</h5>
    </div>
    <div class="mx-auto  col-md-5 offset-md-4" >
        {!! Form::open(['route' => 'records.store']) !!}
            {!! Form::text('title', old('title'), ['class' => 'form-control mb-4', 'rows' => '1','placeholder' => 'タイトル：最大20字以内。']) !!}
            {!! Form::textarea('content', old('content'), ['class' => 'form-control mb-1 text-area', 'rows' => '10' , 'placeholder' => '学習内容：最大400文字以内']) !!}  
            {!! Form::submit('送信', ['class' => 'btn btn-outline-dark pr-4 pl-4  rounded-pill ']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection