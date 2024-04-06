<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('index', [
            'notes' => Notes::orderBy('created_at', 'DESC')->paginate(18)
        ]);
    }
}