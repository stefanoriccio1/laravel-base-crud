@extends('layouts.layout')

@section('header')
 <h1>Rooms index</h1>
 @if(!empty($id))
   <div>
     Hai cancellato la stanza con ID: {{$id}}
   </div>
 @endif
@endsection

@section('main')
  @foreach ($rooms as $room)
    <div class="room">
      <ul>
        <li>id: {{$room->id}}</li>
        <li>Room number: {{$room->room_number}}</li>
        <li>Floor: {{$room->floor}}</li>
        <li>Number of beds: {{$room->beds}}</li>
        <li>
          <form action="{{route('rooms.destroy', $room->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
          </form>
        </li>
      </ul>
    </div>
  @endforeach
@endsection
