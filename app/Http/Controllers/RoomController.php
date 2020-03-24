<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        // dd($rooms);
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
          'room_number' => 'required|numeric',
          'floor' => 'required|numeric',
          'beds' => 'required|numeric',
        ]);

        $room = new Room;
        // $room->room_number = $data['room_number'];
        // $room->floor = $data['floor'];
        // $room->beds = $data['beds'];
        $room->fill($data);
        $save = $room->save();

        if($save == true){
          $room = Room::orderBy('id','desc')->first();
          return redirect()->route('rooms.show', compact('room'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        // $room = Room::find($id);

        if(empty($room)){
          abort('404');
        }
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
      // dd($room);
      if(empty($room)){
        abort('404');
      }

      return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        if(empty($room)){
          abort('404');
        }

        $data = $request->all();
        $request->validate([

          'room_number' => 'required|numeric',
          'floor' => 'required|numeric',
          'beds' => 'required|numeric',
        ]);

        $updated = $room->update($data);
        if($updated == true){
          $room = Room::find($id);
          return redirect()->route('rooms.show', compact('room'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $id = $room->id;
        $deleted = $room->delete();
        $data = [
          'id' => $id,
          'rooms' => Room::all()
        ];
        return view('rooms.index', $data);
    }

}
