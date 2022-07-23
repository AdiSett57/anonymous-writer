
@extends('layouts.main')
@section('container')
<h3 class="mb-5 border-bottom p-2 text-center">{{ $title }}</h3>
<div class="row">
  <form action="/posts">
      <div class="input-group mb-3">
        @if(request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
        <input type="text" class="form-control" name="search" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
      </div>
  </form>
</div>

@if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
           <small>By.<a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> / <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
       
        </div>
    </div>
<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style=" background-color:rgba(0, 0, 0, 0.514) "><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small>By.<a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>{{ $post->created_at->diffForHumans() }}</small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No post found.</p>
    
@endif

@endsection