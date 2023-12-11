<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show() {

      $events = Event::all();
      return view('welcome', ['events' => $events]);
    }
}
