@extends('layouts.app')

@section('main')
    <div>
        @foreach ($trips as $trip)
            <div class="card">
                <div>ID: {{$trip['id']}}</div>
                <div>Start date: {{$trip['departure_date']}}</div>
                <div>End date: {{$trip['end_date']}}</div>
                <div>Description: {{$trip['trip_description']}}</div>
                <div>Name: {{$trip['trip_name']}}</div>
                <div>Price: {{$trip['price']}}$</div>
                <div>Max number of oartecipant{{$trip['num_of_partecipant']}}</div>
            </div>
        @endforeach
    </div>
@endsection