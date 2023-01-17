@extends('layouts.admin')

@section('title', $project->title)

@section('content')

    <div class="container mt-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary" type="button>
            <i class="fa-solid
            fa-arrow-left"></i>
            Torna a Progetti
        </a>
        <h2>Dettagli del progetto {{ $project->title }}</h2>
        <p>Ultimo aggiornamento: {{ $project->production_date }}</p>
        <p>Descrizione: {{ $project->description }}</p>
        @if ($project->type?->project_type)
            <p>Tipo di progetto: {{ $project->type->project_type }}</p>
        @endif
        @if ($project->user?->name)
            <p>Creato da: {{ $project->user->name }}</p>
        @endif
        {{-- @if ($project->technologies?->technologies)
            <p>{{ $project->technologies->technologies }}</p>
        @endif --}}

        <p>Immagine:</p>
        <div>
            @if ($project->new_image)
                <img src="{{ asset('storage/' . $project->new_image) }}" alt="{{ $project->slug }}-image">
            @else
                <img src="{{ asset('storage/images/not-found.jpeg') }}" alt="not-found">
            @endif
        </div>
    </div>
@endsection
