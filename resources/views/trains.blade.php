@extends('layouts.master');
@section('title', 'trains')

@section('trains-content')
    @foreach ($trains as $train)
        <p>{{ $train['company'] . ' _ ' . $train['Departure_Station'] . ' _ ' . $train['Train_Code'] }}</p>
    @endforeach
@endsection
