@include('commons.navbar')
@if (count($users) > 0)
<div class="container">
    <h5 class="text-center font-weight-bold mt-4 mb-4">学習者一覧</h5>
    <ul class="list-unstyled col-md-6 offset-md-3 mt-4 mb-4">
        @foreach ($users as $user)
            <li class="media mb-4">
                <img class="mr-2 rounded-circle" src="{{ Gravatar::get($user->email, ['size' => 100]) }}" alt="">
                <div class="media-body">
                    <div>
                        <p class="ml-5 mt-5 font-weight-bold">{!! link_to_route('users.show', $user->name , ['user' => $user->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
{{ $users->links() }}
</div>
@endif