@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <div class="col-lg-3">
                    <div class="card mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="https://picsum.photos/seed/picsum/300/200" alt="Card image cap">
                        <div class="card-body">
                            <p><span>{{ $announcement->title }}</span>
                            <p>{{ $announcement->content }}</p>
                            <p>{{ $announcement->price }} €</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
            @foreach($comments as $comment)
                <div class="col-lg-3">
                    <div class="card mb-5" style="width: 18rem;">
                        <div class="card-body">
                            <p>{{ $comment->content }}</p>
                            <p>{{ $comment->user->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
