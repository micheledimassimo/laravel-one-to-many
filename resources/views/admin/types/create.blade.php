@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')

    <h1 class="text-center text-dark text-uppercase">
       Create Projects
    </h1>
    <div class="row">
        <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf


            @if ($errors->any())
                <div class="alert alert-danger my-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="mb-3">
                    <label for="title" class="form-label">Nome Progetto</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Inserisci il nome.." maxlength="64">
                </div>
                <div class="mb-3">
                    <label for="src" class="form-label">Nome Compagnia</label>
                    <input type="text" class="form-control" id="company" name="company" required placeholder="Inserisci il nome della compagnia.." maxlength="64">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Numero Collaboratori</label>
                    <input type="number" class="form-control" id="workers" name="workers" required placeholder="Inserisci il numero di collaboratori.." max="9">
                </div>

                <button type="submit" class="btn btn-success">Aggiungi</button>
        </form>
    </div>
@endsection
