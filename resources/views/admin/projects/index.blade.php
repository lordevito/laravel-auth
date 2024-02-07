@extends('layouts.admin')

@section('content')
<h2 class="my-2">Lista dei progetti</h2>
<a href="{{ route('admin.projects.create') }}">Aggiungi un nuovo progetto</a>
<table class="table table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Linguaggi</th>
            <th scope="col">Frameworks</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->languages }}</td>
                <td>{{ $project->frameworks }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection