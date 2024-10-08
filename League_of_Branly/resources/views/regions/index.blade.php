@extends('layouts.app')

@section('content')
<div class="container">
    <x-page-header title="Regions" :create-route="route('regions.create')" />

    <x-table-grid-view
        title="regions"
        :items="$regions"
        :columns="['name' => 'Name', 'description' => 'Description']"
        route-prefix="regions" />
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

    .card {
        background-color: var(--blue-7);
        color: var(--gold-1);
        border-color: var(--gold-5);
    }

    .card-body {
        background-color: var(--blue-6);
    }
</style>
@endsection