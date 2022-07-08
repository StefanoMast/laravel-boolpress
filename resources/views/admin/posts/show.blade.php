@extends('layouts.dashboard')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>Slug: {{ $post->slug}}</p>
    <p>Categoria: {{ $category ? $category->name : 'nessuna categoria'}}</p>
    <p>Tags: 
        @forelse ($post->tags as $tag)
            {{$tag->name}}{{$loop->last ? '':','}}
        @empty
            nessuno
        @endforelse
    </p>
    <p>{{ $post->content}}</p>
    <a class="btn btn-primary" href="{{route('admin.posts.edit', ['post'=> $post->id])}}"></a>
@endsection
