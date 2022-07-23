@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8"></div>
        
            <h2>{{ $post->title }}</h2>
            <h6 class="mb-3">by: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        
        <article class="my-3">
            {!! $post->body !!}
        </article>
        
    
        
    
        <a href="/blog" class="display-block mt-3">Back to post</a>
    </div>
</div>
@endsection

