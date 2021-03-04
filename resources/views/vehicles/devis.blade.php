@extends('layouts.app')

@section('contengt')

    <div class="row ">
        <div class="col-lg-6 ">
            <h1>Demande de devis :</h1>
            <form method="POST" action="{{route('vehicles.devis.store')}}">
                <select class="form-control" name="vehicle_id">
                    <option value="">Séléctionner un vehicule</option>
                    @foreach($vehicles as $vehicle)
                        <option value="{{$vehicle->id}}"> {{$vehicle->name}} </option>
                    @endforeach
                </select>

                @csrf

                <div class="form-group">
                    <label for="">Date de début de la réservation</label>
                    <input  class="form-control" type="date" name="starting_at">
                </div>

                <div class="form-group">
                    <label for="">Date de fin de la réservation</label>
                    <input  class="form-control" type="date" name="ending_at">
                </div>

                <button type="submit" class="btn btn-primary">Devis de votre location</button>
            </form>
        </div>


    </div>

@endsection
