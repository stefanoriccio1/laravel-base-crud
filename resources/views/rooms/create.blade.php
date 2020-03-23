<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
