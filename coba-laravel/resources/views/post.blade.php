@extends('layouts.main')

@section('container')
   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-8">
            <h1 class="mb-3">{{ $post["title"] }}</h1>
               <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category?{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
               <img src="https://www.teahub.io/photos/full/116-1166956_1200-x-480.jpg" alt="..." class="img-fluid">

            <article class="my-3 fs-5">
               {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block mt-5">Back To Posts!</a>

         </div>
      </div>
   </div>
@endsection