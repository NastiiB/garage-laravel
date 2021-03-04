@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Ajouter une annonce</h1>
            </div>
        </div>

        @include('layouts.includes.form-errors')

        <div class="row">
            <div class="col-lg-6">
                <form method="POST" action="{{ route('announcements.store', $user) }}">

                    <div class="form-group">
                        <label for="">Titre</label>
                        <input  class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input class="form-control" type="text" name="content">
                    </div>

                    <div class="form-group">
                        <label for="">Prix</label>
                        <input class="form-control" type="number" name="price">
                    </div>
                    @csrf

                    <button type="submit" class="btn btn-primary">Créer une annonce</button>
                </form>
            </div>
        </div>
    </div>
@endsection
