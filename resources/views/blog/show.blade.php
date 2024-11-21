@extends('blog.master')

@section('content')

    <x-blog.show :post="$post">

    </x-blog.show>


    {{--  <div class="card">
        <h1>{{ $post->title }}</h1>
        <span>{{ $post->category->title }}</span>
    
        <hr>
    
        {{ $post->content }}
    </div>  --}}
@endsection