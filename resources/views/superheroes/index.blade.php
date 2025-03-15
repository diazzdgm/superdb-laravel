@extends('layouts.app')

@section('content')
<h1>Superheroes List</h1>
<a href="{{ route('superheroes.create') }}">Add Superhero</a>
<table>
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Universe</th>
        <th>Actions</th>
    </tr>
    @foreach ($superheroes as $superhero)
    <tr>
        <td>{{ $superhero->name }}</td>
        <td>{{ $superhero->gender->name }}</td>
        <td>{{ $superhero->universe->name }}</td>
        <td>
            <a href="{{ route('superheroes.edit', $superhero->id) }}">Edit</a>
            <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
