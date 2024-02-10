@extends('layouts.admin')

@section('content')
<h2 class="my-2">Lista dei progetti</h2>
<a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm">Aggiungi nuovo progetto</a>
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
                <td><a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary btn-sm">Modifica</a>
                </td>
                <td><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-secondary btn-sm">Mostra</a>
                </td>
                <td><a href="" class="btn btn-danger btn-sm">Cancella</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection