@extends('master')

@section('content')
<h1>contact1</h1>
<p>{{ $name }}</p>

@if ($name != 'Alexis')
    Tu nombre no es alexis
    @else
    Tu nombre es Alexis
@endif

<ul>
@foreach ([1,2,3,4,5] as $item)
<li>{{ $item }}
    
@endforeach
@endsection