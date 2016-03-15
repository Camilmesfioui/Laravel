@foreach(Auth::user()->posts as $post)
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('post.show', $post->id) }}">
                <h4>{{ $post->title }}</h4>
            </a>
        </div>

        <div class="panel-body">
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endforeach

