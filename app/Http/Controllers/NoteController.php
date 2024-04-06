<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store()
    {
        request()->validate([
            'content' => 'required|min:5|max:200'
        ]);

        Notes::create([
            'note' => request()->get('content', '')
        ]);

        return redirect()->route('homepage')->with('success', 'note added succesfully');
    }

    public function destroy(Notes $id)
    {
        $id->delete();

        return redirect()->route('homepage')->with('delete', 'deleted succesfully');
    }
}