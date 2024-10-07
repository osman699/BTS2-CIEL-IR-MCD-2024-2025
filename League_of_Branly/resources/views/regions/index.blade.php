@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Regions</h1>

    <a href="{{ route('regions.create') }}" class="btn btn-primary mb-3">Create New Region</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($regions as $region)
            <tr>
                <td>{{ $region->name }}</td>
                <td>{{ $region->description }}</td>
                <td>
                    <a href="{{ route('regions.edit', $region) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('regions.destroy', $region) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('styles')
<style>
    .table {
        background-color: var(--blue-7);
        color: var(--gold-1);
    }

    .table th {
        color: var(--gold-2);
    }

    .btn-primary {
        background-color: var(--gold-5);
        border-color: var(--gold-5);
        color: var(--blue-7);
    }

    .btn-primary:hover {
        background-color: var(--gold-4);
        border-color: var(--gold-4);
        color: var(--blue-7);
    }

    .btn-secondary {
        background-color: var(--blue-4);
        border-color: var(--blue-4);
        color: var(--gold-1);
    }

    .btn-secondary:hover {
        background-color: var(--blue-3);
        border-color: var(--blue-3);
        color: var(--gold-1);
    }

    .btn-danger {
        background-color: #d9534f;
        border-color: #d9534f;
        color: var(--gold-1);
    }

    .btn-danger:hover {
        background-color: #c9302c;
        border-color: #c9302c;
        color: var(--gold-1);
    }
</style>
@endsection