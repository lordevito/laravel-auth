@extends('layouts.admin')

@section('content')
    <h2 class="my-3">{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>
    <p>Linguaggi utilizzati: {{ $project->languages }}</p>
    <p>Framework utilizzati: {{ $project->frameworks }}</p>
@endsection