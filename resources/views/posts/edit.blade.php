@extends('layouts.app')


@section('content')
<h1>Edit post</h1>
<form method = "post"   action="/posts/{{$post->id}}">
@csrf
<input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" value="{{$post->title}}">
    <input type="text" name="user_id" value="{{$post->user_id}}">
    <input type="text" name="content" value="{{$post->content}}">
    <input type="submit" name="submit" value="UPDATE">
</form>

<form method="post" action="/posts/{{$post->id}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<input type="submit" value="DELETE">
</form>

@endsection