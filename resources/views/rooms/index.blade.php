@extends('layouts.layout')

@section('header')
 <h1>Rooms index</h1>
@endsection

@section('main')
  @foreach ($rooms as $room)
    <div class="room">
      <ul>
        <li>id: {{$room->id}}</li>
        <li>Room number: {{$room->room_number}}</li>
        <li>Floor: {{$room->floor}}</li>
        <li>Number of beds: {{$room->beds}}</li>
      </ul>
    </div>
  @endforeach
@endsection
