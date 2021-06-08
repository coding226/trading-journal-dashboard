<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Auth;
use Carbon\Carbon;

class ToolsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function notes()
    {
        $notes = Note::where('user_id', Auth::user()->id)->get();
        return view('users.tools.note')->with('notes', $notes);
    }

    public function addnote(Request $request)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);
        $note = new Note;

        if($request->file('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $location = 'assets/images/note';
            $file->move($location,$filename);
            $note->image = $location.'/'.$filename;
        }

        
        $note->user_id = Auth::user()->id;
        $note->datetime = Carbon::createFromFormat('m/d/Y', $request->datetime)->format("Y-m-d");
        $note->title = $request->title;
        $note->description = $request->description;
        $note->index = $request->index;
        $note->indexcolor = str_replace('bg', 'badge', $request->indexcolor);
        $note->save();

        return redirect()->back();
    }

    public function ecocal()
    {
        return view('users.tools.ecocal');
    }

    public function nationalcal()
    {
        return view('users.tools.nationalcal');
    }

    public function markethour()
    {
        return view('users.tools.markethour');
    }

    public function currency()
    {
        return view('users.tools.currency');
    }
}
