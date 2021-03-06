<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
  public function roomDetail()
  {
    return view('frontend.room-detail');
  }

  public function room()
  {
    return view('frontend.room');
  }

  public function index()
  {
    return view('backend.room.reservation.index');
  }

  public function ourroom()
  {
    return view('backend.room.our-rooms.index');
  }
}
