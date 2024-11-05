@extends('dashboard.master')

@section('content')


    <a href="{{ route('post.create') }}" target="blank">Create</a>

<table>
        <thead>
        <tr>
            <td>Title</td>
            <td>Posted</td>
            <td>Category</td>
            <td>Opcions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $p)
            <tr>
                <td>
                    {{ $p->title }}
                </td>
                <td>
                    {{ $p->posted }}
                </td>
                <td>
                    {{ $p->category->title }}
                </td>
                <td>
                    <a href="{{ route('post.edit', $p) }}">Edit</a>
                    <a href="{{ route('post.show', $p) }}">Show</a>
                    <form action="{{ route('post.destroy',$p) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

    {{ $posts->Links() }}
@endsection