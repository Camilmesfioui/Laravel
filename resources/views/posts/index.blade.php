@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
            </div>
            @foreach($list as $post)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('post.show', $post->id) }}">
                                <h4>{{ $post->title }}</h4>
                            </a>
                            <div class="text-right">
                                <h5>{{ $post->created_at }}</h5>
                            </div>
                        </div>

                        <div class="panel-body">
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
           <div class="text-center">
               {!! $list->links() !!}
           </div>
        </div>
    </div>
@endsection