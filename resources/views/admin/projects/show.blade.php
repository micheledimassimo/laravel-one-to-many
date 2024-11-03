@extends('layouts.app')

@section('page-title', 'Show')

@section('main-content')

    <h1 class="text-center text-dark text-uppercase">
        Single Project
    </h1>
    <div class="row">
        
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h4>
                            {{ $project->name }}
                        </h4>
                        <h5>
                            {{ $project->company }}
                        </h5>
                        <p>
                            N. collaboratori: {{ $project->workers }}
                        </p>
                    </div>
                </div>
            </div>
        
    </div>
@endsection
