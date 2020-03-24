@extends('layouts.layout')
@section('header')
  <h1>Insert a new room</h1
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
@endsection
@section('main')
    <form class="" action="{{route('rooms.store')}}" method="post">
      @csrf
      @method('POST')
      <div>
        <input name="room_number" type="text" value="" placeholder='Room Number'>
      </div>
      <div>
        <input name="floor" type="text" value="" placeholder = 'Floor'>
      </div>

      <div>
        <input name="beds" type="text" value="" placeholder= 'Beds'>
      </div>
        <div class="">
          <button type="submit" name="button">Save</button>
        </div>
    </form>
@endsection
