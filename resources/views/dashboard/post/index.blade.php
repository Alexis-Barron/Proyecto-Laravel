@extends('dashboard.master')

@section('content')

<table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Posted</th>
            <th>Category</th>
            <th>Opcions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $p)
            <tr>
                <td>{{ $p->title }}</td>
                <td>{{ $p->posted }}</td>
                <td>{{ $p->category->title }}</td>
                <td class="table-actions">
                    <a href="{{ route('post.edit', $p) }}" class="edit">Edit</a>
                    <a href="{{ route('post.show', $p) }}" class="show">Show</a>
                    <form action="{{ route('post.destroy', $p) }}" method="post" class="inline-block">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="delete">Delete</button>
                    </form>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

    {{ $posts->Links() }}

    <a class="crear" href="{{ route('post.create') }}" target="blank">Create</a>
@endsection