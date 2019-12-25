@extends('main')

@section('body')

    <h1 class="display-4">Mis Posts</h1>

    @foreach($posts as $post)

        <div class="container">
            <a class="display-5" href="{{route('post',$loop->index + 1)}}" >{{$post}}</a>
        </div>

    @endforeach

@endsection
