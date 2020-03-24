<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1>Insert a Room</h1>
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
    <form class="" action="{{route('rooms.store')}}" method="post">
      @csrf
        <input name="room_number" type="text" value="" placeholder='Room Number'>
        <input name="floor" type="text" value="" placeholder = 'Floor'>
        <input name="beds" type="text" value="" placeholder= 'Beds'>

        <button type="submit" name="button">Save</button>
      @method('POST')
    </form>
  </body>
</html>
