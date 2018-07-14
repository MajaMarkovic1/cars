@extends('cars.layouts.master')

@section('content')

    <div>{{ $car->title }}</div>
    <div>{{ $car->producer }}</div>
    <div>{{ $car->number_of_doors }}</div>
    
@endsection