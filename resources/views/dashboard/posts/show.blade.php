@extends('dashboard.layouts.main')

@section('container')
   <div class="container">
      <div class="row my-3">
         <div class="col-lg-8">
            <h1 class="mb-3">{{ $post["title"] }}</h1>
               {{-- <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category?{{ $post->category->slug }}">{{ $post->category->name }}</a></p> --}}

               <a href="/dashboard/posts" class="btn btn-success mb-2" ><span data-feather="arrow-left"></span> to my posts</a>
               <a href="" class="btn btn-warning mb-2"><span data-feather="edit"></span> Edit</a>
               <a href="" class="btn btn-danger mb-2"><span data-feather="x-circle"></span> Deleted</a>


               <img src="https://www.teahub.io/photos/full/116-1166956_1200-x-480.jpg" alt="..." class="img-fluid">

            <article class="my-3 fs-5">
               {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block mt-5">Back To Posts!</a>

         </div>
      </div>
   </div>
@endsection