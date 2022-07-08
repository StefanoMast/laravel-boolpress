@extends('layouts.dashboard')

@section('content')
    <h2>Categoria: {{$category->name}}</h2>
    <p>Slug: {{$category->slug}}</p>
    <ul>
        @forelse ($category->posts as $post)
            <li>
                <a href="{{route('admin.posts.show', ['post'=> $post->id])}}">{{$post->title}}</a>
            </li>
            
        @empty
            <li>nessun post correlato</li>
        @endforelse
    </ul>
@endsection