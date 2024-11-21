@extends('blog.master')

@section('content')
    <x-blog.post.index :posts='$posts'>
        Post List

        @slot('footer')
        Footer
    @endslot

    @slot('extra', 'extra')



    </x-blog.post.index>
@endsection