@extends('layouts.master');
@section('title', 'trains')

@section('trains-content')
    @foreach ($trains as $train)
        <p>{{ $train['company'] .
            ' _ ' .
            $train['departure_station'] .
            ' _ ' .
            $train['train_code'] .
            ' _ ' .
            $train['departure_time'] .
            ' _ ' .
            date('H:i:s') }}
        </p>
    @endforeach
    <a href="/">Home</a>
@endsection
