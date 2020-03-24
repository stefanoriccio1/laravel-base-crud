@extends('layouts.layout')

@section('header')
 <h1>Rooms index</h1>
@endsection

@section('main')
  @foreach ($rooms as $room)

    {{$room->id}}
    {{$room->room_number}}
    {{$room->floor}}
    {{$room->beds}}
    
  @endforeach
@endsection
