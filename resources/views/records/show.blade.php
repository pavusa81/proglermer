@extends('layouts.app')
@section('content')
@include('commons.navbar')
<div class="container">
    <div class="row">
        <h5 class="mx-auto font-weight-bold mt-4 mb-4">学習記録詳細</h5>
    </div>
    <div class="row mx-auto col-md-6 offset-md-3">
        <table class="table table-borderless mt-4 mb-4">
            <tr class="row">
                <th class="col-4">タイトル</th>
                <td class="col-8">{{ $record->title }}</td>
            </tr>
            <tr class="row">
                <th class="col-4">学習記録</th>
                <td class="col-8">{{ $record->content}}</td>
            </tr>
            <tr class="row">
                <th class="col-4">名前</th>
                <td class="col-8">{{ $record->user->name }}</td>
            </tr>
            <tr class="row">
                <th class="col-4">記録日</th>
                <td class="col-8">{{$record->created_at}}</td>
            </tr>
        </table>
        <div class="row mx-auto">
            <div col-6>{!! link_to_route('records.edit', '編集', ['record' => $record->id],['class' => 'btn btn-outline-dark pr-4 pl-4 mr-4  rounded-pill']) !!}</div>
            <div col-6>{!! Form::open(['route' => ['records.destroy', $record->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-outline-danger pr-4 pl-4  rounded-pill']) !!}
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection