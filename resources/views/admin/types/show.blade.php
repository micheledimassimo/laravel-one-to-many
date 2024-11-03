@extends('layouts.app')

@section('page-title', 'Show')

@section('main-content')

    <h1 class="text-center text-dark text-uppercase">
        Single Type
    </h1>
    <div class="row">
        
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h4>
                            {{ $type->type }}
                        </h4>
                        <h5>
                            {{ $type->category }}
                        </h5>
                        
                    </div>
                </div>
            </div>
        
    </div>
@endsection
