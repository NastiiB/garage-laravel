@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('announcements.create') }}" class="btn btn-primary">Ajouter une annonce</a>
        </div>
        <div class="row">
            @foreach($announcements as $announcement)
                <div class="col-lg-3">
                    <div class="card mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="https://picsum.photos/seed/picsum/300/200" alt="Card image cap">
                        <div class="card-body">
                            <p>{{ $announcement->title }}</p>
                            <p>{{ $announcement->content }}</p>
                            <p>{{ $announcement->price }} €</p>
                            <a href="{{ route('announcements.show', $announcement) }}" class="btn btn-primary">Voir l'annonce</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
