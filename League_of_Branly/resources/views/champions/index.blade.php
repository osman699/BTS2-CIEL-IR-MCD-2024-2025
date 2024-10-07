{{-- resources/views/champions/index.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Champions List</h1>

    {{-- Check if there are any champions --}}
    @if($champions->isEmpty())
    <p>No champions available.</p>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Title</th>
                <th>Role</th>
                <th>Region</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($champions as $champion)
            <tr>
                <td>{{ $champion->id }}</td>
                <td>{{ $champion->name }}</td>
                <td>{{ $champion->title }}</td>
                <td>
                    {{-- Assuming champion has a relationship with roles --}}
                    @foreach($champion->roles as $role)
                    {{ $role->role_name }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </td>
                <td>{{ $champion->region->name ?? 'No region' }}</td>
                <td>
                    <a href="{{ route('champions.show', $champion->id) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('champions.edit', $champion->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('champions.destroy', $champion->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    {{-- Link to create a new champion --}}
    <a href="{{ route('champions.create') }}" class="btn btn-success">Add New Champion</a>
</div>
@endsection