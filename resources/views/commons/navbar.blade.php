<header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="/" class="navbar-brand logo-small">Prog-leamer</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav navi-white">
                        @if (Auth::check())
                            <li class="nav-item mr-4">{!! link_to_route('records.index', '学習記録一覧', [], ['class' => 'nav-link']) !!}</li>
                            <li class="nav-item mr-4">{!! link_to_route('users.index', '学習者一覧', [], ['class' => 'nav-link']) !!}</li>
                            <li class="nav-item mr-4">{!! link_to_route('records.create', '新規投稿', [], ['class' => 'nav-link']) !!}</li>
                            <li class="nav-item mr-4">{!! link_to_route('logout.get', 'ログアウト' , [], ['class' => 'nav-link']) !!}</li>
                        @else
                            <li class="nav-item mr-4">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                            <li class="nav-item mr-4">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                        @endif
                    </ul>
                </div>
        </nav>
</header>