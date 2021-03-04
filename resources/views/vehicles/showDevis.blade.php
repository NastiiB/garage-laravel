@extends('layouts.app')

@section('content')

    <div class="row ">
        <div class="col-lg-6 ">
            <h1>Résultat de votre devis pour {{$days}} jours :</h1>
            <h2>Voiture : {{$vehicleName}}</h2>
            <h2>Prix HT : {{$priceHT}}€</h2>
            <h2>Prix TTC : {{$priceTTC}}€</h2>

        </div>


    </div>

@endsection
