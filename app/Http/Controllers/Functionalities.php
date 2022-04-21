<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class Functionalities extends Controller
{
    //
    function add(Request $request) {
        $event = new Event();
        $event->event = $request->event;
        $event->save();
        return redirect('/');
    }

    function show() {
        $event = Event::all();
        return view('welcome', ['events'=>$event]);
    }

    function delete($id) {
        $event = Event::find($id);
        $event->delete();
        return redirect('/');
    }

    function editData($id) {
        $event = Event::find($id);
        return view('edit', ['event'=>$event]);
    }

    function edit(Request $request) {
        $event = Event::find($request->id);
        $event->event = $request->event;
        $event->save();
        return redirect('/');
    }
}
