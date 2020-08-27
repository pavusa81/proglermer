
@if (count($records) > 0)
<div class="container">
    <ul class="list-unstyled mx-auto　col-md-6 offset-md-3 mt-4 mb-4">
        @foreach ($records as $record)
            <li class="media mb-4">
                <img class="mr-2 rounded-circle" src="{{ Gravatar::get($record->user->email, ['size' => 100]) }}" alt="">
                <div class="media-body">
                    <div class="font-weight-bold">
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('records.show', $record->title, ['record' => $record->id]) !!}
                        <div class="text-muted">学習日{{ $record->created_at }}</div>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-2">{!! nl2br(e($record->content)) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $records->links() }}
</div>
@endif