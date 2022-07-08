@extends('layouts.dashboard')

@section('content')
    <h1>Lista dei tuoi post</h1>

    <div class="row row-cols-3">
        @foreach ($posts as $post)
            {{-- single post --}}
        <div class="col">
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p class="card-text">Some quick example text to built on the card and make up the bulk of the card's content.</p>
                    <a href="{{ route('admin.posts.show', ['post'=>$post->id])}}" class="btn btn-primary">Leggi Post</a>
                </div>
            </div>
        </div>
        {{-- end single post --}}
        @endforeach
        
    </div>
    {{$posts->links}}
@endsection
