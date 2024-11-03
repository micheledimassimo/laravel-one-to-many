@extends('layouts.app')

@section('page-title', 'Index')

@section('main-content')

    <h1 class="text-center text-dark text-uppercase">
        Types
    </h1>
    <div class="row">
        @foreach ($types as $type)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <span>
                        {{ $type->id }}
                        </span>
                        <h4>
                            {{ $type->type }}
                        </h4>
                        <h5>
                            {{ $type->category }}
                        </h5>
                        
                        <a href="{{ route('admin.types.show', ['type' => $type->id]) }}" class="btn btn-success">
                            Mostra
                        </a>
                        <a href="{{ route('admin.types.create') }}" class="btn btn-primary">
                            Aggiungi
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
