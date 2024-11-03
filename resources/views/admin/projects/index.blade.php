@extends('layouts.app')

@section('page-title', 'Index')

@section('main-content')

    <h1 class="text-center text-dark text-uppercase">
        Projects
    </h1>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <span>
                        {{ $project->id }}
                        </span>
                        <h4>
                            {{ $project->name }}
                        </h4>
                        <h5>
                            {{ $project->company }}
                        </h5>
                        <p>
                            N. collaboratori: {{ $project->workers }}
                        </p>
                        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-success">
                            Mostra
                        </a>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                            Aggiungi
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
