@extends('cars.layouts.master')

@section('content')
   
        @foreach($cars as $car)
        <div><a href='cars/{{$car->id}}'>{{ $car->title }}</a></div>

        @endforeach

@endsection
    

