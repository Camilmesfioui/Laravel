@if(count(Auth::user()->posts) > 0)
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Mes articles</h4>
        </div>
        <div class="panel-body">
            @foreach(Auth::user()->posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('post.show', $post->id) }}">
                            <h4>{{ $post->title }}</h4>
                        </a>
                    </div>
                    <div class="panel-body">
                        <p>{{$post->content}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif


