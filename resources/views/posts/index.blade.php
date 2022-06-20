
@extends('layouts.main')


@section('content')

     @foreach ( $posts as $post )    
      <h1> <a href="post/title" class="text-decoration-none"> <i class="bi bi-journal-text"></i>  Title Post  </a> </h1> 
     <p> this p tag </p>
     <hr>
     @endforeach
@overwrite