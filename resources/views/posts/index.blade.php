@extends('layouts.app')


@section('content')
<ul>

    @foreach($posts as $post)
     <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
     <li><a href="{{route('posts.edit', $post->id)}}">Editar {{$post->title}}</a></li>
     </br>

    
    @endforeach




</ul>

@endsection