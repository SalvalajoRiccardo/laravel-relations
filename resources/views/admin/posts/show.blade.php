@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Post Numero: {{$post->id}}
    </div>

    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->content}}</p>
        <p class="card-text">slug: {{$post->slug}}</p>
        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Go back</a>
    </div>
</div>
@endsection