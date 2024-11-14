@extends('dashboard.master')

@section('content')

<table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Opcions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->title }}</td>
                <td class="table-actions">
                    <a href="{{ route('category.edit', $c) }}" class="edit">Edit</a>
                    <a href="{{ route('category.show', $c) }}"  class="show">Show</a>
                    <form action="{{ route('category.destroy',$c) }}" method="post" class="inline-block">
                        @method('DELETE')
                        @csrf|
                        <button type="submit" class="delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>


    {{ $categories->Links() }}

    <a class="crear" href="{{ route('category.create') }}" target="blank">Create</a>
@endsection