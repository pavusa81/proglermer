@extends('layouts.app')
@section('content')
@include('commons.navbar')
@include('commons.error_messages')
<div class="container">
    <div class="row">
        <h5 class="mx-auto font-weight-bold mt-4 mb-4">投稿編集</h5>
    </div>
    <div class="mx-auto  col-md-5 offset-md-4" >
        {!! Form::model($record, ['route' => ['records.update', $record->id], 'method' => 'put']) !!}
            {!! Form::text('title', null, ['class' => 'form-control mb-4', 'rows' => '1',]) !!}
            {!! Form::textarea('content', null, ['class' => 'form-control mb-1 text-area', 'rows' => '10' , ]) !!}  
            {!! Form::submit('更新', ['class' => 'btn btn-outline-dark pr-4 pl-4  rounded-pill ']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection