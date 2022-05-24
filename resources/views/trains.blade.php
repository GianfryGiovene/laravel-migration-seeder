@extends('layouts.master');
@section('title', 'trains')

@section('trains-content')
    @foreach ($trains as $train)
        <p>{{ $train['company'] .
            ' _ ' .
            $train['Departure_Station'] .
            ' _ ' .
            $train['Train_Code'] .
            ' _ ' .
            $train['Departure_Time'] .
            ' _ ' .
            date('H:i:s') }}
        </p>
    @endforeach
    <a href="/">Home</a>
@endsection
