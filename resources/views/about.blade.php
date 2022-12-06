@extends('layouts.main')

@section('container')
   <h1>halaman about</h1>
   <h3>{{ $name }}</h3>
   <p>{{ $email }}</p>
   <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width=200px class="img-thumanail rounded-circle">
@endsection