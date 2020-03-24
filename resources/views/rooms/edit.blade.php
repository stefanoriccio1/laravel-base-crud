<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1>Modify a Room</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </header>
    <form class="" action="{{route('rooms.update', $room->id)}}" method="post">
      @csrf
        <input name="room_number" type="text" value="{{$room->room_number}}" placeholder='Room Number'>
        <input name="floor" type="text" value="{{$room->floor}}" placeholder = 'Floor'>
        <input name="beds" type="text" value="{{$room->beds}}" placeholder= 'Beds'>


        <input type="hidden" name="id" value="{{$room->id}}">
        <button type="submit" name="button">Save</button>
      @method('PATCH')
    </form>
  </body>
</html>
